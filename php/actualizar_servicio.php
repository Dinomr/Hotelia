<?php

include('conexion.php');

$connect = conectar();

$nombre=$_POST['nombre_servicio'];
$precio=$_POST['costo'];
$cantidad_camas['cantidad_camas'];
$descripcion['descripcion'];
$nombreimg = $_FILES['imagen']['name'];
$imagen = $_FILES['imagen']['tmp_name'];
$ruta = 'img';

$ruta = $ruta."/".$nombre;
move_uploaded_file($imagen,$ruta);

    
$query="INSERT INTO `habitación`(`Cantidad_camas_habitacion`, `Estado_habitacion`, `Descripcion_habitacion`, `Costo_habitacion`, `ruta_imagen`, `fecha_disponible`)
        VALUES ('[#cantidad_camas]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";
    $resultado = mysqli_query($connect, $consulta) or trigger_error('Query failed! SQL-Error:'.mysqli_error($connect));

echo "$consulta";

?>