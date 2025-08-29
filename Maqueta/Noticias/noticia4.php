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
    <link rel="stylesheet" href="../../CSS/noticia.css">
    <link rel="stylesheet" href="../../CSS/boton-theme.css">
    <link rel="stylesheet" href="../../CSS/language.css"> 
    <link rel="shortcut icon" href="../../Media/favicon.ico" type="image/x-icon">
</head>
<body>
    <nav>
        <ul class="nav-section nav-left">
            <li><a href="../index.php">Magazine</a></li>
            <li><a href="../deportes.php">Deporte</a></li>
            <li><a href="../cultura.php">Cultura</a></li>
            <li><a href="../contactos.php">Contacto</a></li>
        </ul>

    <div class="logo">
        <a href="../../Maqueta/index.php"><img src="../../Media/mediaIndex/logo laint1.1.png" alt=""></a>
    </div>
        <ul class="nav-section nav-right">
            <li><a href="../sign.php" >Acceder</a></li>
            <li><button class="menu-button" id="openMenu">Cuenta</button></li>
            <li><a href="../laintShop.php">Laint Shop</a></li>
        </ul>
    </nav>
    <div class="side-menu" id="sideMenu">
        <button class="close-btn" id="closeMenu">&times;</button>
        <img src="../../Media/mediaIndex/iconoPerfil1.2.webp" class="Icono">
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
                    <a href="../index.php">Actualidad</a>
                </div>
                <div class="texto-noticia">
                    <h1>Jóvenes salvadoreños se abren paso en el escenario global de las culturas urbanas con Kardo 2025</h1>
                </div>
                <div class="footer-new">
                    <h5>Por <span>LAINT</span> Mayo 24,2025,10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/Noticias/noticiaKardo.jpg">
                </div>
            </div>
        </div>
    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                    <strong>San Salvador, julio de 2025 </strong> El Salvador ha comenzado a marcar presencia en el circuito mundial de disciplinas urbanas con su participación en Kardo 8, una competencia internacional que celebra el talento emergente en áreas como el freestyle, BMX, skateboarding, graffiti, parkour, breakdance y producción audiovisual.
                </p>
                <p>
                    Este año, más de 40 jóvenes salvadoreños han sido parte del proceso clasificatorio para representar al país en la gran final que se celebrará en Stavropol, Rusia, en agosto. Esta participación marca un hito para la cultura urbana nacional, al brindar un espacio de visibilidad y legitimación para expresiones artísticas y deportivas que históricamente han sido marginadas.
                </p>
                <div class="contenedor-p">
                    <p>
                        “Este tipo de competencias permite que jóvenes de comunidades muchas veces olvidadas encuentren una plataforma para mostrar su talento, y lo más importante, sentirse parte de una comunidad internacional”, expresó Hugo Rubio, gestor cultural y representante oficial de Kardo en El Salvador.
                    </p>
                </div>
                <p>
                    La dinámica de clasificación se basa en el envío de videos de máximo un minuto a través del sitio oficial <a href="https://kardoaward.com/">kardoaward.com</a>, donde un jurado internacional evalúa creatividad, técnica y puesta en escena. La iniciativa ha sido bien recibida en redes sociales, donde cuentas como @kardoelsalvador han generado comunidad y orientación para los participantes locales.
                </p>
                <p>
                    Además, se ha anunciado que El Salvador podría en el futuro convertirse en una de las sedes presenciales de eliminatorias, permitiendo así un mayor acceso a jóvenes sin recursos tecnológicos.
                </p>
                <div class="contenedor-foto">
                    <img src="../../Media/Noticias/kardoimg.jpg" alt="">
                </div>
                <h1><strong>Más que una competencia: una ventana cultural</strong></h1>
                <p>
                    Kardo no es solo un torneo; es una celebración global de las culturas urbanas contemporáneas. Su enfoque va más allá del deporte extremo, dando cabida a grafiteros, beatmakers, DJs, filmmakers y raperos. La inclusión de El Salvador en esta plataforma representa una oportunidad crucial para derribar estigmas y visibilizar la riqueza de las expresiones urbanas locales.
                </p>
                <p>
                    Los finalistas salvadoreños tendrán la posibilidad de competir frente a más de 40 países, conectando con miles de artistas jóvenes en una experiencia que combina competición, formación y conexión cultural.
                </p>
                <h1><strong>Un movimiento que apenas comienza</strong></h1>
                <p>
                    La respuesta positiva ha motivado a organizadores locales a expandir la iniciativa con talleres, competencias internas y alianzas con instituciones que promuevan el arte y el deporte juvenil.
                </p>
                <p>
                    “Queremos que esto no sea un evento aislado, sino una puerta que quede abierta permanentemente para que el talento urbano salvadoreño llegue donde merece estar: al mundo”, agregó Rubio.
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
                            <h5><strong>Tema: </strong>Deportes</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="../Noticias/noticia1.php"><strong>Miles celebraran el dia del Skateboarding</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia1.php"><img src="../../Media/mediaIndex/GoSkate.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Tema: </strong>Moda</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="../Noticias/noticia3.php"><strong>Lo ultimo de Nude Project</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia3.php"><img src="../../Media/Noticias/noticiaNudeFoto.jpg"></a>
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
        <div class="language"><a href="../../Maqueta EN/Noticias/noticia4.php">+ English</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>