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
    <title>Noticia Cuatro</title>
    <link rel="stylesheet" href="../../CSS/noticia4.css">
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
                <a href="../index.php">Current Events</a>
            </div>
            <div class="texto-noticia">
                <h1>Young Salvadorans Make Their Mark on the Global Urban Culture Scene with Kardo 2025</h1>
            </div>
            <div class="footer-new">
                <h5>By <span>LAINT</span> May 24, 2025, 10:21am</h5>
            </div>
        </div>
        <div class="contenedor-imagen">
            <div class="imagen1">
                <img src="../../Media/Noticias/noticiaKardo.jpg">
            </div>
        </div>
    </div>
</header>
<section class="parrafoNoticia">
    <div class="div-parra">
        <p>
            <strong>San Salvador, July 2025</strong> El Salvador has started gaining recognition on the global circuit of urban disciplines through its participation in Kardo 8, an international competition celebrating emerging talent in areas like freestyle, BMX, skateboarding, graffiti, parkour, breakdance, and audiovisual production.
        </p>
        
        <p>
            This year, more than 40 young Salvadorans took part in the qualifying process to represent the country in the grand final to be held in Stavropol, Russia, in August. This participation marks a milestone for national urban culture, providing a space for visibility and validation of artistic and sports expressions that have historically been marginalized.
        </p>
        <div class="contenedor-p">
            <p>
                “These types of competitions allow young people from often overlooked communities to find a platform to showcase their talent—and most importantly—feel part of an international community,” said Hugo Rubio, cultural manager and official Kardo representative in El Salvador.
            </p>
        </div>
        <p>
            The qualification dynamic is based on sending videos of up to one minute via the official site <a href="https://kardoaward.com/">kardoaward.com</a>, where an international jury evaluates creativity, technique, and performance. The initiative has been well received on social media, where accounts like @kardoelsalvador have created a sense of community and guidance for local participants.
        </p>
        <p>
            Additionally, it has been announced that El Salvador could become a host site for future in-person qualifiers, increasing access for youth without technological resources.
        </p>
        <div class="contenedor-foto">
            <img src="../../Media/Noticias/kardoimg.jpg" alt="">
        </div>
        <h1><strong>More Than a Competition: A Cultural Window</strong></h1>
        <p>
            Kardo is not just a tournament; it's a global celebration of contemporary urban cultures. Its approach goes beyond extreme sports, welcoming graffiti artists, beatmakers, DJs, filmmakers, and rappers. El Salvador's inclusion in this platform is a crucial opportunity to break stigmas and showcase the richness of local urban expressions.
        </p>
        <p>
            Salvadoran finalists will have the chance to compete against more than 40 countries, connecting with thousands of young artists in an experience that blends competition, training, and cultural exchange.
        </p>
        <h1><strong>A Movement That’s Just Beginning</strong></h1>
        <p>
            The positive response has inspired local organizers to expand the initiative through workshops, internal competitions, and partnerships with institutions that promote youth art and sports.
        </p>
        <p>
            “We don’t want this to be an isolated event, but a door that remains open so that Salvadoran urban talent can reach where it belongs: the world,” Rubio added.
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
                    <h3><a href="../Noticias/noticia1.php"><strong>Thousands Celebrate Go Skateboarding Day</strong></a></h3>
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
    <div class="grid-language">
        <div class="language"><a href="../../Maqueta/noticia4.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>