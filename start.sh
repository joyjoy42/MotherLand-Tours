#!/usr/bin/env bash
# Exit on error
set -e

echo "--- MotherLand Tours: Production Startup ---"

# Port Configuration
REAL_PORT=${PORT:-80}
echo "=> Configuring Port: $REAL_PORT"
sed -i "s/\${PORT}/${REAL_PORT}/g" /etc/nginx/sites-available/default
ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# Permissions & Directories
echo "=> Setting up storage and permissions..."
mkdir -p storage/framework/{sessions,cache,views}
mkdir -p storage/logs
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/public

# Check APP_KEY
if [ -z "$APP_KEY" ]; then
    echo "!! ERROR: APP_KEY is missing. Laravel will crash."
    echo "!! Please set APP_KEY in the Render dashboard."
else
    echo "=> APP_KEY detected."
fi

# Database Initialization
echo "=> Running migrations (attempting connection)..."
# We try to migrate, but we don't 'set -e' for this specifically to avoid early exit if DB is slow
php artisan migrate --force --no-interaction || echo "!! WARNING: Migration failed. This might be due to DB connectivity."

# Optimization
echo "=> Optimizing Laravel environment..."
php artisan config:clear
php artisan route:clear
php artisan view:clear
# Note: In production containers, we clear rather than cache to avoid env var capture during build
php artisan storage:link || true

# Start Processes
echo "=> Starting PHP-FPM..."
php-fpm -D

echo "=> Environment ready. Launching Nginx..."
# Tail the logs in background so they appear in Render console
tail -f storage/logs/laravel.log 2>/dev/null &

exec nginx -g "daemon off;"
