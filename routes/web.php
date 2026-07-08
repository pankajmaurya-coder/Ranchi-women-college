<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});

//about
Route::view('/about', 'web/about/about/index')->name('about');
Route::view('/background', 'web/about/history')->name('history');
Route::view('/vision', 'web/about/vision-mission')->name('vision');