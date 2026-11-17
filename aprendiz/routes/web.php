<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

route::view('/iniciar-sesion', 'iniciarsesion')->name('iniciar.sesion');
