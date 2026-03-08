#!/usr/bin/env bash
# exit on error
set -o errexit

# Install PHP dependencies
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Install Node dependencies and build assets
npm install
npm run build

# Clear and cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations (ensure migrations are run only once if using a cluster)
# php artisan migrate --force
