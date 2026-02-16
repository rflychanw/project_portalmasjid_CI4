FROM php:8.2-apache

# Install dependency untuk intl
RUN apt-get update && apt-get install -y \
    libicu-dev \
    unzip \
    git \
    zip \
    && docker-php-ext-install intl mysqli

# Enable mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --optimize-autoloader --no-dev

# Set permission
RUN chown -R www-data:www-data /var/www/html
