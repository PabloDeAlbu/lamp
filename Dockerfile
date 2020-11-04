FROM php:7.3-apache

WORKDIR /var/www/angra
ENV APACHE_DOCUMENT_ROOT=/var/www/angra
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN apt-get update
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli 

# install wp-client
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN php wp-cli.phar --info
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN apt install iputils-ping less -y

# utils
RUN apt install -y \
    procps \
    nano \
    iputils-ping \
    locate \
    telnet \
    default-mysql-client
