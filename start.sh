#!/usr/bin/env bash

# 1) Limpiar caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# 2) Ejecutar migraciones
php artisan migrate --force

# 3) Cacheo final
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 4) Asegurar que exista el archivo de log
mkdir -p storage/logs
touch storage/logs/laravel.log
chmod 666 storage/logs/laravel.log

# 5) Mostrar errores recientes
echo "=== ÚLTIMOS ERRORES DE LARAVEL ==="
tail -n 30 storage/logs/laravel.log || true
echo "================================="

# 6) Iniciar Apache
apache2-foreground
