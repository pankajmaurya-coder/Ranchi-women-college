<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});

//about
Route::view('/about', 'web/about/about/index')->name('about');
Route::view('/background', 'web/about/history')->name('history');
Route::view('/vision', 'web/about/vision-mission')->name('vision');
Route::view('/principle', 'web/about/principale')->name('principle');
Route::view('/rule-regulation', 'web/about/rule-regulation')->name('rule');
Route::view('/holiday', 'web/about/holiday')->name('holiday');
Route::view('/kulgeet', 'web/about/kulgeet')->name('kulgeet');
Route::view('/iqac', 'web/about/iqac-aqar.index')->name('iqac');