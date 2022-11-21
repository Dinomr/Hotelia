<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center>
        <table width="1000" height="360">
            <tr>
                <th>Imagen</th>
                <th>Id</th>
            </tr>
            <?php
                include ("conexion.php");
                $conexion=conectar();

                $query = "SELECT * FROM imagen";
                $resultado = mysqli_query($conexion, $query) or trigger_error('Query failed! SQL-Error:'.mysqli_error($conexion));
                while($row = mysqli_fetch_array($resultado)){            
            ?>
            <tr>
                <th><img src=" <?php echo substr($row['ruta'],0)?>" alt=""></th>
                <th><?php echo $row['idimagen']?></th>
            </tr>
            <?php
                };
            ?>
        </table>
    </center>
</body>
</html>