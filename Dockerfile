FROM php:8-apache

LABEL creator="marvinobig"

WORKDIR /var/www/html

COPY . .

EXPOSE 5000