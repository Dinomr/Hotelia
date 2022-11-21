<?php

    include('conexion.php');
    $connect = conectar();

    $nombre = $_FILES['imagen']['name'];
    $imagen = $_FILES['imagen']['tmp_name'];
    $ruta = 'img';

    $ruta = $ruta."/".$nombre;

    move_uploaded_file($imagen,$ruta);

    $query = mysqli_query($connect, "INSERT INTO imagen (ruta) VALUES ('$ruta')");
    
    if($query){
        echo "La inserción fue exitosa";
    }else{
        echo "La inserción no se llevo a cabo";
    }
?>