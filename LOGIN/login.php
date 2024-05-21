<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-box">
        <div class="icon-container">
            <i class="fas fa-user"></i>
        </div>
        <form method="POST" action="">
        <?php
            include_once('../CONEXION_PHP/Conexion.php');
            include('Controlador.php');                   
        ?>
            <div class="textbox">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="textbox">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" class="btn" name="btnIngresar" value="Iniciar Sesión">
           
        </form>
    </div>
</body>
</html>

