# Базовый образ
FROM php:8.1-fpm

# Установка необходимых зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_mysql

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Копирование кода приложения в контейнер
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html/storage

# Установка прав на директорию storage
RUN chmod -R 777 /var/www/html/storage

RUN chmod -R 777 /var/www/html/setup.sh
