<?php

use App\Http\Controllers\LogueoController;
use App\Http\Controllers\loguiarController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('logueo',LogueoController::class);

//Route::resource('loguiar',loguiarController::class);

//Route::get('logueo','LogueoController')->name('loguear');

Route::post('loguiar', [LoguiarController::class, 'loguiar'])->name('loguiar');

//Route::post('/logueo', 'ValidarLogueo')->name('valLogueo');

//