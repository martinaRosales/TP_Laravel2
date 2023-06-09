<?php

use App\Http\Controllers\CompetidorController;
use App\Http\Controllers\RegistroUsuarioControlador;
use App\Http\Controllers\LoginControlador;
use App\Models\Rol;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\JuezControlador;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::view('/', 'home')->name('home'); 
Route::view('/video','video')->name('video');
Route::view('/bancoImagenes', 'imgBank')->name('imagenes');
Route::view('/asignarRoles', 'asignarRoles')->name('asignarRoles');
Route::view('/resultados','resultados')->name('resultados');

//obtención de datos de la bd
Route::view('/obtenerCompetidores', 'acciones.obtenerCompetidores');
// Route::view('/obtenerUsuarios'. 'acciones.obtenerUsuarios');


// Competidores
Route::get('/competidores', [CompetidorController::class, 'index'])->name('competidores.index'); // Mostramos la vista de la tabla de todos los competidores.
Route::get('/competidores/crear', [CompetidorController::class, 'create'])->name('competidores.create'); // Mostramos la vista del formulario para cargar competidor.
Route::post('/competidores', [CompetidorController::class, 'store'])->name('competidores.store'); // Guardamos el competidor en la bd.
Route::get('/competidores/{competidor}', [CompetidorController::class, 'show'])->name('competidores.show'); // Mostramos la vista de los datos de un competidor especifico.
Route::get('/competidores/{competidor}/editar', [CompetidorController::class, 'edit'])->name('competidores.edit'); // Mostramos la vista del formulario para editar competidor.
 // Utilizamos method PATCH al actualizar elementos de la bd y DELETE para elimiar.
Route::patch('/competidores/{competidor}', [CompetidorController::class, 'update'])->name('competidores.update'); // Actualizamos el competidor en la bd.
Route::delete('/competidores/{competidor}', [CompetidorController::class, 'destroy'])->name('competidores.destroy'); // Eliminamos competidor de la bd.

// Juez
Route::get('/reloj', [JuezControlador::class, 'create'])->name('reloj'); // Mostramos la vista del reloj que solo podrá ver el juez

// Categorias
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index'); // Mostramos la vista de la tabla de todas los categorias.
Route::get('/categorias/crear', [CategoriaController::class, 'create'])->name('categorias.create'); // Mostramos la vista del formulario para cargar una categoria.
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store'); // Guardamos la categoria en la bd.
Route::get('/categorias/{categoria}', [CategoriaController::class, 'show'])->name('categorias.show'); // Mostramos la vista de los datos de una categoria especifica.
Route::get('/categorias/{categoria}/editar', [CategoriaController::class, 'edit'])->name('categorias.edit'); // Mostramos la vista del formulario para editar una categoria.
Route::patch('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update'); // Actualizamos la categoria en la bd.
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy'); // Eliminamos una categoria de la bd.

/* Route::view('/resultados_', 'categorias.index'); */
// Obtenemos paises para AJAX
Route::post('/competidores/crear',[CompetidorController::class, 'buscarPaises'])->name('competidores.buscarPaises');
// Obtenemos categorias para AJAX
Route::get('/resultados_', [CategoriaController::class, 'imprimirDatos'])->name('datosCategorias'); // Mostramos la vista de la tabla de todas los categorias.

// Support folder
Route::get( '/about', function() {
  return view( 'support.about' );
})->name( 'about' );

Route::get( '/help', function() {
  return view( 'support.help' );
})->name( 'help' );


// Auth folder
Route::get( '/login', [LoginControlador::class, 'show'] )->name( 'login' );
Route::post( '/login', [LoginControlador::class, 'login'] );
Route::get( '/registro', [RegistroUsuarioControlador::class, 'show'] )->name( 'registro' );
Route::post( '/registro', [RegistroUsuarioControlador::class, 'registro'] );
Route::get( '/logout', [LoginControlador::class, 'logout'])->name( 'logout' );








// Como evitar que un rol entre a una ruta que NO tiene permiso:
// Se puede hacer desde aca o desde el controlador
// Ejem desde aca: Le agregamos el metodo middleware y por parametro ponemos can:nombrePermiso.
// Route::get('/categorias', [CategoriaController::class, 'index'])->middleware('can:categorias.index')->name('categorias.index');