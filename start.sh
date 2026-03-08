#!/usr/bin/env bash
set -e

# Provide a default port if $PORT is not set
REAL_PORT=${PORT:-80}
echo "Starting Nginx on port $REAL_PORT"

# Replace ${PORT} in nginx config
sed -i "s/\${PORT}/${REAL_PORT}/g" /etc/nginx/sites-available/default

# Cache clear and config (optional but recommended for production)
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
