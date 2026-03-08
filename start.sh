#!/usr/bin/env bash
set -e

# Provide a default port if $PORT is not set
REAL_PORT=${PORT:-80}
echo "Starting Nginx on port $REAL_PORT"

# Replace ${PORT} in nginx config
sed -i "s/\${PORT}/${REAL_PORT}/g" /etc/nginx/sites-available/default

# Ensure storage directories exist
mkdir -p storage/framework/{sessions,cache,views}
mkdir -p storage/logs
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Run migrations (ensure tables like 'sessions' exist)
echo "Running migrations..."
php artisan migrate --force --no-interaction

# Cache clear and config (at runtime to pick up Render env vars)
echo "Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan storage:link || true

# Start PHP-FPM in background
echo "Starting PHP-FPM..."
php-fpm -D

# Start Nginx in foreground
echo "Starting Nginx..."
nginx -g "daemon off;"
