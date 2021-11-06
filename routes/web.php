<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('materias', App\Http\Controllers\MateriaController::class);

Route::resource('docentes', App\Http\Controllers\DocenteController::class);

Route::get('/menureserva', [App\Http\Controllers\ReservasController::class, 'index'])->name('menureserva');

Route::post('/horarios/local/', [App\Http\Controllers\ReservasController::class, 'horarios'])->name('horarios/local');