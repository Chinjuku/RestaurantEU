FROM php:8.2.3-fpm

RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update -y && apt-get install -y libicu-dev unzip zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy your application files
COPY ./RestaurantEU /var/www

