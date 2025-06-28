#!/usr/bin/env bash

# Copiá el .env si no existe
if [ ! -f .env ]; then
  cp .env.example .env
fi

# Instala dependencias PHP
composer install --no-dev --optimize-autoloader

# Ejecuta migraciones
php artisan key:generate
php artisan migrate --force

# Servidor Laravel
php artisan serve --host 0.0.0.0 --port 10000
