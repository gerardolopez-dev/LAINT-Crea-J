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
    <title>Noticia</title>
    <link rel="stylesheet" href="../CSS/noticia.css">
    <link rel="stylesheet" href="../CSS/boton-theme.css">
    <link rel="stylesheet" href="../CSS/language.css"> 
     <link rel="stylesheet" href="../CSS/particulas.css"> 
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
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
            <a href="../../PHP/sesion/logoutEN.php">Log out</a>
        <?php else: ?>
            <h1>Guest</h1>
            <h3>You are not logged in</h3>
            <a href=".../Maqueta EN/sign.php">Login</a>
            <a href="../Maqueta EN/sign.php">Register</a>
        <?php endif; ?>
        <hr class="separador">
        <h4 class="cambioColor">Change theme</h4>
        <div id="contenedor-tema">
            <div class="toggle">
            </div>
        </div>
    </div>
    <header>
        <div class="contenedor1">
            <div class="contenedor-texto">
                <div class="link">
                    <a href="../Maqueta EN/index.php">Nowdays</a>
                </div>
                <div class="texto-noticia">
                    <h1>Fashion Institute in El Salvador</h1>
                </div>
                <div class="footer-new">
                    <h5><span>LAINT</span>April 28, 2025, 8:32pm</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../Media/MediaCultura/imgNoticiaCultura3.jpeg">
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                    It was presented by SMODA, the Official Fashion Cluster of El Salvador, supported by CONAMYPE,
                    as part of the ISA World Longboard Championship in El Sunzal.
                </p>
                <p>
                    The runway show had a summer beach-themed setting, showcasing fresh and family-friendly fashion with strong artisanal influence.
                </p>
                <p>
                    The garments exhibited combined artisanal tradition with contemporary style, created by local Salvadoran designers and artisans.
                </p>
                <P>
                    The president of CONAMYPE, Paul Steiner, emphasized how these artisans have evolved into modern fashion creators using traditional techniques.
                </P>
                <P>
                    It represents the fusion of fashion, culture, and tourism in a natural setting internationally recognized for its surfing heritage.
                </P>
                <P>
                    It promotes the economic development of local designers through direct visibility and connection with national and international audiences.
                </P>
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
                            <h5><strong>Topic: </strong>Fashion</h5>
                            <h5 class="autor"><strong>Autor:</strong> LAINT</h5>
                            <h3><a href="../Maqueta EN/culturaNoticia1.php"><strong>Institue of fashion in El Salvador</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Maqueta EN/culturaNoticia1.php"><img src="../Media/mediaCultura/Imagen noticia cult2.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Topic: </strong>Fashion</h5>
                            <h5 class="autor"><strong>Autor:</strong> LAINT</h5>
                            <h3><a href="../Maqueta EN/culturaNoticia2.php"><strong>Salvadorians designers around the world</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Maqueta EN/culturaNoticia2.php"><img src="../Media/mediaCultura/Imagen noticia2.jpg"></a>
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
        <div class="language"><a href="../Maqueta EN/culturaNoticia1.php">+ English</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../JS/menuDesplegable.js"></script>
    <script src="../JS/boton.js"></script>
    <script src="../JS/particulas.js"></script>
</body>
</html>