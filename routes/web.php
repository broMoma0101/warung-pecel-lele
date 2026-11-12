<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pembeli.home');
})->name('home');

Route::get('/menu', function () {
    return view('pembeli.menu');
})->name('menu');
