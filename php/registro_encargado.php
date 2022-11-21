<?php

include('conexion.php');

$connect = conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$telefono=$_POST['telefono'];
$numero_documento=$_POST['numero_documento'];
$contraseña=$_POST['contraseña'];
$tipo_documento=$_POST['tipo_documento'];
    
    $consulta = "INSERT INTO encargado(Nombre_encargado, Apellidos, email_e, fecha_nacimiento_e, telefono_e, numero_documento_e, contraseña_e, tipo_documento_e)
    VALUES ('$nombre', '$apellido', '$email', '$fecha_nacimiento',
    '$telefono', '$numero_documento', '$contraseña', '$tipo_documento')";
    $resultado = mysqli_query($connect, $consulta);

    
    if(!mysqli_error($connect)){
        header("Location: ../dashboard/dashboardencargado.php");
    }else{
        echo '<script>alert("Error en el registro")</script>';
        header("Location: ../login-encargado.php");
    }
?>