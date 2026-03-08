#!/usr/bin/env bash
set -e

# Replace ${PORT} in nginx config
sed -i "s/\${PORT}/${PORT}/g" /etc/nginx/sites-available/default

# Start PHP-FPM in background
php-fpm -D

# Start Nginx in foreground
nginx -g "daemon off;"
