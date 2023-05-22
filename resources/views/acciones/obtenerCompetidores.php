<?php

use App\Http\Controllers\CompetidorController;

  // include('./app/Http/Controllers/CompetidorController.php');
  $competidor = new CompetidorController();

  $competidores = $competidor->listar();
  echo $competidores;
  ?>