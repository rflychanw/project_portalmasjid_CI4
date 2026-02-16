FROM php:8.2-fpm-bookworm

# 1. Install Nginx dan dependencies PHP
RUN apt-get update && apt-get install -y \
    nginx \
    libicu-dev \
    unzip \
    git \
    zip \
    && docker-php-ext-install intl mysqli \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# 2. Copy konfigurasi Nginx yang kita buat tadi
COPY nginx.conf /etc/nginx/sites-available/default

# 3. Set Working Directory
WORKDIR /var/www/html

# 4. Copy source code
COPY . .

# 5. Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 6. Set Permission untuk CI4
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/writable

# 7. Expose port 80
EXPOSE 80

# 8. Jalankan PHP-FPM dan Nginx bersamaan
CMD php-fpm -D && nginx -g "daemon off;"