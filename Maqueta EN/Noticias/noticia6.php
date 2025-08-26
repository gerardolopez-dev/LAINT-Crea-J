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
                    <h1>Thrifting in El Salvador: conscious fashion, history, and community shaping urban culture</h1>
                </div>
                <div class="footer-new">
                    <h5>By <span>LAINT</span> May 24, 2025, 10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/Noticias/ropaChucaPortada.jpeg">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                    <strong>San Salvador, July 2025 </strong> What just a few years ago was seen as an affordable option has now turned into a marker of urban identity: thrifting —buying stylish secondhand clothing— has emerged in El Salvador as a form of conscious consumption, alternative aesthetics, and a boost for youth entrepreneurship.
                </p>
                <h1><strong>From stigma to curation as art</strong></h1>
                <p>
                    In its early days, secondhand clothing in the country carried stigma: it was associated with poverty or even tied to the belongings of the deceased. But this perception has radically shifted in recent years.
                </p>
                <p>
                    According to a Garson & Shaw study, El Salvador imported more than 35,000 tons of secondhand clothing in 2021 —worth $62 million and making up nearly 25% of all clothing sold in the country— ranking 23rd worldwide as an importer of pre-owned garments.
                </p>
                <p>
                    Today, projects like <i>Ropa Chuca</i> and <i>Ultra Caótica</i> embrace the word "thrift," turning the selection of unique pieces —each curated like a work of art— into an aesthetic and personal experience.
                </p>
                <div class="contenedor-foto">
                    <img src="../../Media/Noticias/aMG_-Culto-Market03.jpg" alt="">
                </div>
                <h1><strong>Pioneering festival: COAFEST revolutionizes local thrift</strong></h1>
                <p>
                    On October 13, 2024, the Museum of Art of El Salvador (MARTE) hosted COAFEST, described as the country’s most ambitious thrift fashion festival to date, with more than 112 exhibitors and nearly 800 attendees.
                </p>
                <p>
                    Organized by Vitrinnea, the festival mixed secondhand fashion, music, art, and food at accessible prices (starting at just $1), seeking to transform the idea of buying used clothes into a playful, conscious, and community-driven experience.
                </p>
                <p>
                    Diego Pastore, the creative director behind the initiative, explained that the goal was to elevate thrifting into cultural pedagogy: “COAFEST means ‘Coming of Age Festival’: it marks the maturity of a new stage in how we consume fashion.”
                </p>
                <h1><strong>Digital platforms driving circular fashion</strong></h1>
                <p>
                    Local startups like Vitrinnea are leading the way in boosting the circular market in the country, enabling people to buy and sell used clothing through an app that already reports thousands of users and monthly transactions. These platforms also manage collection, photography, pricing, and publishing of garments in a professional format, helping reduce prejudices about quality.
                </p>
                <p>
                    Meanwhile, initiatives like <i>The Closet Sale</i>, led by digital creators, continue to host pop-ups and traveling fairs where thrifting is combined with food, music, and personal closet curation —strengthening a sense of young, alternative community.
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
                            <h5><strong>Topic: </strong>Sports</h5>
                            <h5 class="autor"><strong>Author:</strong> Created by LAINT team</h5>
                            <h3><a href="../Noticias/noticia1.html"><strong>Thousands to Celebrate Skateboarding Day</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia1.php"><img src="../../Media/mediaIndex/GoSkate.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Topic: </strong>Fashion</h5>
                            <h5 class="autor"><strong>Author:</strong> Created by LAINT team</h5>
                            <h3><a href="../Noticias/noticia3.php"><strong>The Latest from Nude Project</strong></a></h3>
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
        <h2>&copy; 2025 LAINT Magazine. All rights reserved.</h2>
    </footer>
    <div class="grid-language">
        <div class="language"><a href="../../Maqueta/Noticias/noticia6.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>