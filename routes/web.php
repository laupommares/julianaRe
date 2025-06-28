<?php

use Illuminate\Support\Facades\Route;

/* Route::view('/', 'pages.home'); */


Route::get('/', function () {
    return '¡Render + Laravel funcionan!';
});