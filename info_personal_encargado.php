<!DOCTYPE html>
<html lang="es">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.css">
    <title>info_personal</title>
</head>
<body class="fondo2">
  <div class="contenedor">
    <div class="tittle-rh"><img src="./img/LogoSolo.png" width="30px" height="28px"> Información Encargado</div>
    <form action="">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Nombres</span>
                <input type="text" placeholder="Ej:Juan Nicolás" required>
            </div>
            <div class="input-box">
                <span class="details">Apellidos</span>
                <input type="text" placeholder="Ej:Arandia Gomez" required>
            </div>
            <div class="input-box">
                <span class="details">E-mail</span>
                <input type="text" placeholder="user@hotelia.com" required>
            </div>
            <div class="input-box">
                <span class="details">Confirme su e-mail</span>
                <input type="text" placeholder="" required>
            </div>
            <div class="input-img">
                <span class="details">Fecha de Nacimiento</span><br>
                <input type="date" name="birth" required>
            </div>
            <div class="input-box">
                <span class="details">Número de teléfono</span>
                <input type="text" placeholder="Digite su número" required>
            </div>
            <div class="input-box">
                <span class="details">Número de documento</span>
                <input type="text" placeholder="Digite el número" required>
            </div>
            <div class="input-box">
                <span class="details">Contraseña</span>
                <input type="password" placeholder="" required>
            </div>
            <div class="input-box">
                <span class="details">Confirme su Contraseña</span>
                <input type="password" placeholder="" required>
            </div>
        </div>
            <div class="estado-details">
                <input type="radio" class="estado" id="dot-1">
                <input type="radio" class="estado" id="dot-2">
                <input type="radio" class="estado" id="dot-3">
        
        <div class="terms">
            <input type="checkbox" class="details">
            <span class="details">Acepto la <a href="">Política de privacidad y condiciones de uso</a></span>
        </div>
        <div class="button">
            <input type="submit" value="REGISTRARME">
            <footer>
                <div class="pie">
                    2022 © Hotelia
                </div>
                </footer>
        </div>
    </form>
</body>
</html>