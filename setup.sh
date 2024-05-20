cp .env.example .env

docker-compose exec php composer install

docker-compose exec php php artisan key:generate

echo "Установка завершена"
