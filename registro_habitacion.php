<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Registrar Habitación</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <div class="contenedor">
        <div class="tittle-hbt"><img src="./img/LogoSolo.png" width="25px" height="23px"> Añadir Habitación</div>
        <form action="./php/registro_habitacion.php" method="POST" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Hotel</span>
                    <input type="text" placeholder="Nombre del hotel" required pattern="[A-ZÑa-zÑ0-9]{1-30}" name="nombre_hotel">
                </div>
                <div class="input-box">
                    <span class="details">Descripción
                    </span>
                    <input type="text" placeholder="Escriba la descripción" required pattern="[A-ZÑa-zÑ0-9]{1-30}">
                </div>
                <div class="input-box">
                    <span class="details">Cantidad de Camas</span>
                    <input type="text" placeholder="Digite el número" required name="camas" pattern="[A-ZÑa-zÑ0-9]{1-30}">
                </div>
                <div class="input-img">
                    <span class="details">Agregar una imágen</span><br>
                    <input type="file" name="imagen" required>
                </div>
                <div class="input-box">
                    <span class="details">Costo</span>
                    <input type="text" placeholder="Digite el costo" name="precio" required pattern="[A-ZÑa-zÑ0-9]{1-30}">
                </div>
                <div class="estado-details">
                    <input type="radio" class="estado" id="dot-1" name="estado" value="Activo" checked>
                    <input type="radio" class="estado" id="dot-2" name="estado" value="Ocupado">
                <span class="estado-title">Tipo de documento</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="estado">Activo</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="estado">Ocupado</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="REGISTRAR">
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