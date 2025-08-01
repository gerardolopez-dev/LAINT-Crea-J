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
    <title>Cultura</title>
    <link rel="stylesheet" href="../CSS/cultura.css">
    <link rel="stylesheet" href="../CSS/language.css"> 
    <script src="../JS/animacionDeScroll.js"></script>
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/boton-theme.css">

</head>
<body>

    <nav>
        <ul class="nav-section nav-left">
            <li><a href="../Maqueta/index.php">Magazine</a></li>
            <li><a href="../Maqueta/deportes.php">Deporte</a></li>
            <li><a href="../Maqueta/cultura.php">Cultura</a></li>
            <li><a href="../Maqueta/contactos.php">Contacto</a></li>
        </ul>

    <div class="logo">
        <a href="../Maqueta/index.php"><img src="../Media/mediaIndex/logo laint1.1.png" alt=""></a>
    </div>
        <ul class="nav-section nav-right">
            <li><a href="../Maqueta/sign.php" >Acceder</a></li>
            <li><button class="menu-button" id="openMenu">Cuenta</button></li>
            <li><a href="../Maqueta/laintShop.php">Laint Shop</a></li>
        </ul>
    </nav>
    <div class="side-menu" id="sideMenu">
        <button class="close-btn" id="closeMenu">&times;</button>
        <img src="../Media/mediaIndex/iconoPerfil1.2.webp" class="Icono">
        <?php if ($sesion_activa): ?>
            <h1><?php echo htmlspecialchars($nombre_usuario); ?></h1>
            <h3><?php echo htmlspecialchars($usuario); ?></h3>
            <a href="../PHP/sesion/logout.php">Cerrar sesión</a>
        <?php else: ?>
            <h1>Invitado</h1>
            <h3>No has iniciado sesión</h3>
            <a href="../Maqueta/sign.php">Iniciar sesión</a>
            <a href="../Maqueta/sign.php">Registrarse</a>
        <?php endif; ?>
        <div id="contenedor-tema">
            <div class="toggle">
            </div>
        </div>
    </div>

    <header>
        <div class="contenedor1">
            <div class="imagen1">
                <img src="../Media/MediaCultura/Imagen-cultura4.png" alt="Imagen de referencia">
                    <h1 class="texto-imagen" >Cultura de vestimenta en El Salvador</h1>
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

         <h1 class="titulo-info">Cultura de Vestimenta en El Salvador: De los 2000s a la Actualidad</h1>

        <div class="linea-separadora"></div>

        <div class="container info">
            <p>La evolución de la cultura de vestimenta en El Salvador desde los años 2000 hasta la actualidad refleja una fascinante transformación que combina tradición con modernidad. A principios de los 2000, la vestimenta salvadoreña mantenía un fuerte vínculo con sus raíces tradicionales, con los trajes típicos como huipiles y enaguas presentes en festividades y ceremonias importantes.</p>
        </div>

        <div class="container info">
            <p>El periodo de 2005 a 2015 marcó una etapa de transición significativa en la que el estilo streetwear se estableció como "un movimiento cultural que expresa individualidad, pero a la vez conexión con la comunidad". Esta tendencia llegó a El Salvador principalmente a través de la influencia del hip-hop, el skateboarding y la cultura urbana estadounidense, adoptada especialmente por jóvenes en San Salvador y otras ciudades principales.</p>
        </div>
        
        <div contenedor-imagen>
        <img src="../Media/MediaCultura/Imagen cultura3.jpg" class="info ref"> 
        <div class="texto-hover"></div>

                <p class="texto_img">Imagen de referencia</p>
        </div>


        <div class="container info">
            <p>La década de 2010 vio el florecimiento de subculturas urbanas más diversas, donde el streetwear se consolidó como una forma de expresión personal y grupal. El streetwear tomó "inspiración de diversas culturas y subculturas, lo que resultó en una rica mezcla de estilos", incorporando elementos gráficos audaces, colores vibrantes y la comodidad como principio fundamental. Esta época también marcó el surgimiento de pequeños emprendimientos locales que comenzaron a crear diseños propios inspirados en la identidad salvadoreña pero con estética urbana contemporánea.</p>
        </div>

        <div class="contenedor-img">
            <img src="../Media/MediaCultura/Imagen collage1.jpg" class="info-collage ">

            <img src="../Media/MediaCultura/Imagen cult1.jpg" class="info-collage ">

            <img src="../Media/MediaCultura/Imagen collage3.jpg" class="info-collage ">
        </div>

        
        <p class="texto_img">Imagenes de referencia</p>

        <div class="linea-separadora"></div>

        <h1 class="titulo-info">Fenomeno de thrifting</h1> 

        <div class="linea-separadora"></div>

        <div class="container info">
            <p>El fenómeno del thrifting y los flea markets experimentó un auge notable a partir de 2020, impulsado tanto por la conciencia ambiental como por la búsqueda de piezas únicas y asequibles. Para muchos, el thrifting se convirtió en algo que "involucra un proceso de búsqueda e inmediatez a la hora de tomar la decisión", transformándose en una experiencia de compra emocionante y sostenible.</p>
        </div>

        <img src="../Media/MediaCultura/Imagen ref2.jpg" class="info ref">

        <p class="texto_img">Imagen de referencia</p>

        <div class="linea-separadora"></div>
        
        <h1 class="titulo-info">Noticias relacionadas</h1>
        
        <div class="linea-separadora"></div>
    </section>

         
