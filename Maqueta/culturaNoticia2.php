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
    <title>Noticia</title>
    <link rel="stylesheet" href="../CSS/noticia.css">
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
            <a href="../../PHP/sesion/logout.php">Cerrar sesión</a>
        <?php else: ?>
            <h1>Invitado</h1>
            <h3>No has iniciado sesión</h3>
            <a href="../sign.php">Iniciar sesión</a>
            <a href="../sign.php">Registrarse</a>
        <?php endif; ?>
        <hr class="separador">
        <h4 class="cambioColor">Cambiar Tema</h4>
        <div id="contenedor-tema">
            <div class="toggle">
            </div>
        </div>
    </div>
    <header>
        <div class="contenedor1">
            <div class="contenedor-texto">
                <div class="link">
                    <a href="../Maqueta/index.php">Actualidad</a>
                </div>
                <div class="texto-noticia">
                    <h1>Diseñadoras salvadoreñas con presencia internacional</h1>
                </div>
                <div class="footer-new">
                    <h5>Por <span>LAINT</span>Febrero 21, 2025, 3:45pm</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../Media/MediaCultura/imgNoticiaCultura2.jpg">
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <h1><Strong>Yenny y Sindy Hernández – MOSKEM Menswear</Strong></h1>
                <p>
                    Las hermanas fundadoras de la marca masculina Moškem han desfilado en múltiples escenarios en EE. UU.
                    Incluyendo New York Fashion Week (febrero 2024), Doral Fashion Week (Miami), Latin Fashion Week Colorado, y eventos en Denver y Fort Collins. Representaron a El Salvador oficialmente como parte del NYFW 2024.
                </p>
                <h1><Strong>Miranda Miguel – Ischia</Strong></h1>
                <p>
                    La diseñadora salvadoreña Miranda Miguel ha llevado su marca Ischia a la pasarela de New York Fashion Week,
                    destacando por su enfoque en la sostenibilidad y el uso de materiales reciclados.
                    Su colección "Rebirth" fue aclamada por su innovación y compromiso con el medio ambiente.
                </p>
                <h1><Strong>Andrea Ayala y Eva Innocenti (nuevamente) — Latin Fashion Week NY</Strong></h1>
                <p>
                    Ambas, junto con Miranda Miguel, representaron a El Salvador en el Latin Fashion Week NY 
                    (septiembre 2024) dentro del marco de la Semana de la Moda en Nueva York,
                    destacando su creatividad ante audiencias latinas y profesionales del diseño. 
                </p>
            </div>
        </section>

        <aside class="masDeLoMismo">
            <div class="contenedorMain">
                <div class="contenedor-titulo">
                    <h1>MÁS DE LO MISMO</h1>
                    <hr color="grey">
                </div>
                <div class="contenedor-notis">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Tema: </strong>Moda</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="../Maqueta/culturaNoticia3.php"><strong>Pasarela SMODA Verano 2025 en El Sunzal</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Maqueta/culturaNoticia3.php"><img src="../Media/mediaCultura/Imagen noticia cult3.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Tema: </strong>Moda</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="../Maqueta/culturaNoticia1.php"><strong>Diseñadoras salvadoreñas con presencia internacional</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Maqueta/culturaNoticia1.php"><img src="../Media/mediaCultura/Imagen noticia cult2.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                </div>
            </div>
        </aside>
    </main>
    <footer class="footer-new">
        <hr>
        <h2>&copy; 2025 LAINT Magazine. Todos los derechos reservados.</h2>
    </footer>
    <div class="grid-language">
        <div class="language"><a href="../Maqueta EN/culturaNoticia1.php">+ English</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../JS/menuDesplegable.js"></script>
    <script src="../JS/boton.js"></script>
</body>
</html>