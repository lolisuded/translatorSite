#!/usr/bin/env bash
chmod 777 -R /var/www/app/storage
cd /var/www/app/

composer install
php artisan migrate:refresh
php artisan db:seed
/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
/bin/bash