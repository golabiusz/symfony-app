FROM php:5.6-fpm

RUN apt-get update && \\
    apt-get install -y git

ADD symfony.ini /usr/local/etc/php/conf.d/

ADD symfony.pool.conf /etc/php5/fpm/pool.d/

