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

# 2. Copy config Nginx
COPY nginx.conf /etc/nginx/sites-available/default

# 3. Setup Project
WORKDIR /var/www/html
COPY . .
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 4. Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/writable

# 5. Port
EXPOSE 80

# 6. CMD yang lebih kuat untuk Railway
# Kita jalankan php-fpm di background, lalu Nginx di foreground agar log muncul
CMD php-fpm -D; nginx -g "daemon off;"