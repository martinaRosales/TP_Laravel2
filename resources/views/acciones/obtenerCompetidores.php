<?php

use App\Http\Controllers\CompetidorController;

  $competidor = new CompetidorController();

  $competidores = $competidor->imprimirDatos();
  echo $competidores;
  ?>