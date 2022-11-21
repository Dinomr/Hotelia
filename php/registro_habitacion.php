<?php

include('conexion.php');

$connect = conectar();

$descripcion=$_POST['descripcion'];
$camas=$_POST['camas'];
$precio=$_POST['precio'];
$nombre = $_FILES['imagen']['name'];
$imagen = $_FILES['imagen']['tmp_name'];
$estado=$_POST['estado'];
$nombre_hotel=$_POST['nombre_hotel'];
$ruta = 'img';

$ruta = $ruta."/".$nombre;

move_uploaded_file($imagen,$ruta);

    $consulta = "INSERT INTO habitación (Cantidad_camas_habitacion, Estado_habitacion, Descripcion_habitacion, Costo_habitacion, ruta_imagen, fk_hotel)
    VALUES ('$camas', '$estado', '$descripcion', '$precio', '$ruta', '$nombre_hotel')";
    $resultado = mysqli_query($connect, $consulta) or trigger_error('Query failed! SQL-Error:'.mysqli_error($connect));

if($resultado){
    header("Location:../dashboard/dashboardencargado.php");
}
?>