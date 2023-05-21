<?php

use App\Http\Controllers\RegistroControlador;
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
Route::view('/tablaPaginada','tablaPaginada')->name('tabla');
Route::view('/bancoImagenes', 'imgBank')->name('imagenes');
Route::view('/timer', 'timer')->name('timer');
Route::view('/asignarRoles', 'asignarRoles')->name('asignarRoles');
Route::view('/resultados','resultados')->name('resultados');

//Registrar competidor
Route::get('/cargarComp', [RegistroControlador::class, 'index'])->name('registrar');
Route::post('/cargarComp', [RegistroControlador::class, 'store']);

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