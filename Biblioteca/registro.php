<?php

    include("Conectar.php");


    $Nom_Autor=$_POST['Autor'];
    $Nom_Libro=$_POST['Titulo'];
    $Editorial=$_POST['Editorial'];
    $Genero=$_POST['Genero'];

    $insertar = "Insert into libros(Nom_Autor,Nom_Libro,Editorial,Genero) VALUES ('$Nom_Autor','$Nom_Libro','$Editorial','$Genero')";

    if(mysqli_query($conex , $insertar)){
        echo "todo correcto";
    }else{
        echo "error al guardar";
    }
?>