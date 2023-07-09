<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ClientesController;

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
    return view('modulos.Ingresar');
});

Auth::routes();

Route::get('Inicio', [InicioController::class,'index']);

Route::get('Mis-Datos', [UsuariosController::class, 'MisDatos']);
Route::put('Mis-Datos', [UsuariosController::class, 'DatosUpdate']);

Route::get('Usuarios', [UsuariosController::class, 'index']);
Route::post('Usuarios', [UsuariosController::class, 'store']);
Route::get('Eliminar-Usuario/{id}', [UsuariosController::class, 'destroy']);
Route::get('Editar-Usuario/{id}', [UsuariosController::class, 'edit']);
Route::put('actualizar-Usuario/{id}', [UsuariosController::class, 'update']);

Route::get('Proveedores', [ClientesController::class, 'index']);
Route::post('Proveedores', [ClientesController::class, 'store']);
Route::get('Editar-Proveedor/{id}', [ClientesController::class, 'edit']);
Route::put('actualizarP/{id}', [ClientesController::class, 'update']);
Route::get('Eliminar-Proveedor/{id}', [ClientesController::class, 'destroy']);