FROM php:7.3-apache

WORKDIR /var/www/html
RUN apt-get update
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli 
