#!/usr/bin/env bash

cp .env.example .env

composer install --no-dev --optimize-autoloader

php artisan config:clear
php artisan key:generate
php artisan migrate --force
php artisan config:cache
php artisan route:cache

php artisan serve --host=0.0.0.0 --port=$PORT
