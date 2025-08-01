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
    <title>Inicio</title>
    <link rel="stylesheet" href="../CSS/inicioStyle.css">
    <link rel="stylesheet" href="../CSS/boton-theme.css"> 
    <link rel="stylesheet" href="../CSS/language.css"> 
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
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
                        <a href="../Maqueta/Noticias/noticia1.php"><img src="../Media/mediaIndex/GoSkate.jpg"></a>
                        <h4 class="topic">Tema: Deportes</h4>
                        <a href="../Maqueta/Noticias/noticia1.php"><h2>Miles celebraran el dia del Skateboarding</h2></a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta/Noticias/noticia3.php"><img src="../Media/Noticias/noticiaNudeFoto.jpg"></a>
                        <h4 class="topic">Tema: Moda</h4>
                        <a href="../Maqueta/Noticias/noticia3.php"><h2>Lo último de Nude Project: la cápsula “Lil Kid, Big Dreams”</h2></a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta/Noticias/noticia5.php"><img src="../Media/Noticias/Arte en el parque.jpg"></a>
                        <h4 class="topic">Tema: SubCulturas</h4>
                        <a href="../Maqueta/Noticias/noticia5.php"><h2>Arte en el Parque III”: La creatividad urbana se expone en el corazón de San Salvador</h2></a>
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
                        <a href="../Maqueta/Noticias/noticia2.php">
                            <img src="../Media/Noticias/CultoMar.jpeg" alt="">
                        </a>
                        <h4 class="topic">Tema: SubCulturas</h4>
                        <a href="../Maqueta/Noticias/noticia2.php"><h2>Jovenes impactan con el evento Culto Market</h2></a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta/Noticias/noticia4.php">
                            <img src="../Media/Noticias/noticiaKardo.jpg" alt="">
                        </a>
                        <h4 class="topic">Tema: Deportes</h4>
                        <a href="../Maqueta/Noticias/noticia4.php"><h2>Kardo: El Salvador entra al mundial de disciplinas urbanas emergentes</h2></a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
                <div class="noticias">
                    <div class="texto-noti">
                        <a href="../Maqueta/Noticias/noticia6.php">
                            <img src="../Media/Noticias/ropaChucaPortada.jpeg">
                        </a>
                        
                        <h4 class="topic">Tema: SubCulturas</h4>
                        <a href="../Maqueta/Noticias/noticia6.php">
                            <h2>
                                Thrifting en El Salvador: moda consciente, historia y comunidad se unen en la cultura urbana
                            </h2>
                        </a>
                        <h4>Autor: LAINT</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="grid-language">
        <div class="language"><a href="../Maqueta EN/index.php">+ English</a></div>
    </div>
    <div class="footer">
        <hr>
        <h2>Laint®</h2>
        <p>Las imágenes utilizadas en este proyecto son únicamente para fines educativos y sin intención de lucro</p>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../JS//menuDesplegable.js"></script>
    <script src="../JS/indexAnimacion.js"></script>
    <script src="../JS/boton.js"></script>
</body>
</html>