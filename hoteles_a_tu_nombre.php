<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteles encargado</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" media="screen and (max-width:768px)" href="css/mobile.css">
    
</head>
</head>

<body>
    <header>
        <nav id="nav-bar">
            <div class="container">

                <h1 class="logo"><a href="./index2.php">HOTELIA</a></h1>
                <ul>
                    <li><a href="./index2.php">Home</a></li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- <section id="about-info" class="bg-light py-3">
        <div class="container">
            <div class="info-left">
                <h1 class="l-heading"> <span class="primary-text">About</span> Hotel Name</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At quam velit provident veniam numquam.
                    Aspernatur, ab asperiores. Vero repellat dolor rerum, quaerat itaque voluptate adipisci velit
                    nostrum dolorum. Deserunt blanditiis molestiae nemo reprehenderit expedita commodi aperiam ullam
                    aspernatur consectetur possimus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut excepturi quibusdam a? Ea, sapiente
                    ullam.</p>
            </div>
            <div class="info-right">
                <img src="img/photo-2.jpg" alt="">
            </div>
        </div>
    </section> -->
    <div class="clr"></div> 
    <div id="testimonials" class="py-3">
        <div class="container">
        <h1 align="center">HOTELES DISPONIBLES </h1>
         <table width="100%" border="2px" align="center" >
            <style>
                
            </style>            
            <thead align="center">
                <th>Hotel</th>
                <th>Dirrección</th>
                <th>Descripción hotel</th>
                <th>Encargado</th>
            </thead>
            <?php
                include('./php/conexion.php');
                session_start();
                $varname=$_SESSION['usuario'];
                $connect = conectar();
                $query = "SELECT Nombre_hotel, Direccion, Descripcion_hotel, fk_encargado FROM hotel WHERE fk_encargado='$varname'";
                $result=mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)){
            ?>
                <tr align="center">
                    <td><?php echo $row['Nombre_hotel']?></td>
                    <td><?php echo $row['Direccion']?></td>
                    <td><?php echo $row['Descripcion_hotel']?></td>
                    <td><?php echo $row['fk_encargado']?></td>
                </tr>
            <?php } ?>
            </div>
        </div>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>



    <footer id="main-footer">
        <p>Hotelia &copy; 2022, !LO MEJOR</p>
    </footer>
</body>

</html>