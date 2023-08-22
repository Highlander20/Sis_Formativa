<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('facultades', \App\Http\Controllers\FacultadeController::class);

Route::resource('escuelas', \App\Http\Controllers\EscuelaController::class);

Route::resource('cursos', \App\Http\Controllers\CursoController::class);

Route::resource('docentes', \App\Http\Controllers\DocenteController::class);

Route::resource('proyectos', \App\Http\Controllers\ProyectoController::class);

Route::resource('autores', \App\Http\Controllers\AutoreController::class);
