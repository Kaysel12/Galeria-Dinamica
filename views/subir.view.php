<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="nav">
            <p class="subir-foto"><a href="index.php">Volver </a></p>
        </nav>
        <div class="contenedor">
            <h1 class="titulo">Subir Fotografía</h1>
        </div>
    </header>
    
    <section class="fotos">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formulario" enctype="multipart/form-data" method="post">
            <label for="file">Selecciona tu foto</label>
            <input type="file" name="foto" id="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" name="titulo" id="titulo">

            <label for="texto">Descripcion:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descriptcion"></textarea>

            <?php if (isset($error)): ?>
                <p class="error"><?php echo $error ?></p>
            <?php endif ?>

            <input type="submit" class="submit" value="Subir Foto"></input>
        </form>
    </section>

    <footer>
        <p class="copyright">
            Galeria creada por Kaysel Núñez
        </p>
    </footer>

</body>
</html>