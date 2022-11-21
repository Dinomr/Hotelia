<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Registrar Hotel</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <div class="contenedor">
        <div class="tittle-nsrv"><img src="./img/LogoSolo.png" width="25px" height="23px"> Registrar Hotel</div>
        <form action="">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nombre del Establecimiento</span>
                    <input type="text" placeholder="Ej: 'Hotel La Candelaria'" required pattern="[A-ZÑa-zÑ0-9]{30}">
                </div>
                <div class="input-box">
                    <span class="details">Dirección</span>
                    <input type="text" placeholder="Digite la dirección" required pattern="[A-ZÑa-zÑ0-9]{30}">
                </div>
                <div class="input-img">
                    <span class="details">Agregar una imágen</span><br>
                    <input type="file" name="img">
                </div>
                <div class="input-box">
                    <span class="details">Descripción</span>
                    <input type="text" placeholder="Escriba la descripción" required pattern="[A-ZÑa-zÑ0-9]{30}">
                </div>
            </div>
                <div class="estado-details">
                    <input type="radio" class="estado" id="dot-1">
                    <input type="radio" class="estado" id="dot-2">
                <span class="estado-title">Estado del Establecimiento</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="estado">Abierto</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="estado">Cerrado</span>
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