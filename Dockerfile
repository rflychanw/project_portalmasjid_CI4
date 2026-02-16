FROM php:8.2-apache-bookworm

# 1. Install dependencies & PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    unzip \
    git \
    zip \
    && docker-php-ext-install intl mysqli \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# 2. SOLUSI MPM: Hapus semua symlink MPM yang aktif dan buat ulang hanya satu
# Ini memastikan folder mods-enabled bersih dari MPM lain sebelum Apache start
RUN find /etc/apache2/mods-enabled -name "mpm_*.load" -delete \
    && find /etc/apache2/mods-enabled -name "mpm_*.conf" -delete \
    && ln -s /etc/apache2/mods-available/mpm_prefork.load /etc/apache2/mods-enabled/mpm_prefork.load \
    && ln -s /etc/apache2/mods-available/mpm_prefork.conf /etc/apache2/mods-enabled/mpm_prefork.conf

# 3. Aktifkan mod_rewrite
RUN a2enmod rewrite

# 4. Konfigurasi Document Root ke folder /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 5. Set Working Directory
WORKDIR /var/www/html

# 6. Copy source code
COPY . .

# 7. Install Composer & Dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 8. Set Permission Khusus CI4
# Kita pastikan www-data memiliki hak akses penuh ke folder writable
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html/writable -type d -exec chmod 777 {} \; \
    && find /var/www/html/writable -type f -exec chmod 666 {} \;

# 9. Port & Start
EXPOSE 80

# Menggunakan shell form untuk memastikan env var terbaca dengan benar
CMD ["apache2-foreground"]