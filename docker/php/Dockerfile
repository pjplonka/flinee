FROM php:7.4-apache

ENV TZ="UTC"
RUN touch /etc/apache2/sites-enabled/apache.conf
RUN apt-get update && apt-get install libicu-dev  libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev libpng-dev locales -y
RUN docker-php-ext-install intl
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN a2enmod rewrite
RUN printf '[PHP]\ndate.timezone = "UTC"\n' > /usr/local/etc/php/conf.d/tzone.ini
