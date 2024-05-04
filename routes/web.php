<?php

use App\Http\Controllers\AdmonController;
use App\Http\Controllers\LogueoController;
use App\Http\Controllers\loguiarController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('logueo',LogueoController::class);

//Route::resource('loguiar',loguiarController::class);

//Route::get('logueo','LogueoController')->name('loguear');

Route::post('loguiar', [LoguiarController::class, 'loguiar'])->name('loguiar');
Route::resource('direcc',LoguiarController::class);
Route::resource('usuario',UsuarioController::class);
Route::get('registroUsuario',[AdmonController::class,'registroUsuario'])->name('registroUsuario');
Route::get('admon',[AdmonController::class,'admon'])->name('admon');

//Route::post('/logueo', 'ValidarLogueo')->name('valLogueo');

//