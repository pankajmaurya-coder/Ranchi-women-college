<?php
require __DIR__.'/auth.php';


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
Route::view('/infrastructure', 'web/about/infrastructure/index')->name('infrastructure');
Route::view('/newslatter', 'web/about/newslatter')->name('newslatter');
Route::view('/committee', 'web/about/committee')->name('committee');


// admission
    Route::prefix('admission')->name('admission.')->group(function () {
         Route::view('/ug', 'web.admission.ug')->name('ug');
         Route::view('/pg', 'web.admission.pg')->name('pg');
         Route::view('/vocational', 'web.admission.vocational')->name('vocational');
         Route::view('/B.Ed', 'web.admission.B_Ed')->name('B.Ed');
    });

 //Academic
 Route::prefix('academic')->name('academic.')->group(function () {
    Route::view('/syllabus', 'web.academics.syllabus')->name('syllabus');
    Route::view('/programme', 'web.academics.programme')->name('programme');
     Route::view('/calender', 'web.academics.calender')->name('calender');
     Route::view('/fee', 'web.academics.fee')->name('fee');
      Route::view('/alumini', 'web.academics.alumini')->name('alumini');
 });

  Route::prefix('department')->name('department.')->group(function () {
     Route::view('/arts', 'web.department.arts')->name('arts');
  });
// alumini garima
Route::view('alumini', 'web/alumini/index')->name('alumini');

