FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Copy application source
COPY . /var/www/
RUN chown -R www-data:www-data /var/www

EXPOSE 80

CMD ["apache2-foreground"]