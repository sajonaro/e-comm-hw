FROM php:8.1-fpm-alpine


# install redis 
RUN apk add --no-cache $PHPIZE_DEPS
RUN pecl install redis 
RUN docker-php-ext-enable redis


#install pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql