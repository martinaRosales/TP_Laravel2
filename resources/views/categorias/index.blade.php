
<?php

use App\Http\Controllers\CategoriaController;
$categorias = new CategoriaController;
echo json_encode($categorias->listar());

?>