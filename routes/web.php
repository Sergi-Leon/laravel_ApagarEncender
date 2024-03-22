<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;

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
Route::post('/eliminarC', [AdminController::class, 'eliminarC'])->name('eliminar.cliente');
Route::post('/editarC', [AdminController::class, 'editarC'])->name('editar.cliente');
Route::post('/nuevoC', [AdminController::class, 'nuevoC'])->name('nuevo.cliente');
Route::post('/buscarC', [AdminController::class, 'buscarC'])->name('buscar.cliente');
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
});