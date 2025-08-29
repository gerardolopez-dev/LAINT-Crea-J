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
    <title>Noticia Dos</title>
    <link rel="stylesheet" href="../../CSS/noticiaOtro.css">
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
                    <h1>Cultura vintage en auge: Culto Market reafirma su poder en la escena urbana de San Salvador</h1>
                </div>
                <div class="footer-new">
                    <h5>Por <span>LAINT</span> Mayo 24,2025,10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/Noticias/CultoMar.jpeg">
                </div>
            </div>
        </div>
    </header>

    <!-- 🔹 Encerramos sección + aside dentro de MAIN -->
    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                   San Salvador, julio de 2025 — El pasado fin de semana, la Plaza Presidente se convirtió nuevamente en el punto de encuentro de la moda sostenible, el arte urbano y la juventud alternativa, gracias a una nueva edición de Culto Market, el evento que ha sabido consolidarse como el corazón del movimiento thrift en El Salvador.
                </p>
                <p>
                   Desde temprano, cientos de personas —en su mayoría jóvenes amantes del estilo vintage y el consumo responsable— se dieron cita para recorrer los más de 70 stands repletos de prendas de segunda mano cuidadosamente seleccionadas, vinilos, arte gráfico, accesorios hechos a mano, libros, cámaras análogas y rarezas únicas. Todo acompañado de una atmósfera que fusionaba música en vivo, performance y diseño local.
                </p>
                <h1><strong>Una comunidad que crece</strong></h1>
                <p>
                    Lo que comenzó como una iniciativa pequeña entre entusiastas del “thrifting” ha evolucionado en un movimiento cultural sólido y vibrante. La edición de julio superó las expectativas en asistencia y participación de expositores. Según los organizadores, esta fue una de las versiones más exitosas del evento, tanto por el número de visitantes como por el ambiente diverso, inclusivo y consciente que logró generarse.
                </p>
                <p>
                    “El objetivo siempre ha sido crear un espacio donde converjan moda, arte y sostenibilidad, pero sobre todo comunidad”, expresó Daniela Vásquez, una de las fundadoras del proyecto. “Nos emociona ver cómo Culto Market se ha convertido en un espacio donde las personas pueden expresarse libremente, intercambiar ideas y apoyar el talento nacional”.
                </p>
                <h1><strong>Moda con conciencia</strong></h1>
                <p>
                    Uno de los ejes principales del evento continúa siendo la promoción de la moda circular y el rechazo a la fast fashion. Cada prenda que cambia de manos en Culto Market representa un acto de resistencia frente al modelo de consumo desechable. Muchos de los puestos no solo ofrecían ropa vintage, sino también piezas intervenidas, recicladas o rediseñadas, elevando el concepto de “segunda mano” a un nivel creativo y original.   
                </p>
                <p>
                    “Esto no es solo ropa usada”, comentaba Camilo Méndez, expositor de la tienda emergente Trapo Real. “Cada pieza cuenta una historia. Aquí la moda no sigue tendencias globales, sino que crea identidad desde lo local”.
                </p>
                <p>
                    La experiencia Culto Market va mucho más allá de la compra-venta. En esta edición, el evento contó con zonas de picnic, presentaciones de DJs locales, proyecciones de cortos y un mural colaborativo abierto al público. También hubo talleres de serigrafía, bordado y upcycling, con una participación destacada de jóvenes artistas y diseñadores emergentes.
                </p>
                <p>
                    El ambiente se mantuvo animado durante todo el día, con visitantes que se desplazaban entre los puestos con entusiasmo, sacando fotos, conversando con los creadores, o simplemente disfrutando del ambiente estético y relajado del evento.
                </p>
                <h1><strong>Un evento con futuro</strong></h1>
                <p>
                    A medida que crece el interés por el consumo responsable y la revalorización del talento nacional, Culto Market se posiciona como un referente no solo de la moda alternativa, sino también de la transformación cultural urbana en El Salvador.
                </p>
                <p>
                    Los organizadores ya anunciaron que planean nuevas ediciones para los próximos meses, con miras a expandirse a otros departamentos del país y fortalecer la red de artistas y emprendedores que le dan vida al proyecto.
                </p>
                <p>
                    <strong>“Culto Market ya no es solo un mercado; es una comunidad, un movimiento, una celebración de todo lo que podemos ser cuando elegimos con consciencia”</strong>, concluyó Daniela Vásquez al cierre del evento.
                </p>
                <div class="video">
                    <h1>
                        <strong>
                            VIDEOS BY LAINT
                        </strong>
                    </h1>
                </div>
                <div class="contenedor-video">
                    <video width="640" height="360" controls>
                        <source src="../../Media/Noticias/WhatsApp Video 2025-07-20 at 7.32.11 PM.mp4" type="video/mp4">
                    </video>
                </div>
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
                            <h3><a href="../Noticias/noticia4.php"><strong>Kardo y el BMX</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia4.php"><img src="../../Media/Noticias/noticiaKardo.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Tema: </strong>SubCulturas</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="/Maqueta/Noticias/noticia6.php"><strong>Thrifting en El Salvador</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia6.php"><img src="../../Media/Noticias/ropaChucaPortada.jpeg"></a>
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
        <div class="language"><a href="../../Maqueta EN/Noticias/noticia2.php">+ English</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>