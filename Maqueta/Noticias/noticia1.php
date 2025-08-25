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
                    <h1>Miles celebraran el dia del Skateboarding, con el famoso evento GoSkateDay, celebrado en el redondel Masferrer</h1>
                </div>
                <div class="footer-new">
                    <h5>Por <span>LAINT</span> Mayo 24,2025,10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/mediaIndex/GoSkate.jpg">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                    San Salvador, 21 de junio de 2025 — Las calles de la capital se llenaron de energía, pasión y cultura urbana este sábado con la celebración del Go Skate Day 2025, un evento que reunió
                    a miles de patinadores salvadoreños en una jornada que combinó deporte, arte y comunidad.
                </p>
                <p>
                Desde tempranas horas, el ambiente comenzó a calentar en el Redondel Masferrer, punto de partida para el icónico downhill que llevó a los participantes a recorrer el Paseo General Escalón hasta llegar a la Plaza El Salvador del Mundo. Durante el trayecto, skaters de todas las edades demostraron su talento sobre la tabla, con trucos, velocidad y estilo que capturaron la atención de los transeúntes y asistentes.
                <p>
                    El evento, organizado por colectivos locales y apoyado por la comunidad skater, logró congregar a cerca de 5,000 personas, entre patinadores, familias y espectadores. Además del recorrido principal, se llevaron a cabo concursos de trucos, rifas de patinetas y actividades que incentivaron la convivencia y el intercambio entre generaciones de riders.
                </p>
                <p>
                    “Es la primera vez que hago el downhill completo y fue una experiencia increíble”, comentó Andrés, un joven patinador de Soyapango. “Este tipo de espacios nos permiten expresarnos y sentirnos parte de algo más grande.
                </p>
                <p>
                    El Go Skate Day, celebrado a nivel mundial cada 21 de junio, busca visibilizar el skateboarding como un deporte, una forma de vida y una herramienta de transformación social. En El Salvador, la fecha ha ganado fuerza en los últimos años, convirtiéndose en un símbolo de resistencia y creatividad para la juventud urbana.
                </p>
                <p>
                    Colectivos como los de Santa Ana, San Miguel y La Libertad también anunciaron actividades similares durante el fin de semana, fortaleciendo la red de skaters a nivel nacional. En redes sociales, el evento fue tendencia bajo etiquetas como #GoSkateDay2025SV, donde los participantes compartieron fotos y videos de sus recorridos.
                </p>
                <p>
                    Desde el Ministerio de Cultura y la alcaldía capitalina, se destacó la importancia de apoyar estas iniciativas y se reafirmó el compromiso de habilitar más espacios públicos para la práctica segura del skateboarding.
                </p>
                <p>
                    Con esta vibrante jornada, el Go Skate Day 2025 no solo celebró el amor por las patinetas, sino que también reafirmó el valor de la cultura urbana como parte fundamental del tejido social salvadoreño.
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
                            <h3><a href="../Noticias/noticia3.php"><strong>Lo ultimo de Nude Project</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia3.php"><img src="../../Media/Noticias/noticiaNudeFoto.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Tema: </strong>SubCulturas</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="../Noticias/noticia5.php"><strong>Arte en parque Cuscatlán</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia5.php"><img src="../../Media/Noticias/arteparquefoto.webp"></a>
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

    <div class="overlay" id="overlay"></div>
    <div class="grid-language">
        <div class="language"><a href="../../Maqueta EN/Noticias/noticia1.php">+ English</a></div>
    </div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>