<!--FlipCards de Noticias-->

    <div class="cards">
        <div class="card noticias">

            <a href="../Maqueta/culturaNoticia1.php">
            <div class="face front contenedor">
                <img src="../Media/MediaCultura/Imagen noticia cult2.jpg" alt="Instituto de moda en El Salvador">
                <h1>Instituto de moda en El Salvador</h1>
            </div>
            <div class="face back contenedor">
                <p>
                    El Salvador inauguró en enero de 2025 el Instituto Internacional de Diseño de Modas Haute Couture by Palomeque
                </p>

                <p class="noticia-link">Ver mas...</p>

                <div class="linea-separadora"></div>
                <p class="texto_noticia">
                    Autor: Guille Masserbösch
                </p>
            </div>
            </a>

        </div>

        <div class="card noticias">

            <a href="../Maqueta/culturaNoticia2.php">
            <div class="face front contenedor">
                <img src="../Media/mediaCultura/Imagen noticia2.jpg" alt="Diseñadoras salvadoreñas">
                <h1>Diseñadoras salvadoreñas en el exterior</h1>
            </div>
            <div class="face back contenedor">
                <p>
                    La diseñadora Sofía Aparicio participó en el desfile "Sunset Vibes" en Tegucigalpa, mostrando su marca APRIL junto a firmas internacionales. El evento fue apoyado por la embajada salvadoreña y la estrategia SMODA 
                </p>

                <p class="noticia-link">Ver mas...</p>

                <div class="linea-separadora"></div>
                <p class="texto_noticia">
                    Autor: Jhoel Díaz
                </p>
            </div>
            </a>

        </div>

        <div class="card noticias">

            <a href="../Maqueta/culturaNoticia3.php">
            <div class="face front contenedor">
                <img src="../Media/mediaCultura/Imagen noticia cult3.jpg" alt="Pasarela SMODA Verano 2025">
                <h1>Pasarela SMODA Verano 2025 en El Sunzal</h1>
            </div>
            <div class="face back contenedor">
                <p>
                    El 26 de abril se realizó la pasarela SMODA Verano 2025 en la playa El Sunzal. Un evento que combinó moda, arte y surf durante el ISA World Longboard Championship. Diez micro y pequeñas empresas mostraron colecciones que mezclan tradición salvadoreña con estilo contemporáneo
                </p>
                
                <p class="noticia-link">Ver mas...</p>

                <div class="linea-separadora"></div>
                <p class="texto_noticia">
                    Autor: Armando Flores
                </p>
            </div>
            </a>

        </div>
    </div>
    
    <div class="grid-language">
        <div class="language"><a href="../Maqueta EN/cultura.php">+ English</a></div>
    </div>
    <div class="footer">
        <hr>
        <h2>Laint®</h2>
        <p>Las imágenes utilizadas en este proyecto son únicamente para fines educativos y sin intención de lucro</p>
    </div>

    <div class="overlay" id="overlay"></div>

</body>
<script src="../JS/menuDesplegable.js"></script>
<script src="../JS/boton.js"></script>
</html>