<!DOCTYPE html> <!-- Declaración de tipo de documento HTML -->
<html lang="es"> <!-- Inicio del elemento HTML con especificación de idioma -->

<head>
    <meta charset="UTF-8"> <!-- Codificación de caracteres UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista para dispositivos móviles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> <!-- Enlace al archivo CSS de Font Awesome -->
    <link rel="stylesheet" href="style.css"> <!-- Enlace al archivo de estilos personalizado -->
    <title>Noticias UCV | Iniciar Sesión</title> <!-- Título de la página -->
</head>

<body>
    <div class="container" id="container"> <!-- Contenedor principal -->
        <div class="form-container sign-up"> <!-- Contenedor del formulario de registro -->
            <form> <!-- Formulario de registro -->
                <h1>CREAR CUENTA</h1> <!-- Título del formulario de registro -->
                <div class="social-icons"> <!-- Iconos de redes sociales -->
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a> <!-- Icono de Google Plus -->
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a> <!-- Icono de Facebook -->
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a> <!-- Icono de GitHub -->
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a> <!-- Icono de LinkedIn -->
                </div>
                <span>o use su email para registrarse</span> <!-- Texto alternativo para registro -->
                <input type="text" placeholder="Nombre"> <!-- Campo de entrada para el nombre -->
                <input type="email" placeholder="Email"> <!-- Campo de entrada para el correo electrónico -->
                <input type="password" placeholder="Contraseña"> <!-- Campo de entrada para la contraseña -->
                <button>Registrarse</button> <!-- Botón de registro -->
            </form>
        </div>

        <div class="form-container sign-in"> <!-- Contenedor del formulario de inicio de sesión -->
            <form method="POST" action=""> <!-- Formulario de inicio de sesión con método POST y acción hacia Controlador.php -->

                <h1>INICIAR SESIÓN</h1> <!-- Título del formulario de inicio de sesión -->
                    <?php
                    include_once('../CONEXION_PHP/Conexion.php');
                    include('Controlador.php');                   
                    ?>


                <input type="email" placeholder="Email" name="email" required> <!-- Campo de entrada para el correo electrónico -->
                <input type="password" placeholder="Contraseña" name="password" required> <!-- Campo de entrada para la contraseña -->
                <a href="#">¿Olvidaste tu contraseña?</a> <!-- Enlace para recuperar contraseña -->
                <!--<button name = "btnIngresar" type="submit">Ingresar</button>--> <!-- Botón de inicio de sesión -->
                <input name="btnIngresar" class="btn" type="submit" value="INGRESAR">
            </form>

        </div>

        <div class="toggle-container"> <!-- Contenedor para el botón de alternar entre formularios -->
            <div class="toggle"> <!-- Botón de alternar entre formularios -->
                <div class="toggle-panel toggle-left"> <!-- Panel izquierdo (Iniciar Sesión) -->
                    <h1>¡Bienvenido de nuevo!</h1> <!-- Título del panel izquierdo -->
                    <p>Ingrese sus datos personales para utilizar todas las funciones del sitio</p> <!-- Descripción del panel izquierdo -->
                    <button class="hidden" id="login">Iniciar Sesión</button> <!-- Botón para mostrar formulario de inicio de sesión -->
                    <button><a href="index.html">Regresar al Principio</a></button> <!-- Botón para regresar al inicio -->
                </div>
                <div class="toggle-panel toggle-right"> <!-- Panel derecho (Registro) -->
                    <h1>¡Hola, Amigo!</h1> <!-- Título del panel derecho -->
                    <p>Regístrese con sus datos personales para utilizar todas las funciones del sitio</p> <!-- Descripción del panel derecho -->
                    <button class="hidden" id="register">Nuevo registro</button> <!-- Botón para mostrar formulario de registro -->
                    <button><a href="index.html">Regresar al Principio</a></button> <!-- Botón para regresar al inicio -->
                </div>
            </div>
        </div>
    </div>
    
    <script src="script.js"></script> <!-- Enlace al archivo de script JavaScript -->
</body>
</html>
