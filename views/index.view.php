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
            <p class="subir-foto"><a href="subir.php">Subir Fotografia</a></p>
        </nav>
        <div class="contenedor">
            <h1 class="titulo">Galeria con PHP y MYSQL</h1>
        </div>
    </header>
    
    <section class="fotos">
        <div class="contenedor">
            <?php foreach ($fotos as $foto) :?> 
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id'] ?>">
                    <img src="fotos/<?php echo $foto['imagen']?>" alt="">
                    </a>
                </div>
            <?php endforeach ?>
    
            <!-- Paginacion -->
            <div class="paginacion">
                <?php if ($paginaActual > 1) :?>
                    <a href="index.php?p=<?php echo $_GET['p'] - 1 ?>" class="izquierda"> <i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php endif ?>

                <?php if ($paginaActual >= 1) :?>
                    <a href="index.php?p=<?php echo $paginaActual + 1 ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i> </a>
                <?php endif ?>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">
            Galeria creada por Kaysel Núñez
        </p>
    </footer>

</body>
</html>