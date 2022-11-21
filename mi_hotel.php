<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Actualizar Información Hotel</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <div class="contenedor">
        <div class="tittle-mh"><img src="./img/LogoSolo.png" width="25px" height="23px"> Información del Hotel</div>
        <form action="php/mi_hotel.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nombre Hotel</span>
                    <input type="text" placeholder="Ej: 'Hotel tequendama'" name="nombre_hotel" required>
                </div>
                <div class="input-box">
                    <span class="details">Dirección</span>
                    <input type="text" placeholder="Digite la dirrección del hotel" name="direccion" required>
                </div>
                <div class="input-box">
                    <span class="details">Descripción del hotel</span>
                    <textarea name="descripcion" cols="30" rows="4" required style="resize: none;"></textarea>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="ACTUALIZAR">
                <footer>
                <div class="pie">
                    2022 © Hotelia
                </div>
                </footer>
            </div>
        </form>
    </div>
</body>

</html>