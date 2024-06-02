<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\CodificacionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Facade;

Route::get('/', function () {return view('index');})->middleware(middleware:'auth');
Route::get('/logout', function () {return view('index');})->middleware(middleware:'auth');

Auth::routes(['register'=>false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/yoigo/', [App\Http\Controllers\HomeController::class, 'principal2'])->name('principal2');
Route::get('/masmovil/', [App\Http\Controllers\HomeController::class, 'principal3'])->name('principal3');
Route::get('/movistar/', [App\Http\Controllers\HomeController::class, 'movistar'])->name('movistar');
Route::get('/vodafone/', [App\Http\Controllers\HomeController::class, 'vodafone'])->name('vodafone');
Route::get('/orange/', [App\Http\Controllers\HomeController::class, 'orange'])->name('orange');
Route::get('/jazztel/', [App\Http\Controllers\HomeController::class, 'jazztel'])->name('jazztel');

Route::resource('codificaciones', CodificacionController::class)->middleware('can:admin');
Route::resource('tipos', TipoController::class)->middleware('can:admin');
Route::resource('descuentos', DescuentoController::class)->middleware('can:admin');
Route::resource('marcas', MarcaController::class)->middleware('can:admin');
Route::resource('productos', ProductoController::class)->middleware('can:admin');
Route::resource('registros', RegistroController::class)->middleware('can:admin');
Route::resource('users', UserController::class)->middleware('can:admin');
Route::resource('roles', RoleController::class)->middleware('can:admin');


Route::post('/masmovil', [App\Http\Controllers\HomeController::class,'masmovil']);
Route::post('/yoigo', [App\Http\Controllers\HomeController::class,'yoigo']);
Route::post('/movistar', [App\Http\Controllers\HomeController::class,'movistarpago']);
Route::post('/vodafone', [App\Http\Controllers\HomeController::class,'vodafonepago']);
Route::post('/orange', [App\Http\Controllers\HomeController::class,'orangepago']);
Route::post('/jazztel', [App\Http\Controllers\HomeController::class,'jazztelpago']);

/**
* Comprobar redsys
*/
Route::post('/redsys/notification',[App\Http\Controllers\RedsysController::class,'comprobar']);
Route::get('/redsys/notification',[App\Http\Controllers\RedsysController::class,'comprobar']);
Route::post('/redsys/ok',[App\Http\Controllers\RedsysController::class,'comprobar']);
Route::get('/redsys/ok',[App\Http\Controllers\RedsysController::class,'comprobar']);
Route::post('/redsys/ko',[App\Http\Controllers\RedsysController::class,'comprobar']);
Route::get('/redsys/ko',[App\Http\Controllers\RedsysController::class,'comprobar']);









