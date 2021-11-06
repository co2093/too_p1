<?php

use Illuminate\Support\Facades\Route;
use App\Models\Edificio;

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

Route::resource('escuela', App\Http\Controllers\EscuelaController::class);

Route::get('/menureserva', [App\Http\Controllers\ReservasController::class, 'index'])->name('menureserva');

Route::post('/horarios/local/', [App\Http\Controllers\ReservasController::class, 'horarios'])->name('horarios/local');

Route::get('/reportes', [App\Http\Controllers\ReportesController::class, 'index'])->name('reportes');

Route::post('reportes-pdf', [App\Http\Controllers\ReportesController::class, 'descargarPDF'])->name('reportes.pdf');

Route::get('/solicitudes', [App\Http\Controllers\ReservasController::class, 'solicitudesIndex'])->name('solicitudes');
