<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return "About page";
});

Route::get('/Contant', function () {
    return view("Contant");
});