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
    <link rel="stylesheet" href="../CSS/particulas.css">
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
                    <h1>Deslumbrante y gran desfile de un instituto de moda en El Salvador</h1>
                </div>
                <div class="footer-new">
                    <h5>Por <span>LAINT</span> Abril 28, 2025, 8:32pm</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../Media/MediaCultura/imgNoticiaCultura3.jpg" alt="Imagen Noticia Cultura 3">
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                     Fue presentada por SMODA, el Clúster Oficial de la Moda de El Salvador, respaldado por CONAMYPE, como parte del campeonato mundial de longboard ISA en El Sunzal.
                </p>
                <p>
                    La pasarela tuvo una temática veraniega ambientada en la playa, mostrando moda fresca y familiar con fuerte influencia artesanal.
                </p>
                <p>
                    Las prendas exhibidas combinaban tradición artesanal con estilo contemporáneo, realizadas por diseñadores y artesanos salvadoreños locales.
                </p>
                <p>
                    El evento inaugural fue una pasarela espectacular con
                    diseños de estudiantes y la presencia de figuras reconocidas del mundo del espectáculo salvadoreño y latinoamericano.
                    El público aplaudió la iniciativa como una apuesta valiente por el arte, la educación y la innovación.
                </p>
                <p>
                    El presidente de CONAMYPE, Paul Steiner, subrayó cómo estos artesanos han evolucionado hacia creadores de moda modernos usando técnicas tradicionales.
                </p>
                <p>
                    Representa la fusión de moda, cultura y turismo en un escenario natural reconocido internacionalmente por su patrimonio surfero.
                </p>
                <p>
                    Promueve el desarrollo económico de diseñadores locales mediante visibilidad directa y conexión con audiencias nacionales e internacionales.
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
                            <h3><a href="../Maqueta/culturaNoticia1.php"><strong>Instituto de moda en El Salvador</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Maqueta/culturaNoticia1.php"><img src="../Media/MediaCultura/Imagen noticia cult2.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Tema: </strong>Moda</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="../Maqueta/culturaNoticia2.php"><strong>Diseñadoras salvadoreñas con presencia internacional</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Maqueta/culturaNoticia2.php"><img src="../Media/mediaCultura/Imagen noticia2.jpg"></a>
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
    <script src="../JS/particulas.js"></script>
</body>
</html>