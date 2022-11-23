<?php
$conexion= mysqli_connect("localhost","root","","dbbiblioteca")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="prueba.css">
    
</head>

<body>

        <div class="Menu">
            <img src="Logo.png" alt="">
            <nav>
                <ul>
                    <li><a href="Agregar.php">Agregar</a></li>
                    <li><a href="Prueba.php ?>">Consula</a></li>
                </ul>
            </nav>
        </div>
<form action="prueba.php" method="POST">
    <section>
        <input type="text" name="buscar">
        <input type="submit" name="enviar" href="agregar" >
    </section>
</form>
<!---  Mostrar Datos -->
<div class="tablas">
                    <table class="formato">
                        <tr>
                            <th>Nom_Autor</th>
                            <th>Nom_Libro</th>
                            <th>Editorial</th>
                            <th>Genero</th>
                            <th></th>
                            <th></th>
                            
                        </tr>
                         <?php
                        $sql="SELECT* FROM Libros";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){

                        
                        ?>
                        <tr class="formato">
                            <td><?php echo $mostrar["Nom_Autor"]?></td>
                            <td><?php echo $mostrar["Nom_Libro"]?></td>
                            <td><?php echo $mostrar["Editorial"]?></td>
                            <td><?php echo $mostrar["Genero"]?></td>
                            <td><a href="">Eliminar</a></td>
                            <td><a href="">Editar</a></td>

                        </tr>
                        <?php 
                        }
                        ?>
                    </table>
                    </div>
                <!-- FUncion Buscar -->
                    <?php
                    include "Read.php";

                    while($row = mysqli_fetch_array($sql_query)){?>

<tr>
    <td><?=$row["Nom_Autor"] ?></td>
    <td><?=$row["Nom_Libro"] ?></td>
    <td><?=$row["Editorial"] ?></td>
    <td><?=$row["Genero"] ?></td>

</tr>

                    <?php
                    }
                    ?>


    
</body>
</html>