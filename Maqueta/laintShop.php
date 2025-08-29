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
    <title>Shop</title>
    <link rel="stylesheet" href="../CSS/laintShop.css">
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
            <li><button class="menu-button" id="openMenuTop">Prendas</button></li>
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
        <hr class="separador">
        <h4 class="cambioColor">Cambiar Tema</h4>
        <div id="contenedor-tema">
            <div class="toggle">
            </div>
        </div>
    </div>
    <div class="sub-menu" id="subMenu">
        <ul>
            <li><a href="#flyCrewCulture">New Arrival!</a></li>
            <li><a href="#shoes">Shoes</a></li>
            <li><a href="#hoddie-jackets">Cold!</a></li>
            <li><a href="#shirts">T-Shirts</a></li>
            <li><a href="#pants">Pants</a></li>
        </ul>
        <button class="close-btn2" id="closeTopMenu">&times;</button>
    </div>
    <header>
        <div class="divheader">
            <ul>
                <li><img src="../Media/mediaIndex/Streetwear-2.webp" class="headerimg" alt="HeaderImgUno"></li>
                <li><img src="../Media/mediaIndex/marca_stussy_historia_streetwear_2218.webp" class="headerimg" alt="HeaderImgDos"></li>
                <li><img src="../Media/mediaIndex/fake.webp" class="headerimg" alt="HeaderImgTres"></li>
                <li><img src="../Media/mediaIndex/stussy-soho-londres-loja.jpg" class="headerimg" alt="HeaderImgCuatro"></li>
            </ul> 
        </div>
    </header>

    <div class="marcasDiv" id="flyCrewCulture">
        <img src="../Media/Prendas/FlyCrewCulture/flycrew-removebg-preview2.png" alt="FlyCrewCulture" >
    </div>
 

    <div id="contenedor-productos"  class="contenedor-productos">
    </div>

    <div class="marcasDiv" id="shoes">
        <img src="../Media/Prendas/DC/dcLogo.png" alt="" >
        <img src="../Media/Prendas/Bapesta/Bapesta-Logo.png" alt="">
    </div>
 

    <div id="contenedor-productos-2"  class="contenedor-productos">
    </div>

    <div class="marcasDiv" id="hoddie-jackets">
        <img src="../Media/Prendas/Carhartt/carharttLogo.png" alt="" >
        <img src="../Media/Prendas/FakeGods/fakeGodsLogo.png" alt="">
    </div>
 
    <div id="contenedor-productos-3"  class="contenedor-productos">
    </div>

    <div class="marcasDiv" id="shirts">
        <img src="../Media/Prendas/GOLF/golfLogo.png" alt="" >
        <img src="../Media/Prendas/Stussy/stussyLogo.png" alt="">
    </div>

    <div id="contenedor-productos-4"  class="contenedor-productos">
    </div>

    <div class="marcasDiv" id="pants">
        <img src="../Media/Prendas/NudeProject/nudeProjectLogo.webp" alt="" >
        <img src="../Media/Prendas/Scuffers/scuffersLogo.png" alt="">
    </div>

    <div id="contenedor-productos-5"  class="contenedor-productos">
    </div>

    <div class="footer">
        <hr>
        <h2>Laint®</h2>
        <p>Las imágenes utilizadas en este proyecto son únicamente para fines educativos y sin intención de lucro</p>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="sideMenuBuy" id="sideMenuBuy">
        <div class="titulo" id="titulo">
            <p>Detalles del producto</p>
            <button class="cerrar-menu" id="cerrar-menu">&times;</button>
        </div>
        <img  id="imagen-producto" class="imagen-producto" alt="">
        <div class="informacion">
            <p id="titulo-producto" class="titulo-producto"></p>
            <p id="precio-producto" class="precio-producto"></p>
            <div class="informacion-comprar">
                <p>Para comprar este producto:</p>
                <p>Ve a la página oficial para finalizar la compra.</p>
            </div>
            <button id="boton-compra" class="boton-compra">
                Ir a la Tienda Original
            </button>
        </div>
    </div>
    
    <div class="grid-language">
        <div class="language"><a href="../Maqueta EN/laintShop.php">+ English</a></div>
    </div>

    <div class="overlay-dos" id="overlay-dos"></div>

    <script src="../JS/laintShop.js"></script>
    <script src="../JS/menuDesplegableTop.js"></script>
    <script src="../JS/laintShopAnimacion.js"></script>
    <script src="../JS/menuDesplegable.js"></script> 
    <script src="../JS/boton.js"></script>

</body>
</html>