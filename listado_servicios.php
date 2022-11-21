<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Mis Servicios</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/7e5b2d153f.js"crossorigin="anonymous"></script>
    <script defer src="./index.js"></script>
</head>
<header class="header">
    <nav class="nav-bar">
        <!-- <h1 class="ligi"><a href="index.php">HOTELIA</a></h1> -->
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
    <body class="background">
    <div class="capa"></div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <center><img src="./img/usuario.png" width="100px" height="100px"><br><br>
                <h3>Armando Mesas</h3>
                <p>Usuario</p></center>
                <a href="./menu"><img src="./img/menuicono.png" height="30px" width="30px"> Menú Principal</a>
                <a href="./login.php"><img src="./img/identidad.png" height="30px" width="30px"> Mi perfil</a>
                <a href="./menu"><img src="./img/reservas.png" height="30px" width="30px"> Mis reservas</a>
                <a href="./mi_hotel.php"><img src="./img/mihotel.png" height="30px" width="30px">Mi hotel</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
        <div class="titulo">
            <h2>Mis Servicios</h2>
        </div>
<div class="con2">
        <div id="con2">
        <a href="./registro_servicio.php" target="_blank" class="but">REGISTRAR SERVICIO ✚</a>
        </div><br>
    <table class="s" border="1">
    <tr>
        <th>ID</th>
        <th>Servicio</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>
    <tr>
        <td><center>3312</center></td>
        <td><center>Tour por la playa</center></td>
        <td>Salida desde Santa Marta a las 7:30 a.m. aproximadamente, haciendo un recorrido inicial de 45 minutos en el cual ingresamos al Parque Tayrona y hacemos una parada corta por Siete Olas, una imponente playa que nos ofrece una hermosa vista, no es apta para bañarse así que sólo nos detendremos a tomar fotos.</td>
        <td><center><a href="./actualizar_servicio.php" target="_blank" class="but">EDITAR</a></center></td>
    </tr>
    </table>
</div>
</body>
</html>
