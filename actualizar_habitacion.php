<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Actualizar Habitación</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <div class="contenedor">
        <div class="tittle"><img src="./img/LogoSolo.png" width="25px" height="23px"> Actualizar Datos de Habitación</div>
        <form action="">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Descripción</span>
                    <input type="text" placeholder="Escriba la descripción" required>
                </div>
                <div class="input-box">
                    <span class="details">Cantidad de camas</span>
                    <input type="text" placeholder="Digite el número" required>
                </div>
                <div class="input-img">
                    <span class="details">Agregar una imágen</span><br>
                    <input type="file" name="img">
                </div>
                <div class="input-box">
                    <span class="details">Costo</span>
                    <input type="text" placeholder="Digite el precio" required>
                </div>
            </div>
                <div class="estado-details">
                    <input type="radio" class="estado" id="dot-1">
                    <input type="radio" class="estado" id="dot-2">
                <span class="estado-title">Estado de la Habitación</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="estado">Activo</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="estado">Inactivo</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="ACTUALIZAR DATOS">
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