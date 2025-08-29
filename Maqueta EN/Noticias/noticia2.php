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
    <link rel="stylesheet" href="../../CSS/noticiaOtro.css">
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
        <hr class="separador">
        <h4 class="cambioColor">Change Theme</h4>
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
                    <h1>Vintage Culture on the Rise: Culto Market Reaffirms Its Power in San Salvador’s Urban Scene</h1>
                </div>
                <div class="footer-new">
                    <h5>By <span>LAINT</span> May 24, 2025, 10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/Noticias/CultoMar.jpeg">
                </div>
            </div>
        </div>
    </header>

    <!-- 🔹 Wrapped section + aside inside MAIN -->
    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                   San Salvador, July 2025 — This past weekend, Plaza Presidente once again became the meeting point for sustainable fashion, urban art, and alternative youth, thanks to a new edition of Culto Market, the event that has solidified itself as the heart of the thrift movement in El Salvador.
                </p>
                <p>
                   From early on, hundreds of people—mostly young fans of vintage style and conscious consumption—gathered to explore more than 70 stands filled with carefully curated secondhand clothing, vinyl records, graphic art, handmade accessories, books, analog cameras, and unique rarities. All of it surrounded by an atmosphere that blended live music, performance, and local design.
                </p>
                <h1><strong>A Growing Community</strong></h1>
                <p>
                    What began as a small initiative among thrifting enthusiasts has evolved into a solid and vibrant cultural movement. The July edition exceeded expectations in both attendance and exhibitor participation. According to the organizers, this was one of the most successful versions of the event, both in terms of the number of visitors and the diverse, inclusive, and conscious environment that was created.
                </p>
                <p>
                    “The goal has always been to create a space where fashion, art, and sustainability converge—but above all, community,” said Daniela Vásquez, one of the project’s founders. “We are excited to see how Culto Market has become a space where people can express themselves freely, exchange ideas, and support local talent.”
                </p>
                <h1><strong>Fashion with Awareness</strong></h1>
                <p>
                    One of the event’s main focuses continues to be promoting circular fashion and rejecting fast fashion. Every garment that changes hands at Culto Market represents an act of resistance against the disposable consumption model. Many of the booths offered not only vintage clothing, but also reworked, recycled, or redesigned pieces, elevating the concept of “secondhand” to a creative and original level.   
                </p>
                <p>
                    “This isn’t just used clothing,” said Camilo Méndez, exhibitor from the emerging store Trapo Real. “Each piece tells a story. Here, fashion doesn’t follow global trends—it creates identity from the local.”
                </p>
                <p>
                    The Culto Market experience goes far beyond buying and selling. In this edition, the event featured picnic areas, sets by local DJs, short film screenings, and a collaborative mural open to the public. There were also workshops on screen printing, embroidery, and upcycling, with outstanding participation from young emerging artists and designers.
                </p>
                <p>
                    The vibe stayed lively throughout the day, with visitors moving between stands enthusiastically—taking photos, chatting with creators, or simply enjoying the aesthetic and relaxed atmosphere of the event.
                </p>
                <h1><strong>An Event with a Future</strong></h1>
                <p>
                    As interest in conscious consumption and appreciation for national talent continues to grow, Culto Market is positioning itself not only as a reference for alternative fashion, but also as a driver of urban cultural transformation in El Salvador.
                </p>
                <p>
                    Organizers have already announced plans for new editions in the coming months, with the goal of expanding to other regions of the country and strengthening the network of artists and entrepreneurs that bring the project to life.
                </p>
                <p>
                    <strong>“Culto Market is no longer just a market; it’s a community, a movement, a celebration of everything we can be when we choose consciously,”</strong> concluded Daniela Vásquez at the event’s closing.
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
                    <h1>MORE OF THE SAME</h1>
                    <hr color="grey">
                </div>
                <div class="contenedor-notis">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Topic: </strong>Sports</h5>
                            <h5 class="autor"><strong>Author:</strong> Created by LAINT team</h5>
                            <h3><a href="../Noticias/noticia4.php"><strong>Kardo and BMX</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia4.php"><img src="../../Media/Noticias/noticiaKardo.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Topic: </strong>Subcultures</h5>
                            <h5 class="autor"><strong>Author:</strong> Created by LAINT team</h5>
                            <h3><a href="/Maqueta/Noticias/noticia6.php"><strong>Thrifting in El Salvador</strong></a></h3>
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
        <h2>&copy; 2025 LAINT Magazine. All rights reserved.</h2>
    </footer>

    <div class="grid-language">
        <div class="language"><a href="../../Maqueta/Noticias/noticia2.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>