<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});


Route::view('/head', 'web.header');