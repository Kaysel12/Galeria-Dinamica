<?php
require 'funciones.php';
$fotos_por_pagina = 8;

$paginaActual = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
$inicio = ($paginaActual > 1) ? ($paginaActual * $fotos_por_pagina - $fotos_por_pagina) : 0;

if (!$conexion) {
    die();
}

$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll();
// print_r($fotos);

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];
// print_r($total_post);

$total_paginas = ceil($total_post / $fotos_por_pagina);
// print_r($total_paginas);
// print_r($paginaActual);


require 'views/index.view.php';

?>