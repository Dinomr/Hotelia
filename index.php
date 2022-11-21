<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website | Welcome</title>
    <script src="https://kit.fontawesome.com/d2a386da24.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" media="screen and (max-width:768px)" href="css/mobile.css">
</head>
<body>
    <header>
        <nav id="nav-bar">
            <div class="container">
                <h1 class="logo"><a href="index.php">HOTELIA</a></h1>
                <ul>
                    <li><a href="login-usuario.php">Inicio sesion</a></li>
                    <li><a href="registro_perfil.php">Registrarse</a></li>
                    
                      </div>
                </ul>
            </div>
        </nav>
    </header>

    <div id="showcase">
        <div class="container">
            <div class="showcase-content">
                <h1> <span class="primary-text">Encuentra</span> tu hotel</h1>
                <form action="./hoteles_disponibles.php" class="box_1">
                   <input id="cuadro" type="text" required placeholder="A donde vas a ir">
                   <input id="cuadro" type="date" required>
                   <input id="cuadro" type="text" required placeholder="Numero Personas">
                   <input class="btn" type="submit" value="Buscar hotel" />              
                </form>   
            </div>
        </div>
    </div>

    <section id="home-info" class="bg-dark">
        <div class="info-image"></div>
        <div class="info-content">
            <h2><span class="primary-text">¿HOTELIA?</span> Que es hotelia?</h2>
            <p>Es una aplicación informática que permita <br> la búsqueda y reserva de alojamientos <br> sin reconocimiento.
            </p>
            <a href="" class="btn btn-light">Mas informacion</a>
        </div>
    </section>

    <section id="features">
        <div class="box bg-light">
            <i class="fas fa-hotel fa-3x"></i>
            <h3>Buena ubicación</h3>
            <p>Tiene una de las mejores unicaciones para porder descansar</p>
        </div>
        <div class="box bg-primary">
            <i class="fas fa-utensils fa-3x"></i>
            <h3>Precios justos</h3>
            <p>El precio es el mas trasparente posible para que el cliente este muy comodo y pueda disfrutar de verdad</p>
        </div>
        <div class="box bg-light">
            <i class="fas fa-dumbbell fa-3x"></i>
            <h3>Excelente servicio</h3>
            <p>El servicio es de muy alto nivel por la calidad de sus empleados</p>
        </div>
    </section>
    <div class="clr"></div>
    
    <footer id="main-footer">
        <p>Hotelia &copy; 2022, !LO MEJOR</p>
    </footer>
</body>

</html>