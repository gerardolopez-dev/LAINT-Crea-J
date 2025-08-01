<?php
session_start(); 

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $nombre_usuario = $_SESSION['nombre']; 
    $sesion_activa = true;
} else {
    $usuario = null;
    $nombre_usuario = "Invitado"; 
    $sesion_activa = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/sign.css">
    <link rel="stylesheet" href="../CSS/boton-theme.css">
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
</head>
<body>
    <nav>
        <ul class="nav-section nav-left">
            <li><a href="../Maqueta/index.php">Magazine</a></li>
            <li><a href="../Maqueta/deportes.php">Deporte</a></li>
            <li><a href="../Maqueta/cultura.php">Cultura</a></li>
            <li><a href="../Maqueta/contactos.php">Contacto</a></li>
        </ul>

    <div class="logo">
        <a href="../Maqueta/index.php"><img src="../Media/mediaIndex/logo laint1.1.png" alt=""></a>
    </div>
        <ul class="nav-section nav-right">
            <li><a href="../Maqueta/sign.php" >Acceder</a></li>
            <li><button class="menu-button" id="openMenu">Cuenta</button></li>
            <li><a href="../Maqueta/laintShop.php">Laint Shop</a></li>
        </ul>
    </nav>
    <div class="side-menu" id="sideMenu">
        <button class="close-btn" id="closeMenu">&times;</button>
        <img src="../Media/mediaIndex/iconoPerfil1.2.webp" class="Icono">
        <?php if ($sesion_activa): ?>
            <h1><?php echo htmlspecialchars($nombre_usuario); ?></h1>
            <h3><?php echo htmlspecialchars($usuario); ?></h3>
            <a href="../PHP/sesion/logout.php">Cerrar sesión</a>
        <?php else: ?>
            <h1>Invitado</h1>
            <h3>No has iniciado sesión</h3>
            <a href="../Maqueta/sign.php">Iniciar sesión</a>
            <a href="../Maqueta/sign.php">Registrarse</a>
        <?php endif; ?>
        <div id="contenedor-tema">
            <div class="toggle">
            </div>
        </div>
    </div>

    <div class="background"></div>

    <div class="container" >
        <div class="container-form">
           <form action="" class="sign-in" method="POST">
                <h2>Iniciar Sesion</h2>
                <div class="social-network">
                    <ion-icon name="logo-twitch"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
                <span>Use su correo y contraseña</span>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Email" name="email">
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <?php
                   include("../PHP/modelo/conexion_bd.php");
                   include("../PHP/controlador/controlador_inicio.php"); 
                ?>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <input type="submit" value="INICIAR SESIÓN" class="button" name="iniciar">
           </form> 
        </div>

        <div class="container-form">
            <form action="" class="sign-up" method="POST">
                <h2>Registrarse</h2>
                <div class="social-network">
                    <ion-icon name="logo-twitch"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
                <span>Use su correo electrónico para registrarse</span>
                <div class="container-input">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" placeholder="Nombre" name="nombre">
                </div>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <?php
                    include("../PHP/modelo/conexion_bd.php");
                    include("../PHP/controlador/controlador_registrar.php");
                ?>
                <input type="submit" value="REGISTRARSE" class="button" name="registro">
            </form>
        </div>

        <div class="container-welcome">
           <div class="welcome-sign-up welcome">
                <h3>¡Bienvenido!</h3>
                <p>
                    Ingrese sus datos personales para usar todas las funciones del sitio
                </p>
                <button class="btn" id="btn-sign-up">Registrarse</button>
           </div>
           <div class="welcome-sign-in welcome">
                <h3>¡Hola!</h3>
                <p>
                    Registrese con sus datos personales para usar las funciones del sitio
                </p>
                <button class="btn" id="btn-sign-in">Iniciar Sesión</button>
           </div>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="grid-language">
        <div class="language" style=" color: #ffffffff;">
            <a href="../Maqueta EN/sign.php">+ English</a>
        </div>
    </div>

    <script>
    <?php if (!empty($_POST["registro"])): ?>
        document.querySelector('.container').classList.add('toggle-two');
    <?php endif; ?>
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
    <script src="../JS/formulario.js"></script>
    <script src="../JS//menuDesplegable.js"></script>
    <script src="../JS/boton.js"></script>
</html>