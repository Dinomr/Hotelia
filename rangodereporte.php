<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.css">
    <title>Rango de Reporte</title>
</head>
<body class="fondo2">
  <div class="contenedor">
    <div class="tittle-rh"><img src="./img/LogoSolo.png" width="30px" height="28px"> Información Encargado</div>
    <form action="">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Nombres</span>
                <input type="text" placeholder="Ej:Nombre" required step="font size: 5px;" pattern="[A-Za-zÑñ]{1,30}">
            </div>
            <div class="input-box">
                <span class="details">Apellidos</span>
                <input type="text" placeholder="Ej:Apellido" required step="font size: 5px;" pattern="[A-Za-zÑñ]{1,30}">
            </div>
            <div class="input-box">
                <span class="details">E-mail</span>
                <input type="email" placeholder="user@hotelia.com" required step="font size: 5px;">
            </div>
            <div class="input-box">
              <span class="details">Reporte</span>
              <textarea id="textarea" name="textarea" placeholder="Ej:En el presente escrito vengo a dar una queja" required rows="8" cols="83.5"></textarea>
            </div>
        </div>
            <div class="estado-details">
                <input type="radio" class="estado" id="dot-1">
                <input type="radio" class="estado" id="dot-2">
                <input type="radio" class="estado" id="dot-3">
        <div class="button">
            <input type="submit" value="ENVIAR REPORTE">
            <footer>
                <div class="pie">
                    2022 © Hotelia
                </div>
                </footer>
        </div>
    </form>
</body>
</html>