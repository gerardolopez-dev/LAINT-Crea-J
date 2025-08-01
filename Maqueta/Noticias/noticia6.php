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
    <title>Noticia Seis</title>
    <link rel="stylesheet" href="../../CSS/noticia6.css">
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
                    <h1>Thrifting en El Salvador: moda consciente, historia y comunidad se unen en la cultura urbana</h1>
                </div>
                <div class="footer-new">
                    <h5>Por <span>LAINT</span> Mayo 24,2025,10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/Noticias/ropaChucaPortada.jpeg">
                </div>
            </div>
        </div>
    </header>
    <section class="parrafoNoticia">
        <div class="div-parra">
            <p>
                <strong>San Salvador, julio de 2025 </strong> Lo que hace pocos años se veía como una opción económica, hoy se ha convertido en una tendencia de identidad urbana: la cultura del thrifting —comprar ropa de segunda mano con estilo— ha emergido en El Salvador como una forma de consumo consciente, estética alternativa e impulso empresarial juvenil.
            </p>
            <h1><strong>Del estigma a la curaduría como arte</strong></h1>
            <p>
                En sus inicios, la ropa usada en el país estaba ligada a estigmas: era vista como proveniente de pobreza o incluso relacionada con personas fallecidas. Sin embargo, esta percepción ha cambiado radicalmente en años recientes.
            </p>
            <p>
                Según un estudio de Garson & Shaw, El Salvador importó más de 35 000 toneladas de ropa de segunda mano en 2021 —equivalentes a $62 millones y cerca del 25% del total de ropa vendida en el país— posicionándolo en el puesto 23 a nivel global como importador de este tipo de prendas.
            </p>
            <p>
                Hoy, proyectos como Ropa Chuca o Ultra Caótica identifican su propuesta con la palabra thrift, elevando la selección de piezas únicas —cada una curada como si fuera una obra de arte— a una experiencia estética e individual.
            </p>
            <div class="contenedor-foto">
                <img src="../../Media/Noticias/aMG_-Culto-Market03.jpg" alt="">
            </div>
            <h1><strong>Festival pionero: COAFEST revoluciona el thrift local</strong></h1>
            <p>
                El 13 de octubre de 2024, el Museo de Arte de El Salvador (MARTE) albergó el COAFEST, descrito como el festival de moda thrift más ambicioso del país hasta la fecha, con más de 112 expositores y asistencia cercana a 800 personas
            </p>
            <p>
                Organizado por Vitrinnea, el festival combinó moda de segunda mano, música, arte y gastronomía a precios accesibles (desde $1), apostando por transformar el concepto de comercio de ropa usada en una experiencia lúdica, consciente y comunitaria
            </p>
            <p>
                Diego Pastore, director creativo de la iniciativa, expresó que el objetivo fue elevar la práctica del thrifting hacia una pedagogía cultural: “COAFEST significa ‘Coming of Age Festival’: es la madurez de una nueva etapa en cómo consumimos moda”
            </p>
            <h1><strong>Plataformas digitales que impulsan la moda circular</strong></h1>
            <p>
                Startup locales como Vitrinnea han liderado el impulso del mercado circular en el país, permitiendo vender y comprar ropa usada a través de una app que ya reporta miles de usuarios y transacciones mensuales. Estas plataformas también facilitan la recolección, fotografía, valoración y publicación de prendas en formato profesional, reduciendo los prejuicios sobre la calidad
            </p>
            <p>
                Asimismo, iniciativas como The Closet Sale, lideradas por creadoras de contenido digital, mantienen ferias itinerantes y pop‑ups donde el thrifting se combina con gastronomía, música y curaduría personal de closets, reforzando el sentido de comunidad joven y alternativa
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
    <div class="grid-language">
        <div class="language"><a href="../../Maqueta EN/noticia6.php">+ English</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>