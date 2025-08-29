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
    <title>Magazine</title>
    <link rel="stylesheet" href="../CSS/inicioStyle.css">
    <link rel="stylesheet" href="../CSS/boton-theme.css"> 
    <link rel="stylesheet" href="../CSS/language.css"> 
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
        <div class="headerdiv">
            <img src="../Media/mediaIndex/fondolaint1.3.avif" class="headerimg">
        </div>
            <div class="divNews">
            <h1>NEWS</h1>
        </div>
        <div class="contenedorLinea1">
            <div class="linea-horizontal"></div>
        </div>
    </header>
    <section>
        <div class="tablaDeNoticias">
            <div class="columna1">
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta EN/Noticias/noticia1.php"><img src="../Media/mediaIndex/GoSkate.jpg"></a>
                        <h4 class="topic">Topic: Sports</h4>
                        <a href="../Maqueta EN/Noticias/noticia1.php"><h2>Thousands Celebrate Skateboarding Day</h2></a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta EN/Noticias/noticia3.php"><img src="../Media/Noticias/noticiaNudeFoto.jpg"></a>
                        <h4 class="topic">Topic: Fashion</h4>
                        <a href="../Maqueta EN/Noticias/noticia3.php"><h2>Nude Project’s Latest Drop: “Lil Kid, Big Dreams” Capsule</h2></a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta EN/Noticias/noticia5.php"><img src="../Media/Noticias/Arte en el parque.jpg"></a>
                        <h4 class="topic">Topic: Subcultures</h4>
                        <a href="../Maqueta EN/Noticias/noticia5.php"><h2>"Art in the Park III": Urban Creativity Showcased in the Heart of San Salvador</h2></a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
            </div>
            <div class="contenedorLinea2">
                <div class="linea-vertical"></div>
            </div>
            <div class="columna2">
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta EN/Noticias/noticia2.php">
                            <img src="../Media/Noticias/CultoMar.jpeg" alt="">
                        </a>
                        <h4 class="topic">Topic: Subcultures</h4>
                        <a href="../Maqueta EN/Noticias/noticia2.php"><h2>Youth Make an Impact with the Culto Market Event</h2></a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta EN/Noticias/noticia4.php">
                            <img src="../Media/Noticias/noticiaKardo.jpg" alt="">
                        </a>
                        <h4 class="topic">Topic: Sports</h4>
                        <a href="../Maqueta EN/Noticias/noticia4.php"><h2>Kardo: El Salvador Joins the World of Emerging Urban Disciplines</h2></a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta EN/Noticias/noticia6.php">
                            <img src="../Media/Noticias/ropaChucaPortada.jpeg">
                        </a>
                        
                        <h4 class="topic">Topic: Subcultures</h4>
                        <a href="../Maqueta EN/Noticias/noticia6.php">
                            <h2>
                                Thrifting in El Salvador: Conscious Fashion, History, and Community Unite in Urban Culture
                            </h2>
                        </a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="grid-language">
        <div class="language"><a href="../Maqueta/index.php">+ Español</a></div>
    </div>
    <div class="footer">
        <hr>
        <h2>Laint®</h2>
        <p>The images used in this project are for educational purposes only and not intended for profit</p>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../JS//menuDesplegable.js"></script>
    <script src="../JS/indexAnimacion.js"></script>
    <script src="../JS/boton.js"></script>
</body>
</html>