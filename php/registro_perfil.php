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
    
    $consulta = "INSERT INTO usuario(Nombre_cliente, Apellidos, email_c, fecha_nacimiento_c, telefono_c, numero_documento_c, contraseña_c, tipo_documento_c)
    VALUES ('$nombre', '$apellido', '$email', '$fecha_nacimiento',
    '$telefono', '$numero_documento', '$contraseña', '$tipo_documento')";
    $resultado = mysqli_query($connect, $consulta);

    
    if(!mysqli_error($connect)){
        header("Location: ../dashboard/dashboardusuario.php");
    }else{
        echo '<script>alert("Error en el registro")</script>';
        header("Location: ../login-encargado.php");
    }
?>