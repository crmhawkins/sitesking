#!/bin/sh
set -e
cd /var/www/html
mkdir -p storage/app/public storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs
php artisan storage:link || true
