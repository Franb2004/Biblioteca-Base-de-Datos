<?php
include "conectar.php";

$buscar= $_POST["Buscar"];

$SQL_READ = "SELECT *FROM Libros WHERE Nom_Autor LIKE '%".$buscar."%'";

$sql_query = mysqli_query($conex,$SQL_READ);



?>