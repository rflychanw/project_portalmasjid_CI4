FROM php:8.2-apache-bookworm

# 1. Install dependencies & PHP extensions yang dibutuhkan CI4
RUN apt-get update && apt-get install -y \
    libicu-dev \
    unzip \
    git \
    zip \
    && docker-php-ext-install intl mysqli \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# 2. PERBAIKAN MPM: Hapus paksa file .load yang menyebabkan double loading
# Kita hapus file fisiknya agar tidak ada ambiguitas saat Apache start
RUN rm -f /etc/apache2/mods-enabled/mpm_event.load \
    && rm -f /etc/apache2/mods-enabled/mpm_worker.load \
    && a2enmod mpm_prefork

# 3. Aktifkan mod_rewrite untuk URL CI4 (index.php removal)
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

# 8. Set Permission (Sangat Penting untuk CI4)
# Folder writable HARUS bisa ditulis oleh www-data agar tidak error/crash
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable

# 9. Expose port 80 (Standard Railway)
EXPOSE 80

# 10. Jalankan Apache di foreground
CMD ["apache2-foreground"]