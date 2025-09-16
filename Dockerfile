# Gunakan image dasar PHP dengan Apache
FROM php:7.4-apache

# Instal ekstensi PHP yang dibutuhkan oleh CodeIgniter dan aplikasi Anda
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Aktifkan mod_rewrite untuk URL yang bersih
RUN a2enmod rewrite

# Salin semua file proyek ke dalam direktori web server di container
COPY . /var/www/html/

RUN mkdir -p /var/www/html/application/cache
RUN mkdir -p /var/www/html/application/logs

# Atur hak akses agar Apache dapat menulis ke direktori yang diperlukan
RUN chown -R www-data:www-data /var/www/html/application/cache
RUN chown -R www-data:www-data /var/www/html/application/logs