<?php

try {
    $conexion = new PDO('mysql:host=localhost;dbname=galeria_practica', 'root', '');
    // echo 'conexion ok';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}



?>