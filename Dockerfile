# --- Stage 1: Build Assets with Node ---
FROM node:18-bullseye-slim AS assets-builder
WORKDIR /app

# Install build dependencies if needed
# RUN apt-get update && apt-get install -y python3 make g++

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build

# --- Stage 2: Final Production Image ---
FROM php:8.2-fpm-bullseye

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    nginx

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd zip intl

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing application
COPY . /var/www

# Copy compiled assets from Stage 1
COPY --from=assets-builder /app/public/build /var/www/public/build

# Install PHP dependencies
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Copy Nginx config
COPY nginx.conf /etc/nginx/sites-available/default

# Fix permissions for Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Make start script executable and ensure LF line endings
RUN sed -i 's/\r$//' /var/www/start.sh \
    && chmod +x /var/www/start.sh

EXPOSE 80

CMD ["/var/www/start.sh"]
