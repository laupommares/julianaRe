# Etapa 1: dependencias PHP y Composer
FROM php:8.2-fpm as base

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libonig-dev libzip-dev zip nginx \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copiar archivos de Laravel
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Copiar configuración de Nginx
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Exponer puerto que Render usa
EXPOSE 10000

RUN chmod -R 775 storage bootstrap/cache


# Iniciar Nginx y PHP-FPM
CMD service nginx start && php-fpm
