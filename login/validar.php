<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=msqli_connect("localhost","root","","hotelia");

$consulta="SELECT*FROM encargado where Nombre_cliente='$usuario' and contraseña_c='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACIÓN</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>