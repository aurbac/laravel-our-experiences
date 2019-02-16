#!/bin/bash
cp /var/www/html/.env.example /var/www/html/.env
chown apache:apache /var/www/html -R
chmod -R 777 /var/www/html/storage
/usr/local/bin/composer install --working-dir=/var/www/html --optimize-autoloader --no-dev
/usr/bin/php /var/www/html/artisan key:generate
/usr/bin/php /var/www/html/artisan config:cache