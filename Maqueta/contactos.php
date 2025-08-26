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
    <title>Contacto</title>
    <link rel="stylesheet" href="../CSS/contactos.css">
    <link rel="stylesheet" href="../CSS/boton-theme.css">
    <link rel="stylesheet" href="../CSS/language.css"> 
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

    <h1 class="titulo">Contacto</h1>
    <p>Ponte en contacto con nosotros si tienes alguna duda o propuesta a <strong>helplaint@gmail.com</strong></p>

    <form>
        <div class="row">
            <input type="text" placeholder="Nombre" required>
            <input type="email" placeholder="Correo electronico" required>
        </div>
        <input type="text" placeholder="Numero telefonico (opcional)">
        <textarea placeholder="Tu mensaje" rows="10" required></textarea>
        <button class="buttonEnviar" type="submit">Enviar mensaje</button>
    </form>
    <div class="grid-language">
        <div class="language"><a href="../Maqueta EN/contactos.php">+ English</a></div>
    </div>
    <div class="footer">
        <hr>
        <h2>Laint®</h2>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../JS/menuDesplegable.js"></script>
    <script src="../JS/boton.js"></script>
</body>
</html>