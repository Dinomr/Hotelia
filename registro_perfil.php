<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Regístrate</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <div class="contenedor">
        <div class="tittle-rh"><img src="./img/LogoSolo.png" width="30px" height="28px"> Registro usuario</div>
        <form action="./php/registro_perfil.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nombres</span>
                    <input type="text" placeholder="Ej:Juan Nicolás" required pattern="[A-ZÑa-zÑ0-9]{1-30}" name="nombre">
                </div>
                <div class="input-box">
                    <span class="details">Apellidos</span>
                    <input type="text" placeholder="Ej:Arandia Gomez" required pattern="[A-ZÑa-zÑ0-9]{1-30}" name="apellido">
                </div>
                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input type="email" placeholder="user@hotelia.com" required name="email">
                </div>
                <div class="input-img">
                    <span class="details">Fecha de Nacimiento</span><br>
                    <input type="date" name="fecha_nacimiento" required name="fecha_nacimiento">
                </div>
                <div class="input-box">
                    <span class="details">Número de teléfono</span>
                    <input type="text" placeholder="Digite su número" required pattern="[0-9]{1-15}" name="telefono">
                </div>
                <div class="input-box">
                    <span class="details">Número de documento</span>
                    <input type="text" placeholder="Digite el número" required pattern="[A-ZÑa-zÑ0-9]{1-30}" name="numero_documento">
                </div>
                <div class="input-box">
                    <span class="details">Contraseña</span>
                    <input type="password" placeholder="" required name="contraseña">
                </div>
            </div>
                <div class="estado-details">
                    <input type="radio" class="estado" id="dot-1" name="tipo_documento" value="C.C" checked>
                    <input type="radio" class="estado" id="dot-2" name="tipo_documento" value="Pasaporte">
                    <input type="radio" class="estado" id="dot-3" name="tipo_documento" value="C.E">
                <span class="estado-title">Tipo de documento</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="estado">C.C.</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="estado">Pasaporte</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot tri"></span>
                        <span class="estado">C.E.</span>
                    </label>
                </div>
            </div>
            <div class="terms">
                <input type="checkbox" class="details" required>
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
    </div>
</body>
</html>