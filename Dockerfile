# Imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones y herramientas
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Instalar Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Habilitar mod_rewrite para Laravel
RUN a2enmod rewrite

# Copiar archivos del proyecto
COPY . /var/www/html

# Establecer DocumentRoot a public/
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Establecer permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Instalar dependencias y preparar Laravel
RUN composer install --no-dev --optimize-autoloader && \
    php artisan config:clear && \
    php artisan key:generate && \
    php artisan migrate --force

# Puerto expuesto
EXPOSE 80
