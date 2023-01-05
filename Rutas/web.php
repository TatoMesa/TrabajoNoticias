<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LectorController;
use App\Http\Controllers\NoticiaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
<<<<<<< HEAD:routes/web.php
    return view('welcome');
=======
    return view('noticia/index');
>>>>>>> 6b8de6f06b5b8d65d547fb4158473ad5da0b5007:Rutas/web.php
});

Route::resource('noticia',NoticiaController::class);
Route::resource('lector',LectorController::class);
