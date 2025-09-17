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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../CSS/contactos.css">
    <link rel="stylesheet" href="../CSS/boton-theme.css">
    <link rel="stylesheet" href="../CSS/language.css"> 
     <link rel="stylesheet" href="../CSS/particulas.css"> 
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
        <hr class="separador">
        <h4 class="cambioColor">Change Theme</h4>
         <div id="contenedor-tema">
            <div class="toggle">
            </div>
        </div>
    </div>

    <h1 class="titulo">Contact</h1>
    <p>Get in touch with us if you have any questions or proposals at <strong>helplaint@gmail.com</strong></p>


    <form>
        <div class="row">
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
        </div>
        <input type="text" placeholder="Phone number (optional)">
        <textarea placeholder="Your Message" rows="10" required></textarea>
        <button class="buttonEnviar" type="submit">Sent Message</button>
    </form>
    <div class="grid-language">
        <div class="language"><a href="../Maqueta/contactos.php">+ Español</a></div>
    </div>
    <div class="footer">
        <hr>
        <h2>Laint®</h2>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../JS/menuDesplegable.js"></script>
    <script src="../JS/boton.js"></script>
    <script src="../JS/particulas.js"></script>
</body>
</html>