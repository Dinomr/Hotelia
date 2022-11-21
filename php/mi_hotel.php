<?php

include('conexion.php');
session_start();
$varversion=$_SESSION['usuario'];

$connect=conectar();
$nombre_hotel=$_POST['nombre_hotel'];
$direccion=$_POST['direccion'];
$descripcion=$_POST['descripcion'];


$query="INSERT INTO hotel (Nombre_hotel, Direccion, Descripcion_hotel, fk_encargado) VALUES ('$nombre_hotel', '$direccion', '$descripcion', '$varversion')";
$resultado=mysqli_query($connect, $query) or mysqli_error($connect);

if(!mysqli_error($connect)){
    header("Location: ../registro_habitacion.php");
}else{
    echo '<script>alert("Error en el registro")</script>';
}
?>