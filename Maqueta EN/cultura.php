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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culture</title>
    <link rel="stylesheet" href="../CSS/cultura.css">
    <link rel="stylesheet" href="../CSS/language.css"> 
    <script src="../JS/animacionDeScroll.js"></script>
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/boton-theme.css">

</head>
<body>

    <nav>
        <ul class="nav-section nav-left">
            <li><a href="../Maqueta EN/index.php">Magazine</a></li>
            <li><a href="../Maqueta EN/deportes.php">Sports</a></li>
            <li><a href="../Maqueta EN/cultura.php">Culture</a></li>
            <li><a href="../Maqueta EN/contactos.php">Contact</a></li>
        </ul>

    <div class="logo">
        <a href="../Maqueta EN/index.php"><img src="../Media/mediaIndex/logo laint1.1.png" alt=""></a>
    </div>
        <ul class="nav-section nav-right">
            <li><a href="../Maqueta EN/sign.php" >Login</a></li>
            <li><button class="menu-button" id="openMenu">Account</button></li>
            <li><a href="../Maqueta EN/laintShop.php">Laint Shop</a></li>
        </ul>
    </nav>
    <div class="side-menu" id="sideMenu">
        <button class="close-btn" id="closeMenu">&times;</button>
        <img src="../Media/mediaIndex/iconoPerfil1.2.webp" class="Icono">
        <?php if ($sesion_activa): ?>
            <h1><?php echo htmlspecialchars($nombre_usuario); ?></h1>
            <h3><?php echo htmlspecialchars($usuario); ?></h3>
            <a href="../PHP/sesion/logoutEN.php">Log out</a>
        <?php else: ?>
            <h1>Guest</h1>
            <h3>You are not logged in</h3>
            <a href="../Maqueta EN/sign.php">Log in</a>
            <a href="../Maqueta EN/sign.php">Register</a>
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
            <div class="imagen1">
                <img src="../Media/MediaCultura/Imagen-cultura4.png" alt="Imagen de referencia">
                    <h1 class="texto-imagen" >Fashion culture in El Salvador</h1>
                <div class="footer-new">
                </div>
            </div>
           

            </div>
            <div class="contenedorLinea1">
                <div class="linea-horizontal"></div>
            </div>
        </div>
    </header>

<!--Principal de cultura-->

  <section class="container info autoshow">

    <h1 class="titulo-info">Clothing Culture in El Salvador: From the 2000s to the Present</h1>

    <div class="linea-separadora"></div>

    <div class="container info">
        <p>The evolution of clothing culture in El Salvador from the 2000s to the present reflects a fascinating transformation that combines tradition with modernity. In the early 2000s, Salvadoran clothing maintained a strong link to its traditional roots, with typical garments such as huipiles and enaguas present during important festivities and ceremonies.</p>
    </div>

    <div class="container info">
        <p>The period from 2005 to 2015 marked a significant transition in which streetwear style was established as "a cultural movement that expresses individuality, yet also connection with the community." This trend reached El Salvador mainly through the influence of hip-hop, skateboarding, and U.S. urban culture, especially embraced by young people in San Salvador and other main cities.</p>
    </div>

    <div contenedor-imagen>
        <img src="../Media/MediaCultura/Imagen cultura3.jpg" class="info ref"> 
        <div class="texto-hover"></div>

        <p class="texto_img">Reference image</p>
    </div>

    <div class="container info">
        <p>The 2010s saw the rise of more diverse urban subcultures, where streetwear became a form of personal and group expression. Streetwear drew "inspiration from various cultures and subcultures, resulting in a rich mix of styles," incorporating bold graphic elements, vibrant colors, and comfort as a core principle. This period also marked the emergence of small local ventures that began creating original designs inspired by Salvadoran identity but with a contemporary urban aesthetic.</p>
    </div>

    <div class="contenedor-img">
        <img src="../Media/MediaCultura/Imagen collage1.jpg" class="info-collage ">
        <img src="../Media/MediaCultura/Imagen cult1.jpg" class="info-collage ">
        <img src="../Media/MediaCultura/Imagen collage3.jpg" class="info-collage ">
    </div>

    <p class="texto_img">Reference images</p>

    <div class="linea-separadora"></div>

    <h1 class="titulo-info">Thrifting Phenomenon</h1> 

    <div class="linea-separadora"></div>

    <div class="container info">
        <p>The phenomenon of thrifting and flea markets experienced a remarkable rise starting in 2020, driven by both environmental awareness and the search for unique and affordable pieces. For many, thrifting became something that "involves a process of searching and immediacy when making a decision," turning into an exciting and sustainable shopping experience.</p>
    </div>

    <img src="../Media/MediaCultura/Imagen ref2.jpg" class="info ref">

    <p class="texto_img">Reference image</p>

    <div class="linea-separadora"></div>
    
    <h1 class="titulo-info">Related News</h1>
    
    <div class="linea-separadora"></div>
