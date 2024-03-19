<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [LoginController::class, 'showForm'])->name('login'); // Ruta para mostrar el formulario de inicio de sesión
Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); // Ruta para procesar el inicio de sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Ruta para cerrar sesión

Route::middleware(['auth'])->group(function () {
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});