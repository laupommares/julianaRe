# 1) Stage de assets: usa Node para compilar Vite
FROM node:18 AS assets

WORKDIR /app

# Copiá sólo lo que necesitas para npm
COPY package.json package-lock.json vite.config.js ./
COPY resources resources

RUN npm ci
RUN npm run build

# 2) Stage final: PHP + Apache + Laravel
FROM php:8.2-apache

# 2.1) Extensiones y herramientas PHP
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpq-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql

# 2.2) Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# 2.3) Habilitar mod_rewrite
RUN a2enmod rewrite

# 2.4) Copiar la carpeta build de Vite desde el stage “assets”
COPY --from=assets /app/public/build /var/www/html/public/build

# 2.5) Copiar el resto del proyecto
COPY . /var/www/html

# 2.6) DocumentRoot a public/
RUN sed -i 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/000-default.conf

# 2.7) Permisos en storage y cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

WORKDIR /var/www/html

# 2.8) Copiar el .env y preparar Laravel
COPY start.sh /start.sh
RUN chmod +x /start.sh

# 2.9) Al arrancar, ejecuta tu script
ENTRYPOINT ["/start.sh"]
