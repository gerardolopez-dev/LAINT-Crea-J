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
    <title>Noticia Tres</title>
    <link rel="stylesheet" href="../../CSS/noticia3.css">
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
                    <h1>Ronaldinho y Nude Project sorprenden con “Lil Kid, Big Dreams”: moda urbana con alma futbolera</h1>
                </div>
                <div class="footer-new">
                    <h5>Por <span>LAINT</span> Mayo 24,2025,10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/Noticias/noticiaNudeFoto.jpg">
                </div>
            </div>
        </div>
    </header>
    <section class="parrafoNoticia">
        <div class="div-parra">
            <p>
                <strong>Barcelona, julio de 2025</strong> En una jugada inesperada que ha captado la atención del mundo de la moda y el deporte, la marca española Nude Project lanzó su más reciente colección cápsula: “Lil Kid, Big Dreams”, una colaboración con el ícono brasileño del fútbol, Ronaldinho. La propuesta no solo refuerza la conexión de la marca con la cultura urbana y el storytelling personal, sino que marca un nuevo hito en su crecimiento como referente global de moda con propósito.
            </p>
            <h1><strong>Un puente entre sueños, fútbol y calle</strong></h1>
            <p>
                La colección, compuesta por 30 piezas limitadas entre camisetas, sudaderas y accesorios, evoca la infancia de Ronaldinho en Porto Alegre, su pasión por el fútbol y los recuerdos que marcaron su camino hacia la leyenda. Cada prenda narra una etapa, combinando imágenes familiares del exfutbolista con elementos gráficos inspirados en el carnaval brasileño y la cultura callejera.
            </p>
            <p>
                “Esta colección habla de mis sueños de niño, cuando jugaba descalzo en la calle con una pelota de trapo”, comentó Ronaldinho durante la presentación en la tienda insignia de Nude Project en Barcelona. “Es ropa con historia, con alma, con mensaje”.
            </p>
            <h1><strong>El estilo Nude, más vivo que nunca</strong></h1>
            <p>
                Fiel a su esencia, Nude Project mantiene en esta cápsula su estilo minimalista, urbano y auténtico, pero lo eleva con detalles emocionales que resuenan con su comunidad de jóvenes inconformes, creativos y soñadores. La estética combina colores cálidos, tipografías retro y fotografías personales del astro brasileño que refuerzan la narrativa de superación.
            </p>
            <p>
                Además, siguiendo su tradición de drops exclusivos, las piezas se han distribuido en cantidades limitadas tanto online como en tiendas físicas, fomentando el sentido de comunidad y pertenencia que ha hecho de la marca un fenómeno en España y más allá.
            </p>
            <div class="contenedor-foto">
                <img src="../../Media/Noticias/nudeRonal.jpg" alt="">
            </div>
            <h1><strong>Más que ropa, una filosofía</strong></h1>
            <p>
                Nude Project ha construido un universo propio en torno a la idea de ser uno mismo sin filtros. Esta colección no es la excepción. Bajo el lema “Lil Kid, Big Dreams”, la colaboración refuerza el mensaje de que <strong>los sueños nacen desde lo más simple</strong>, y que el talento, cuando se cultiva con autenticidad, puede cambiar el mundo.
            </p>
            <p>
                “Para nosotros, Ronaldinho no es solo un deportista; es un símbolo de libertad creativa. Su forma de jugar al fútbol fue arte, y eso conecta profundamente con lo que hacemos en Nude”, explicaron los fundadores, Bruno Casanovas y Alex Benlloch.
            </p>
            <h1><strong>Impacto y expansión global</strong></h1>
            <p>
                El lanzamiento ha tenido un fuerte impacto en redes sociales, con miles de fans compartiendo fotos de sus prendas y mensajes inspiradores bajo el hashtag #LilKidBigDreams. La edición limitada se agotó en menos de 48 horas en varias plataformas, confirmando el poder de la comunidad Nude Project y su capacidad para fusionar moda, cultura y emoción.
            </p>
            <p>
                Tras cerrar 2024 con 26 millones de euros en ventas, esta colaboración consolida el camino ascendente de la marca y refuerza su plan de internacionalización, con próximas aperturas en ciudades clave de Europa y Latinoamérica.
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
                        <h5><strong>Tema: </strong>SubCulturas</h5>
                        <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                        <h3><a href="../Noticias/noticia2.php"><strong>Cultura vintage en auge</strong></a></h3>
                    </div>
                    <div class="contenedor-img">
                        <a href="../Noticias/noticia2.php"><img src="../../Media/Noticias/CultoMar.jpeg"></a>
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
    <div class="grid-language">
        <div class="language"><a href="../../Maqueta EN/noticia3.php">+ English</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>