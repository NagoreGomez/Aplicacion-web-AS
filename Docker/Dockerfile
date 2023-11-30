FROM php:7.4-apache

RUN docker-php-ext-install mysqli

RUN apt-get update && \
    apt-get install -y python3 python3-pip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY ./web /var/www/html/





