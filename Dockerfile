FROM php:8.2-fpm
WORKDIR /var/www
COPY . .
RUN docker-php-ext-install pdo pdo_mysql
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]

