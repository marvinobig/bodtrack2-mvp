FROM php:8.1-apache

LABEL creator="marvinobig"

WORKDIR /var/www/html

COPY . .

# COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY apache-config.conf /etc/apache2/sites-available/apache-config.conf

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    a2enmod rewrite && \
    a2dissite 000-default && \
    a2ensite apache-config && \
    service apache2 restart

RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd

# RUN composer install --no-dev

EXPOSE 80

CMD ["apache2-foreground"]