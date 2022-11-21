<?php

include('conexion.php');

$connect = conectar();

$nombre=$_POST['servicio'];
$precio=$_POST['precio'];
    
    $consulta = "INSERT INTO servicio(Nombre_servicio, Precio)
    VALUES ('$nombre', '$precio')";
    $resultado = mysqli_query($connect, $consulta) or trigger_error('Query failed! SQL-Error:'.mysql_error($connect));

echo "$consulta";

?>