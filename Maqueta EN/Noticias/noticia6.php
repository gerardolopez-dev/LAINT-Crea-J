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
                <h1>Thrifting in El Salvador: conscious fashion, history and community converge in urban culture</h1>
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
<section class="parrafoNoticia">
    <div class="div-parra">
        <p>
            <strong>San Salvador, July 2025</strong> What was once seen as an economic alternative has now become an urban identity trend: the culture of thrifting—buying stylish second-hand clothing—has emerged in El Salvador as a form of conscious consumption, alternative aesthetics, and youth entrepreneurship.
        </p>
        <h1><strong>From stigma to curating as art</strong></h1>
        <p>
            In its early days, used clothing in the country was tied to stigma: it was seen as linked to poverty or even associated with deceased people. However, this perception has radically changed in recent years.
        </p>
        <p>
            According to a study by Garson & Shaw, El Salvador imported more than 35,000 tons of second-hand clothing in 2021—worth $62 million and about 25% of all clothing sold in the country—ranking it 23rd globally among importers of this type of garment.
        </p>
        <p>
            Today, projects like Ropa Chuca or Ultra Caótica identify their brand with the word "thrift," elevating the selection of unique pieces—each curated like a work of art—into an individual and aesthetic experience.
        </p>
        <div class="contenedor-foto">
            <img src="../../Media/Noticias/aMG_-Culto-Market03.jpg" alt="">
        </div>
        <h1><strong>Pioneering festival: COAFEST revolutionizes local thrift</strong></h1>
        <p>
            On October 13, 2024, the Museum of Art of El Salvador (MARTE) hosted COAFEST, described as the most ambitious thrift fashion festival in the country to date, with over 112 exhibitors and nearly 800 attendees.
        </p>
        <p>
            Organized by Vitrinnea, the festival combined second-hand fashion, music, art, and gastronomy at affordable prices (starting at $1), aiming to transform the concept of used clothing commerce into a playful, conscious, and community-based experience.
        </p>
        <p>
            Diego Pastore, creative director of the initiative, said the goal was to elevate the practice of thrifting into a cultural pedagogy: “COAFEST means ‘Coming of Age Festival’: it's the maturity of a new phase in how we consume fashion.”
        </p>
        <h1><strong>Digital platforms driving circular fashion</strong></h1>
        <p>
            Local startups like Vitrinnea have led the push for the circular market in the country, enabling the buying and selling of used clothing through an app that already reports thousands of users and monthly transactions. These platforms also facilitate the collection, photography, appraisal, and professional listing of garments, reducing prejudice about quality.
        </p>
        <p>
            Likewise, initiatives like The Closet Sale, led by digital content creators, continue to hold pop-up fairs and events where thrifting is mixed with food, music, and personal closet curating, reinforcing the sense of a young, alternative community.
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
                    <h3><a href="../Noticias/noticia1.php"><strong>Thousands will celebrate Skateboarding Day</strong></a></h3>
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
                    <h3><a href="../Noticias/noticia3.php"><strong>The latest from Nude Project</strong></a></h3>
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
        <div class="language"><a href="../../Maqueta/noticia6.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>