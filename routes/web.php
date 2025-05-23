<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/servicio-uno', function () {
    return view('servicio_uno');
});

Route::get('/contacto', function () {
    return view('contacto');
});