<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\AdministradoresController;
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


Route::get('/',[HomeController::class,'login'])->name('home.login');
Route::get('/login',[HomeController::class,'index'])->name('home.index');

//Administradores
Route::get('/administrador/perfiles/listar',[AdministradoresController::class,'adminbase'])->name('admin.adminbase');//listar perfiles
Route::get('/administrador',[AdministradoresController::class,'index'])->name('admin.index');
Route::get('/administrador/cuentas/listar',[AdministradoresController::class,'admincuenta'])->name('admin.admincuenag');//listar cuentas
Route::get('/administrador/cuentas/agregar',[AdministradoresController::class,'admincagregar'])->name('admin.admincagregar');//agregar cuentas

Route::get('/administrador/cuentas/editar',[AdministradoresController::class,'admincuentaed'])->name('admin.admincuentaed');
Route::get('/administrador/cuentas/borrar',[AdministradoresController::class,'admincuentabr'])->name('admin.admincuentabr');



//Cuentas
Route::post('/cuentas/login',[CuentasController::class,'autentificar'])->name('cuentas.autentificar');
Route::get('/cuentas/logout',[CuentasController::class,'logout'])->name('cuentas.logout');


Route::get('/usuarios/{usuario}/estado',[UsuariosController::class,'cambiarEstado'])->name('usuarios.estado');
Route::get('/usuarios/cambiarcontrasena',[UsuariosController::class,'cambiarContrasena'])->name('usuarios.cambiarcontrasena');
Route::post('/usuarios/aplicarcambiarcontrasena',[UsuariosController::class,'aplicarCambiarContrasena'])->name('usuarios.aplicarcambiarcontrasena');
Route::resource('/cuentas',CuentasController::class);


//Publico


//Artistas



Route::resource('/perfiles',PerfilesController::class)->parameter('perfiles','perfil');