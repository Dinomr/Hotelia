<?php

include('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$connect=conectar();
$consulta="SELECT numero_documento_e, contraseña_e FROM encargado WHERE numero_documento_e='$usuario' AND contraseña_e='$contraseña'";
$resultado=mysqli_query($connect, $consulta);

$row=mysqli_fetch_array($resultado);
if($row){
    header('location:../dashboard/dashboardusuario.php');
}else{
    ?>
    <script>alert("Hubo un error en la autentificación")</script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($connect);
?>