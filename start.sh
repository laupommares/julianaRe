#!/usr/bin/env bash

# 1) Forzar uso del .env
[ -f .env ] || cp .env.example .env

# 2) Limpiar caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# 3) Instalar dependencias
composer install --no-dev --optimize-autoloader

# 4) Migraciones y key
php artisan key:generate
php artisan migrate --force

# 5) Cacheo final
php artisan config:cache
php artisan route:cache

# 6) Asegurarnos de que exista el log
mkdir -p storage/logs
touch storage/logs/laravel.log
chmod 666 storage/logs/laravel.log

# 7) Imprimimos el final del log para ver el error
echo "=== ÚLTIMOS ERRORES DE LARAVEL ==="
tail -n 30 storage/logs/laravel.log || true
echo "================================="
