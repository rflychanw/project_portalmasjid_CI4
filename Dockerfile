FROM php:8.2-fpm-bookworm

# 1. Install Nginx & Dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    libicu-dev \
    unzip \
    git \
    zip \
    && docker-php-ext-install intl mysqli \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# 2. Setup Nginx Config
# Hapus default config bawaan dan ganti dengan milik kita
RUN rm /etc/nginx/sites-enabled/default
COPY nginx.conf /etc/nginx/conf.d/default.conf

# 3. Setup Project
WORKDIR /var/www/html
COPY . .
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 4. Permissions (Crucial for CI4)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/writable

# 5. Ekspos Port agar Railway Mendeteksi
EXPOSE 80

# 6. Jalankan PHP-FPM dan Nginx secara bersamaan
# Kita jalankan fpm di background, lalu nginx di foreground
CMD php-fpm -D && nginx -g "daemon off;"