<?php

use App\Http\Controllers\CompetidorController;
use App\Http\Controllers\RegistroUsuarioControlador;
use App\Http\Controllers\LoginControlador;
use App\Models\Rol;
use Illuminate\Support\Facades\Route;

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
Route::view('/timer', 'timer')->name('timer');
Route::view('/asignarRoles', 'asignarRoles')->name('asignarRoles');
Route::view('/resultados','resultados')->name('resultados');

//obtención de datos de la bd
Route::view('/obtenerDatos', 'acciones.obtenerCompetidores');


// Competidores
Route::get('/competidores', [CompetidorController::class, 'index'])->name('competidores.index'); // Mostramos la vista de la tabla de todos los competidores.
Route::get('/competidores/crear', [CompetidorController::class, 'create'])->name('competidores.create'); // Mostramos la vista del formulario para cargar competidor.
Route::post('/competidores', [CompetidorController::class, 'store'])->name('competidores.store'); // Guardamos el competidor en la bd.
Route::get('/competidores/{competidor}', [CompetidorController::class, 'show'])->name('competidores.show'); // Mostramos la vista de los datos de un competidor especifico.
Route::get('/competidores/{competidor}/editar', [CompetidorController::class, 'edit'])->name('competidores.edit'); // Mostramos la vista del formulario para editar competidor.
 // Utilizamos method PATCH al actualizar elementos de la bd y DELETE para elimiar.
Route::patch('/competidores/{competidor}', [CompetidorController::class, 'update'])->name('competidores.update'); // Actualizamos el competidor en la bd.
Route::delete('/competidores/{competidor}', [CompetidorController::class, 'destroy'])->name('competidor.destroy'); // Eliminamos competidor de la bd.

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


/**
 * Rutas por rol en específico
 * rol:1 = admin
 * rol:2 = juez
 * rol:3 = competidor
 */
Route::middleware('rol:1')->group(function () {
  // Rutas que requieren el rol admin
  Route::get('/compInscriptos', 'AdminControlador@compInscriptos' )->name( 'compInscriptos' );
  Route::get('/reloj', 'AdminControlador@reloj')->name( 'reloj' );
});


Route::get('/materia',function(){
  return [
    'materiaYTema'=>[
      'PWD',
      'Laravel',
      'practicamos con las rutas de Laravel'
    ]
    ];
})->name('materia');

Route::get('/materia_',function(){
  return view('/materia',[
    'materiaYTema'=>[
      'PWD',
      'Laravel',
      'practicamos con las rutas de Laravel'
    ]
    ]);
})->name('materia');