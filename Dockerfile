FROM php:7.4-fpm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y git libzip-dev zip \
    && docker-php-ext-install pdo_mysql zip

WORKDIR /app
