#!/bin/bash

cp .env.example .env

docker-compose exec php composer install

docker-compose exec php php artisan key:generate

docker-compose exec chown -R www-data:www-data /var/www/html/storage

docker-compose exec chmod -R 777 /var/www/html/storage

docker-compose exec chmod -R 777 /var/www/html/setup.sh

echo "Установка завершена"
