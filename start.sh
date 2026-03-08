#!/usr/bin/env bash
set -e

# Provide a default port if $PORT is not set
REAL_PORT=${PORT:-80}
echo "Starting Nginx on port $REAL_PORT"

# Replace ${PORT} in nginx config
sed -i "s/\${PORT}/${REAL_PORT}/g" /etc/nginx/sites-available/default
# Ensure the link exists in sites-enabled
ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# Ensure storage directories exist and are writable
mkdir -p storage/framework/{sessions,cache,views}
mkdir -p storage/logs
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/public

# Create a diagnostic file to test PHP independently of Laravel
echo "<?php phpinfo();" > /var/www/public/test_php.php
chown www-data:www-data /var/www/public/test_php.php

# Run migrations with a retry loop
echo "Attempting to run migrations..."
for i in {1..5}; do
    if php artisan migrate --force --no-interaction; then
        echo "Migrations successful."
        break
    else
        echo "Migration attempt $i failed, retrying in 5s..."
        sleep 5
    fi
done

# Cache clear and config
echo "Optimizing Laravel..."
php artisan config:cache || echo "Config cache failed"
php artisan route:cache || echo "Route cache failed"
php artisan view:cache || echo "View cache failed"
php artisan storage:link || true

# Enable PHP-FPM error logging to stdout
sed -i 's/;error_log = log\/php-fpm.log/error_log = \/proc\/self\/fd\/2/g' /usr/local/etc/php-fpm.conf

# Start PHP-FPM in background
echo "Starting PHP-FPM..."
php-fpm -D

# Start Nginx in foreground
echo "Starting Nginx..."
exec nginx -g "daemon off;"
