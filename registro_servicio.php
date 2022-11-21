<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Añadir servicio</title>
    <!-- <link rel="stylesheet" href="css/nav.css"> -->
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <div class="contenedor">
        <div class="tittle-nsrv"><img src="./img/LogoSolo.png" width="25px" height="23px"> Añadir Nuevo Servicio</div>
        <form action="conectar.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Servicio</span>
                    <input type="text" name="servicio" id="Servicio" placeholder="Ej. 'Tour Turístico'" required pattern="[A-ZÑa-zÑ0-9]{30}">
                </div>
                <div class="input-box">
                    <span class="details">Dirigido</span>
                    <input type="text" name="dirigido" id="Dirigido" placeholder="Ej. 'Familiar - Pareja'" required pattern="[A-ZÑa-zÑ0-9]{30}">
                </div>
                <div class="input-box">
                    <span class="details">Costo</span>
                    <input type="text" name="costo" id="Costo" placeholder="Digite el precio" required pattern="[0-9]{30}">
                </div>
            </div>
        <div class="button">
            <input type="submit" name="enviar" value="ACTUALIZAR DATOS">
            <footer>
                <div class="pie">
                    2022 © Hotelia
                </div>
                </footer>
        </div> 
        
            </div>
        </form>
    </div>
</body>
</html>                                                                         