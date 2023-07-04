<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('empleado', EmpleadoController::class )->middleware('auth');

Route::group(['middleware' => 'auth'],function () {

    Route::get('/', [EmpleadoController::class, 'index'])->name('home');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Deshabilitar ruta de registro
Auth::routes(['register' => false]);

// Deshabilitar ruta de restablecimiento de contraseña
Auth::routes(['reset' => false]);
