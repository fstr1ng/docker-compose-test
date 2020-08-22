FROM php:7.4-apache
COPY htdocs/ /var/www/html
WORKDIR /var/www/html
