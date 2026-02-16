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

# 2. HAPUS SEMUA config bawaan Nginx agar tidak konflik
RUN rm -rf /etc/nginx/sites-enabled/* && rm -rf /etc/nginx/conf.d/*

# 3. Copy config Nginx Anda ke folder conf.d
COPY nginx.conf /etc/nginx/conf.d/app.conf

# 4. Setup Project
WORKDIR /var/www/html
COPY . .
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 5. Permissions (Penting agar CI4 bisa menulis log/session)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/writable

# 6. Ekspos Port
EXPOSE 8080

# 7. Jalankan PHP-FPM dan Nginx
# Menggunakan 'nginx -g daemon off' sebagai proses utama agar container tetap hidup
CMD php-fpm -D && nginx -g "daemon off;"