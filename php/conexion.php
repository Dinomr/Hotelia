<?php

function conectar(){

    $connect = mysqli_connect('localhost', 'root', '', 'hotel')or die(mysql_error($mysqli));
    if($connect){
        echo 'Conexion exitosa';
        return $connect;
    }else{
        echo 'Conexion fallida';
    }
}
?>