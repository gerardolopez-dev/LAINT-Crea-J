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
    <title>Noticia Uno</title>
    <link rel="stylesheet" href="../../CSS/noticia1.css">
    <link rel="stylesheet" href="../../CSS/boton-theme.css">
    <link rel="stylesheet" href="../../CSS/language.css"> 
    <link rel="shortcut icon" href="../../Media/favicon.ico" type="image/x-icon">
</head>
<body>
    <nav>
        <ul class="nav-section nav-left">
            <li><a href="../index.php">Magazine</a></li>
            <li><a href="../deportes.php">Sports</a></li>
            <li><a href="../cultura.php">Culture</a></li>
            <li><a href="../contactos.php">Contact</a></li>
        </ul>

    <div class="logo">
        <a href="../../Maqueta EN/index.php"><img src="../../Media/mediaIndex/logo laint1.1.png" alt=""></a>
    </div>
        <ul class="nav-section nav-right">
            <li><a href="../sign.php" >Login</a></li>
            <li><button class="menu-button" id="openMenu">Account</button></li>
            <li><a href="../laintShop.php">Laint Shop</a></li>
        </ul>
    </nav>
    <div class="side-menu" id="sideMenu">
        <button class="close-btn" id="closeMenu">&times;</button>
        <img src="../../Media/mediaIndex/iconoPerfil1.2.webp" class="Icono">
        <?php if ($sesion_activa): ?>
            <h1><?php echo htmlspecialchars($nombre_usuario); ?></h1>
            <h3><?php echo htmlspecialchars($usuario); ?></h3>
            <a href="../../PHP/sesion/logoutEN.php">Log out</a>
        <?php else: ?>
            <h1>Guest</h1>
            <h3>You are not logged in</h3>
            <a href="../sign.php">Log in</a>
            <a href="../sign.php">Register</a>
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
                    <a href="../index.php">News</a>
                </div>
                <div class="texto-noticia">
                    <h1>Thousands to Celebrate Skateboarding Day with the Famous GoSkateDay Event Held at Masferrer Roundabout</h1>
                </div>
                <div class="footer-new">
                    <h5>By <span>LAINT</span> May 24,2025,10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/mediaIndex/GoSkate.jpg">
                </div>
            </div>
        </div>
    </header>
    <section class="parrafoNoticia">
        <div class="div-parra">
            <p>
                San Salvador, June 21, 2025 — The streets of the capital were filled with energy, passion, and urban culture this Saturday with the celebration of Go Skate Day 2025, an event that brought together
                thousands of Salvadoran skaters in a day that blended sport, art, and community.
            </p>
            <p>
                From early morning, the atmosphere started to heat up at the Masferrer Roundabout, the starting point for the iconic downhill ride that took participants through Paseo General Escalón all the way to El Salvador del Mundo Plaza. Along the route, skaters of all ages showcased their talent on the board, with tricks, speed, and style that captured the attention of passersby and spectators.
            <p>
                The event, organized by local collectives and supported by the skateboarding community, brought together around 5,000 people, including skaters, families, and attendees. In addition to the main ride, there were trick contests, skateboard raffles, and activities that encouraged connection and exchange across generations of riders. 
            </p>
            <p>
                “It’s the first time I completed the entire downhill and it was an incredible experience,” said Andrés, a young skater from Soyapango. “These kinds of spaces allow us to express ourselves and feel like part of something bigger.”
            </p>
            <p>
                Go Skate Day, celebrated worldwide every June 21, aims to highlight skateboarding as a sport, a lifestyle, and a tool for social transformation. In El Salvador, the date has gained momentum in recent years, becoming a symbol of resistance and creativity for urban youth.
            </p>
            <p>
                Collectives from Santa Ana, San Miguel, and La Libertad also announced similar activities during the weekend, strengthening the nationwide skateboarding network. On social media, the event trended under hashtags like #GoSkateDay2025SV, where participants shared photos and videos of their rides.
            </p>
            <p>
                From the Ministry of Culture and the capital’s city hall, the importance of supporting such initiatives was emphasized, and the commitment to enabling more public spaces for safe skateboarding practice was reaffirmed.
            </p>
            <p>
                With this vibrant day, Go Skate Day 2025 not only celebrated the love for skateboarding but also reaffirmed the value of urban culture as a fundamental part of El Salvador’s social fabric.
            </p>
        </div>
    </section>
    <aside class="masDeLoMismo">
        <div class="contenedorMain">
            <div class="contenedor-titulo">
                <h1>MORE OF THE SAME</h1>
                <hr color="grey">
            </div>
            <div class="contenedor-notis">
                <div class="contenedor-noti-uno">
                    <div class="texto-noti">
                        <h5><strong>Topic: </strong>Fashion</h5>
                        <h5 class="autor"><strong>Autor:</strong> Created by LAINT team</h5>
                        <h3><a href="../Noticias/noticia3.php"><strong>Nude Project’s Latest Drop</strong></a></h3>
                    </div>
                    <div class="contenedor-img">
                        <a href="../Noticias/noticia3.php"><img src="../../Media/Noticias/noticiaNudeFoto.jpg"></a>
                    </div>
                </div>
                <hr color="grey" size="1">
                <div class="contenedor-noti-uno">
                    <div class="texto-noti">
                        <h5><strong>Topic: </strong>Subcultures</h5>
                        <h5 class="autor"><strong>Autor:</strong> Created by LAINT team</h5>
                        <h3><a href="../Noticias/noticia5.php"><strong>Art in Cuscatlán Park</strong></a></h3>
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
        <div class="language"><a href="../../Maqueta/noticia1.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>