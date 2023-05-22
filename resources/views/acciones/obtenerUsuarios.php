<?php


  // include('./app/Http/Controllers/CompetidorController.php');

use App\Http\Controllers\UsuarioController;

  $usuario = new UsuarioController();

  $usuarios = $usuario->imprimirDatos();
  echo $usuarios;
  ?>