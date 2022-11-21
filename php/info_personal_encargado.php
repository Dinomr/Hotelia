<?php

include('conexion.php');

$connect = conectar();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['correo'];
$nacimiento=$_POST['birth'];
$telefono=$_POST['telefono'];
$numerodoc=$_POST['numdoc'];
$password=$_POST['contrase'];
    
    $consulta = "INSERT INTO encargado(Nombre_encargado, Apellidos, email_e, fecha_nacimiento_e, telefono_e, numero_documento_e, contraseña_e)
    VALUES ('$nombre', '$apellidos', '$nacimiento', '$telefono', '$numerodoc', '$password')";
    $resultado = mysqli_query($connect, $consulta) or trigger_error('Query failed! SQL-Error:'.mysql_error($connect));

echo "$consulta";

?>