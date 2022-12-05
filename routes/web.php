<?php

use App\Http\Livewire\UsuarioIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\amiibocontroller;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PlantillaController;

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

Route::get('/login',[LoginController::class, 'obtenervista']);

Route::get('/amiibos',[amiibocontroller::class, 'obtener']);
Route::get('/usuarios',UsuarioIndex::class);

Route::get('/Usuarios2',[ApiController::class, 'obtenerusuarios']);
Route::get('/Productos2',[ApiController::class, 'obtenerproductos']);
