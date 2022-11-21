<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Inicio Secion </title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="login,formulariode acceso html">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/login.css">
        <style type="text/css"> 
        </style>
        <script type="text/javascript"> 
        </script>
    </head>
    <body>
        <div id="contenedor">
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" method="post" action="./php/login_u.php">			  
                        <label for="usuario">Usuario</label>
                        <input id="usuario" type="text" name="usuario" placeholder="Número de documento" required>
                        
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="password" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                    </form>
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Usuario
                    </div>
                    <hr>
                    <div class="pie-form">
                        <a href="./Recuperar-contraseña.php">¿Perdiste tu contraseña?</a>
                        <a href="./registro_perfil.php">¿No tienes Cuenta? Registrate</a>
                        <a href="./login-encargado.php">Tu rol es encargado</a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>