# Imagen base con PHP y extensiones necesarias
FROM php:8.2-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip git libpq-dev libonig-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Definir el directorio de trabajo
WORKDIR /app

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Cache de configuración y vistas
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Generar APP_KEY si no está definido (Render usará variable de entorno)
# RUN php artisan key:generate --force

# Exponer el puerto que Render usa
EXPOSE 10000

# Comando de arranque
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
