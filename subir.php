<?php
require 'funciones.php';

if (!$conexion) {
    die('La pagina esta sufriendo problemas');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = getimagesize($_FILES['foto']['tmp_name']);
    // print_r($check);
    if ($check !== false) {
        $carpetaDestino = 'fotos/';
        $archivoSubido = $carpetaDestino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivoSubido);

        $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');
        $statement->execute(
            array(
                ':titulo' => $_POST['titulo'],
                ':imagen' => $_FILES['foto']['name'],
                ':texto' => $_POST['texto']
            )
        );
        // header('location: index.php');
    }else {
        $error .= 'El archivo no es una imagen o es pesado';
    }
}

require 'views/subir.view.php';

?>