FROM php:7.3.10-fpm

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && apt-get install -y git

# Install Xdebug
RUN pecl install -o xdebug-2.7.2 \
    && docker-php-ext-enable xdebug \
    && pecl clear-cache \
    && docker-php-source delete

# Custom PHP Conf
COPY config/php.ini-development /usr/local/etc/php/conf.d/php.ini
COPY config/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www/html/

# Run this container as "webuser"
RUN useradd webuser --uid 1000 --groups www-data --create-home \
    && chown -R webuser /var/www/html/

USER webuser
