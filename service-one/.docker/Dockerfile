FROM php:7.4-apache

RUN apt-get update \
    && apt-get install git -y

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY .docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite headers
RUN a2enmod http2
RUN service apache2 restart

WORKDIR /var/www/html

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
