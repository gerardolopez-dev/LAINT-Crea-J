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
    <link rel="stylesheet" href="../../CSS/noticia2.css">
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
                    <h1>Vintage Culture on the Rise: Culto Market Reaffirms Its Power in San Salvador’s Urban Scene</h1>
                </div>
                <div class="footer-new">
                    <h5>By <span>LAINT</span> May 24,2025,10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/Noticias/CultoMar.jpeg">
                </div>
            </div>
        </div>
    </header>
    <section class="parrafoNoticia">
        <div class="div-parra">
            <p>
               San Salvador, July 2025 — This past weekend, Plaza Presidente once again became the meeting point for sustainable fashion, urban art, and alternative youth, thanks to a new edition of Culto Market, the event that has established itself as the heart of the thrift movement in El Salvador.
            </p>
            <p>
                Early in the day, hundreds of people — mostly young lovers of vintage style and conscious consumption — gathered to explore more than 70 booths filled with carefully curated second-hand clothing, vinyl records, graphic art, handmade accessories, books, analog cameras, and unique treasures. All within an atmosphere that blended live music, performance, and local design.
            </p>
            <h1><strong>A Growing Community</strong></h1>
            <p>
                What began as a small initiative among thrifting enthusiasts has evolved into a solid and vibrant cultural movement. The July edition exceeded expectations in both attendance and vendor participation. According to organizers, this was one of the most successful versions of the event, both in visitor numbers and in the diverse, inclusive, and conscious environment that was created.
            </p>
            <p>
                “The goal has always been to create a space where fashion, art, and sustainability come together — but above all, community,” said Daniela Vásquez, one of the project’s founders. “We’re thrilled to see how Culto Market has become a space where people can express themselves freely, exchange ideas, and support national talent.”
            </p>
            <h1><strong>Fashion with Purpose</strong></h1>
            <p>
                One of the event’s main focuses continues to be promoting circular fashion and rejecting fast fashion. Every item that changes hands at Culto Market is an act of resistance against the disposable consumption model. Many booths offered not only vintage clothing, but also repurposed, recycled, or redesigned pieces — elevating the idea of “second-hand” to something creative and original.   
            </p>
            <p>
                “This isn’t just used clothing,” said Camilo Méndez, a vendor from the emerging store Trapo Real. “Every piece tells a story. Here, fashion doesn’t follow global trends — it creates identity from the local.”
            </p>
            <p>
                The Culto Market experience goes far beyond buying and selling. This edition featured picnic zones, live DJ sets, short film screenings, and a collaborative mural open to the public. There were also screen printing, embroidery, and upcycling workshops, with notable participation from young artists and emerging designers.
            </p>
            <p>
                The atmosphere remained lively throughout the day, with visitors enthusiastically moving from booth to booth, taking photos, chatting with creators, or simply enjoying the event’s aesthetic and laid-back vibe.            
            </p>
            <h1><strong>An Event with a Future</strong></h1>
            <p>
                As interest in conscious consumption and appreciation of national talent grows, Culto Market is becoming a benchmark not only in alternative fashion but also in El Salvador’s urban cultural transformation.
            </p>
            <p>
                Organizers have already announced plans for upcoming editions in the following months, aiming to expand to other departments in the country and strengthen the network of artists and entrepreneurs who bring the project to life.
            </p>
            <p>
                <strong>“Culto Market is no longer just a market; it’s a community, a movement, a celebration of everything we can be when we choose consciously”</strong>, concluded Daniela Vásquez at the end of the event.
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
                        <h5 class="autor"><strong>Autor:</strong> Created by LAINT team</h5>
                        <h3><a href="../Noticias/noticia4.php"><strong>Kardo and BMX</strong></a></h3>
                    </div>
                    <div class="contenedor-img">
                        <a href="../Noticias/noticia4.php"><img src="../../Media/Noticias/noticiaKardo.jpg"></a>
                    </div>
                </div>
                <hr color="grey" size="1">
                <div class="contenedor-noti-uno">
                    <div class="texto-noti">
                        <h5><strong>Topic: </strong>SubCultures</h5>
                        <h5 class="autor"><strong>Autor:</strong> Created by LAINT team</h5>
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
    <div class="grid-language">
        <div class="language"><a href="../../Maqueta/noticia2.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>