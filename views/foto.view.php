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
			<h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])){ echo $foto['titulo']; } else { echo $foto['imagen']; } ?></h1>
		</div>
	</header>

	<div class="contenedor">
		<div class="foto">
			<img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
			<p class="texto"><?php echo $foto['texto']; ?></p>
			<a class="regresar" href="index.php"><i class="fa fa-long-arrow-left"></i>Regresar</a>
		</div>
	</div>

    <footer>
        <p class="copyright">
            Galeria creada por Kaysel Núñez
        </p>
    </footer>

</body>
</html>