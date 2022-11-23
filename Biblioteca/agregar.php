
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="Menu">
            <img src="Logo.png" alt="">
            <nav>
                <ul>
                    <li><a href="Agregar.php">Agregar</a></li>
                    <li><a href="Prueba.php ?>">Consulta</a></li>
                </ul>
            </nav>
        </div>
    </header>
<form method="post">
     <div class="formulario">
        <h1>Agregar Libros</h1>
        <input class="controls" type="text" name="Autor" placeholder="Ingrese autor">
        <input class="controls" type="text" name="Titulo"  placeholder="Ingrese titulo de libro">
        <input class="controls" type="text" name="Editorial" placeholder="ingrese editorial">
        <input class="controls" type="text" name="Genero" placeholder="ingrese genero">

        <input class="Boton" type="submit" value="Agregar">
        </div>
</form>
<?php
include("registro.php")
?>
</body>
</html>