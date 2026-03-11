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
echo "=> Checking Database connection..."
# Wait for the DB to be ready
MAX_RETRIES=5
COUNT=0
until php artisan db:show > /dev/null 2>&1 || [ $COUNT -eq $MAX_RETRIES ]; do
    echo "=> Waiting for database... ($((COUNT+1))/$MAX_RETRIES)"
    sleep 2
    COUNT=$((COUNT+1))
done

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
# Ensure PHP errors are sent to stderr so Render captures them
sed -i 's/;catch_workers_output = yes/catch_workers_output = yes/g' /usr/local/etc/php-fpm.d/www.conf || true
sed -i 's/;php_admin_flag\[log_errors\] = on/php_admin_flag[log_errors] = on/g' /usr/local/etc/php-fpm.d/www.conf || true
# CRITICAL: Allow PHP workers to access Render environment variables
sed -i 's/;clear_env = no/clear_env = no/g' /usr/local/etc/php-fpm.d/www.conf || true

php-fpm -D

echo "=> Environment ready. Launching Nginx..."
# Tail both Laravel logs and PHP-FPM logs
tail -n 100 -f storage/logs/laravel.log /var/log/php-fpm.log 2>/dev/null &

exec nginx -g "daemon off;"
