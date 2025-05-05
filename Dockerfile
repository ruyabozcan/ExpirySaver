FROM php:8.1-apache

# Apache için mod rewrite aktif ediliyor
RUN a2enmod rewrite

# Composer yükleniyor
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Gerekli PHP extension'ları
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html
