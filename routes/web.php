<?php

use Illuminate\Support\Facades\Route;

//ROTTA HOME PAGE
Route::get('/', function () {
    return view('home');
});

//ROTTA PORTFOLIO
Route::get('/portfolio', function () {
    return view('portfolio');
});

//ROTTA GALLERY
Route::get('/gallery', function () {
    return view('gallery');
});
