<?php


use App\Http\Controllers\BookController;
use App\Http\Controllers\ExemplaryUserController;
use Illuminate\Support\Facades\Route;


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

Route::get('/libro/create',[BookController::class,'formulariouser']);
Route::post('/libro/productostore',[BookController::class,'userStore'])->name('libro.store');
Route::get('/listar/libro',[BookController::class,'listaruser'])->name('listar.libro');
Route::get('/libro/{libro}', [BookController::class, 'show'])->name('showlibro');
Route::delete('/libro/{libro}',[BookController::class,'destroyuser'])->name('destroylibro');
Route::get('/libro/{libro}/editar', [BookController::class, 'edit'])->name('libro.edit');
Route::put('/libro/{libro}', [BookController::class, 'update'])->name('libro.update');


Route::get('/usuarios', [ExemplaryUserController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios/asociar-rol', [ExemplaryUserController::class, 'asociar'])->name('usuarios.asociar-rol');
