<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Mis Habitaciones</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/7e5b2d153f.js"crossorigin="anonymous"></script>
    <script defer src="./index.js"></script>
</head>
    <body class="background">
        <header class="header">
            <nav class="nav-bar">
                <!-- <h1 class="logo"><a href="index.php">HOTELIA</a></h1> -->
                <h1 class="logo"><p>HOTELIA</p></h1>
                    <div id="header">
                <ul class="nav">
                    <li><a href="">ENCARGADO</a>
                        <ul >
                            <li><a href="mi_hotel.php">Informacion del hotel</a></li>
                            <li><a href="info_personal_encargado.php">Informacion del encargado</a></li>
                            <li><a href="listado_habitacion.php">Listade habitacion</a></li>
                            <li><a href="listado_servicios.php">Listado de servicio</a></li>
                            <li><a href="rangodereporte.php">Rango de reporte</a></li>
                            <li><a href="">REGISTROS</a>
                                <ul class="trasparencia">
                                    <li><a href="registro_habitacion.php">Registro habitacion</a></li>
                                    <li><a href="registro_hotel.php">Registro hotel</a></li>
                                    <li><a href="registro_oferta.php">Registro hotel</a></li>
                                    <li><a href="registro_servicio.php">Registro servicio</a></li>
                                </ul>
                            </li>
                            <li><a href="">ACTUALIZACIONES</a>
                                <ul>
                                    <li><a href="actualizar_habitacion.php">Actualizar habitacion</a></li>
                                    <li><a href="actualizar_servicio.php">Aactualizar servicio</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">USUARIO</a>
                        <ul>
                            <li><a href="index.php">Menu principal</a></li>
                            <li><a href="listado_servicios.php">Listado de servcio</a></li>
                            <li><a href="listado_habitacion.php">Listado de habitaciones</a></li>
                        </ul>
                </ul>
            </div>
                </ul>
            </nav>
        </header>
        <div class="int">
            <div class="titulo">
                <h2>Mis Habitaciones</h2>
            </div>
    <div class="con2">
            <div id="con2">
            <a href="./registro_habitacion.php" target="_blank" class="but">REGISTRAR HABITACIÓN ✚</a>
            </div><br>
            <div class="tabla">
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Cantidad de camas</th>
            <th>Estado de Habitación</th>
            <th>Descripción</th>
            <th>Costo</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td><center>3312</center></td>
            <td><img src="https://www.eltiempo.com/files/image_640_428/files/crop/uploads/2022/05/06/62752986a0b9f.r_1651848957740.0-73-1500-823.jpeg" width="200px" height="130px"></td>
            <td><center>3 camas</center></td>
            <td><center>Activo</center></td>
            <td>Suele ser utilizada por amigos, o compañeros de trabajo que quieren disfrutar de las ventajas del hotel con un precio inferior por persona de lo que supondría una habitación para cada uno de ellos. .</td>
            <td><center>$200.000COP</center></td>
            <td><center><a href="./actualizar_habitacion.php" target="_blank" class="but">EDITAR</a></center></td>
        </tr>
        </table>
    </div>
    </div>
    </div>
</div>
</div>
</div>
    </body>

</html>