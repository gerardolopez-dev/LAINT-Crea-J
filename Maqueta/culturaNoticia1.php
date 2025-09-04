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
                    <h1>REl Salvador da un gran paso en la industria del diseño: nace el Instituto Internacional de Moda Haute Couture</h1>
                </div>
                <div class="footer-new">
                    <h5>Por <span>LAINT</span> Enero 10, 2025, 9:58am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../Media/MediaCultura/imgNoticiaCultura1.jpeg">
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                    En un hecho sin precedentes para la industria creativa de Centroamérica,
                    El Salvador inauguró el Instituto Internacional de Diseño de Modas Haute Couture by Palomeque
                    , una institución que marca un antes y un después en la educación de moda en la región.
                </p>
                <p>
                    Ubicado en el corazón de la colonia Escalón, este moderno instituto nace con el objetivo de profesionalizar el talento salvadoreño,
                    ofreciendo carreras técnicas y diplomados en diseño de moda, estilismo,
                    confección avanzada, y visual merchandising, todos con un enfoque 100% práctico e internacional.
                </p>
                <p>
                    "Queremos que los jóvenes salvadoreños puedan alcanzar sus sueños sin tener que irse del país",
                    declaró Astrid de Peña, cofundadora del proyecto junto al diseñador Pablo Palomeque,
                    conocido por vestir celebridades internacionales y por su apuesta por la moda ética.
                </p>
                <p>
                    Con instalaciones de última generación, profesores invitados desde París, Nueva York y Milán,
                    y un enfoque educativo moderno basado en el learning by doing,
                    el instituto promete ser una cuna de grandes talentos.
                </p>
                <p>
                    El evento inaugural fue una pasarela espectacular con
                    diseños de estudiantes y la presencia de figuras reconocidas del mundo del espectáculo salvadoreño y latinoamericano.
                    El público aplaudió la iniciativa como una apuesta valiente por el arte, la educación y la innovación.
                </p>
                <p>
                    Con esta apertura, El Salvador se posiciona como referente emergente en educación de moda en América Latina,
                    demostrando que la creatividad también puede ser motor de desarrollo económico y orgullo nacional.
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
                            <h3><a href="../Maqueta/culturaNoticia2.php"><strong>Instituto de moda en El Salvador</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Maqueta/culturaNoticia2.php"><img src="../Media/mediaCultura/Imagen noticia2.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Tema: </strong>Moda</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="../Maqueta/culturaNoticia3.php"><strong>Diseñadoras salvadoreñas con presencia internacional</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Maqueta/culturaNoticia3.php"><img src="../Media/mediaCultura/Imagen noticia cult3.jpg"></a>
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