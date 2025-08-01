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
            <li><a href="../Maqueta EN/index.php">Magazine</a></li>
            <li><a href="../Maqueta EN/deportes.php">Sports</a></li>
            <li><a href="../Maqueta EN/cultura.php">Culture</a></li>
            <li><a href="../Maqueta EN/contactos.php">Contact</a></li>
        </ul>

    <div class="logo">
        <a href="../Maqueta EN/index.php"><img src="../Media/mediaIndex/logo laint1.1.png" alt=""></a>
    </div>
        <ul class="nav-section nav-right">
            <li><a href="../Maqueta EN/sign.php" >Login</a></li>
            <li><button class="menu-button" id="openMenu">Account</button></li>
            <li><a href="../Maqueta EN/laintShop.php">Laint Shop</a></li>
        </ul>
    </nav>
    <div class="side-menu" id="sideMenu">
        <button class="close-btn" id="closeMenu">&times;</button>
        <img src="../Media/mediaIndex/iconoPerfil1.2.webp" class="Icono">
        <?php if ($sesion_activa): ?>
            <h1><?php echo htmlspecialchars($nombre_usuario); ?></h1>
            <h3><?php echo htmlspecialchars($usuario); ?></h3>
            <a href="../PHP/sesion/logoutEN.php">Log out</a>
        <?php else: ?>
            <h1>Guest</h1>
            <h3>You are not logged in</h3>
            <a href="../Maqueta EN/sign.php">Log in</a>
            <a href="../Maqueta EN/sign.php">Register</a>
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
                <h2>Sign In</h2>
                <div class="social-network">
                    <ion-icon name="logo-twitch"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
                <span>Use your email and password</span>
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
                   include("../PHP/controlador/controlador_inicio_EN.php"); 
                ?>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <input type="submit" value="SIGN IN" class="button" name="iniciar">
           </form> 
        </div>

        <div class="container-form">
            <form action="" class="sign-up" method="POST">
                <h2>Sign Up</h2>
                <div class="social-network">
                    <ion-icon name="logo-twitch"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
                <span>Use your email to register</span>
                <div class="container-input">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" placeholder="Name" name="nombre">
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
                    include("../PHP/controlador/controlador_registrar_EN.php");
                ?>
                <input type="submit" value="REGISTER" class="button" name="registro">
            </form>
        </div>

        <div class="container-welcome">
           <div class="welcome-sign-up welcome">
                <h3>Welcome!</h3>
                <p>
                    Enter your personal details to use all the site's features
                </p>
                <button class="btn" id="btn-sign-up">Sign Up</button>
           </div>
           <div class="welcome-sign-in welcome">
                <h3>Hello!</h3>
                <p>
                    Register with your personal details to use the site's feature
                </p>
                <button class="btn" id="btn-sign-in">Sign In</button>
           </div>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="grid-language">
        <div class="language" style=" color: #ffffffff;">
            <a href="../Maqueta/sign.php">+ Español</a>
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