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

Route::get('/', function () {return view('index');})->middleware(middleware:'auth');;

Auth::routes(['register'=>false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/1/', [App\Http\Controllers\HomeController::class, 'principal'])->name('principal');
Route::get('/yoigo/', [App\Http\Controllers\HomeController::class, 'principal2'])->name('principal2');
Route::get('/masmovil/', [App\Http\Controllers\HomeController::class, 'principal3'])->name('principal3');
Route::get('/movistar/', [App\Http\Controllers\HomeController::class, 'principal4'])->name('principal4');
Route::get('/vodafone/', [App\Http\Controllers\HomeController::class, 'principal5'])->name('principal5');
Route::get('/orange/', [App\Http\Controllers\HomeController::class, 'principal6'])->name('principal6');
Route::get('/jazztel/', [App\Http\Controllers\HomeController::class, 'principal7'])->name('principal7');

Route::resource('codificaciones', CodificacionController::class);
Route::resource('tipos', TipoController::class);
Route::resource('descuentos', DescuentoController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('productos', ProductoController::class);
Route::resource('registros', RegistroController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);


Route::post('/masmovil', [App\Http\Controllers\HomeController::class,'masmovil']);
Route::post('/yoigo', [App\Http\Controllers\HomeController::class,'yoigo']);
Route::post('/movistar', [App\Http\Controllers\HomeController::class,'movistarpago']);
Route::post('/vodafone', [App\Http\Controllers\HomeController::class,'vodafonepago']);
Route::post('/orange', [App\Http\Controllers\HomeController::class,'orangepago']);
Route::post('/jazztel', [App\Http\Controllers\HomeController::class,'jazztelpago']);

/**
* Comprobar redsys
*/
Route::post('/redsys/notification',[App\Http\Controllers\redsysController::class,'comprobar']);
Route::get('/redsys/notification',[App\Http\Controllers\redsysController::class,'comprobar']);
Route::post('/redsys/ok',[App\Http\Controllers\redsysController::class,'comprobar']);
Route::get('/redsys/ok',[App\Http\Controllers\redsysController::class,'comprobar']);
Route::post('/redsys/ko',[App\Http\Controllers\redsysController::class,'comprobar']);
Route::get('/redsys/ko',[App\Http\Controllers\redsysController::class,'comprobar']);

Route::get('/5', [App\Http\Controllers\HomeController::class,'buscar'])->name('buscar');
//Route::get('/usuarios/create', function () {return view('usuarios/create');})->middleware(middleware:'auth');;

//Route::get('/usuarios', function () {return view('usuarios.index');})->middleware(middleware:'auth');;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
