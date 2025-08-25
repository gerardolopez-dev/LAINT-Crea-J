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
    <title>News</title>
    <link rel="stylesheet" href="../../CSS/noticia.css">
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
                    <h1>Ronaldinho and Nude Project Surprise with “Lil Kid, Big Dreams”: Urban Fashion with a Football Soul</h1>
                </div>
                <div class="footer-new">
                    <h5>By <span>LAINT</span> May 24, 2025, 10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/Noticias/noticiaNudeFoto.jpg">
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                    <strong>Barcelona, July 2025</strong> — In an unexpected move that has captured the attention of both the fashion and sports worlds, Spanish brand Nude Project has launched its latest capsule collection: “Lil Kid, Big Dreams,” a collaboration with Brazilian football icon Ronaldinho. The release not only strengthens the brand’s connection to urban culture and personal storytelling but also marks a new milestone in its rise as a global reference for purpose-driven fashion.
                </p>
                <h1><strong>A Bridge Between Dreams, Football, and the Streets</strong></h1>
                <p>
                    The collection, made up of 30 limited pieces including t-shirts, hoodies, and accessories, evokes Ronaldinho’s childhood in Porto Alegre, his passion for football, and the memories that shaped his path to becoming a legend. Each garment tells a chapter of his journey, blending family photos of the former footballer with graphic elements inspired by Brazilian carnival and street culture.
                </p>
                <p>
                    “This collection is about my childhood dreams, when I played barefoot on the street with a rag ball,” Ronaldinho said during the launch at Nude Project’s flagship store in Barcelona. “It’s clothing with history, with soul, with a message.”
                </p>
                <h1><strong>The Nude Style, More Alive Than Ever</strong></h1>
                <p>
                    True to its essence, Nude Project keeps its minimalist, urban, and authentic style in this capsule but elevates it with emotional details that resonate with its community of rebellious, creative, and dream-driven youth. The aesthetic mixes warm colors, retro typography, and personal photos of the Brazilian star, reinforcing the narrative of overcoming adversity.
                </p>
                <p>
                    In line with its tradition of exclusive drops, the pieces were released in limited quantities both online and in physical stores, fostering the sense of community and belonging that has made the brand a phenomenon in Spain and beyond.
                </p>
                <div class="contenedor-foto">
                    <img src="../../Media/Noticias/nudeRonal.jpg" alt="">
                </div>
                <h1><strong>More Than Clothing, a Philosophy</strong></h1>
                <p>
                    Nude Project has built its own universe around the idea of being yourself without filters. This collection is no exception. Under the motto “Lil Kid, Big Dreams,” the collaboration reinforces the message that <strong>dreams are born from the simplest places</strong>, and that talent, when nurtured with authenticity, can change the world.
                </p>
                <p>
                    “For us, Ronaldinho is not just an athlete; he is a symbol of creative freedom. His way of playing football was art, and that deeply connects with what we do at Nude,” explained founders Bruno Casanovas and Alex Benlloch.
                </p>
                <h1><strong>Impact and Global Expansion</strong></h1>
                <p>
                    The launch has had a major impact on social media, with thousands of fans sharing photos of their pieces and inspirational messages under the hashtag #LilKidBigDreams. The limited edition sold out in less than 48 hours on several platforms, confirming the strength of the Nude Project community and its ability to fuse fashion, culture, and emotion.
                </p>
                <p>
                    After closing 2024 with €26 million in sales, this collaboration consolidates the brand’s upward trajectory and reinforces its international expansion plans, with upcoming store openings in key cities across Europe and Latin America.
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
                            <h5><strong>Topic: </strong>Subcultures</h5>
                            <h5 class="autor"><strong>Author:</strong> Created by LAINT team</h5>
                            <h3><a href="../Noticias/noticia2.php"><strong>Vintage Culture on the Rise</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia2.php"><img src="../../Media/Noticias/CultoMar.jpeg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Topic: </strong>Subcultures</h5>
                            <h5 class="autor"><strong>Author:</strong> Created by LAINT team</h5>
                            <h3><a href="../Noticias/noticia5.php"><strong>Art at Cuscatlán Park</strong></a></h3>
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
        <h2>&copy; 2025 LAINT Magazine. All rights reserved.</h2>
    </footer>

    <div class="grid-language">
        <div class="language"><a href="../../Maqueta/Noticias/noticia3.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>