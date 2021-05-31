<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/about-us', 'pages.about')->name('about');


Route::get('/test1', function () {
    return view('test1');
});
