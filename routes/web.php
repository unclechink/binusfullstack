<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/yogya', function() {
    return view('yogya');
});

Route::get('/bali', function() {
    return view('bali');
});