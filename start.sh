#!/usr/bin/env bash

# 1) Limpiar caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# 2) Instalar dependencias
composer install --no-dev --optimize-autoloader

# 3) Migraciones y clave (omití key:generate porque ya la tenés)
php artisan migrate --force

# 4) Cacheo final
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 5) Asegurarnos de que exista el log
mkdir -p storage/logs
touch storage/logs/laravel.log
chmod 666 storage/logs/laravel.log

# 6) Imprimir errores
echo "=== ÚLTIMOS ERRORES DE LARAVEL ==="
tail -n 30 storage/logs/laravel.log || true
echo "================================="
