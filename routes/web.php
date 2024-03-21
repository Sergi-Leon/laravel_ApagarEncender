<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Models\Asignacion;
use App\Models\Chat;
use App\Models\Incidencia;
use App\Models\Rol;
use App\Models\Sede;
use App\Models\TipoIncidencia;
use App\Models\User;
use App\Models\UsuarioTipoIncidencia;


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
    return view('cliente');
});

Route::controller(User::class)->group(function(){
    Route::get('admin')->name('admin');
});