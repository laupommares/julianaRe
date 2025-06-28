#!/usr/bin/env bash

# Forzar uso del .env
cp .env.example .env

# Limpiar caches por si quedó algo viejo
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Instalar dependencias
composer install --no-dev --optimize-autoloader

# Claves y migraciones
php artisan key:generate
php artisan migrate --force

# Cachear configuración de nuevo
php artisan config:cache
php artisan route:cache

# Iniciar el servidor en el puerto que Render espera
php artisan serve --host=0.0.0.0 --port=$PORT