</section>


<!--FlipCards de Noticias-->

<div class="cards">
    <div class="card noticias">

        <a href="../Maqueta EN/culturaNoticia1.php">
        <div class="face front contenedor">
            <img src="../Media/MediaCultura/Imagen noticia cult2.jpg" alt="Fashion Institute in El Salvador">
            <h1>Fashion Institute in El Salvador</h1>
        </div>
        <div class="face back contenedor">
            <p>
                In January 2025, El Salvador inaugurated the International Fashion Design Institute Haute Couture by Palomeque.
            </p>

            <p class="noticia-link">See more...</p>

            <div class="linea-separadora"></div>
            <p class="texto_noticia">
                Author: Guille Masserbösch
            </p>
        </div>
        </a>

    </div>

    <div class="card noticias">

        <a href="../Maqueta EN/culturaNoticia2.php">
        <div class="face front contenedor">
            <img src="../Media/mediaCultura/Imagen noticia2.jpg" alt="Salvadoran designers">
            <h1>Salvadoran Designers Abroad</h1>
        </div>
        <div class="face back contenedor">
            <p>
                Designer Sofía Aparicio participated in the "Sunset Vibes" fashion show in Tegucigalpa, showcasing her brand APRIL alongside international labels. The event was supported by the Salvadoran embassy and the SMODA strategy.
            </p>

            <p class="noticia-link">See more...</p>

            <div class="linea-separadora"></div>
            <p class="texto_noticia">
                Author: Jhoel Díaz
            </p>
        </div>
        </a>

    </div>

    <div class="card noticias">

        <a href="../Maqueta EN/culturaNoticia3.php">
        <div class="face front contenedor">
            <img src="../Media/mediaCultura/Imagen noticia cult3.jpg" alt="SMODA Runway Summer 2025">
            <h1>SMODA Runway Summer 2025 in El Sunzal</h1>
        </div>
        <div class="face back contenedor">
            <p>
                On April 26, the SMODA Summer 2025 runway show took place at El Sunzal beach. An event that combined fashion, art, and surf during the ISA World Longboard Championship. Ten micro and small enterprises showcased collections blending Salvadoran tradition with contemporary style.
            </p>
            
            <p class="noticia-link">See more...</p>

            <div class="linea-separadora"></div>
            <p class="texto_noticia">
                Author: Armando Flores
            </p>
        </div>
        </a>

    </div>
</div>

<div class="grid-language">
    <div class="language"><a href="../Maqueta/cultura.php">+ Spanish</a></div>
</div>
    <div class="footer">
        <hr>
        <h2>Laint®</h2>
        <p>The images used in this project are for educational purposes only and not intended for profit</p>
    </div>
    <div class="overlay" id="overlay"></div>

</body>
<script src="../JS/menuDesplegable.js"></script>
<script src="../JS/boton.js"></script>
</html>