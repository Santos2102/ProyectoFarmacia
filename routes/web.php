<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\MedicamentoController;
use App\Http\Controllers\Dashboard\MiscelaneoController;
use App\Http\Controllers\Dashboard\ClienteMediController;
use App\Http\Controllers\Dashboard\ClienteMisceController;
use App\Http\Controllers\Dashboard\UsuarioController;

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
    return view('welcome');
})->name('home');

Route::resource('medicamento', MedicamentoController::class);

Route::resource('miscelaneo', MiscelaneoController::class);

Route::resource('usuario', UsuarioController::class);
Route::resource('climedi', ClienteMediController::class);
Route::resource('climisce', ClienteMisceController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
