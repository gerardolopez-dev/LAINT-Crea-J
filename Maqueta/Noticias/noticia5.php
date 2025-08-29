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
    <link rel="stylesheet" href="../../CSS/noticia.css">
    <link rel="stylesheet" href="../../CSS/boton-theme.css">
    <link rel="stylesheet" href="../../CSS/language.css"> 
    <link rel="shortcut icon" href="../../Media/favicon.ico" type="image/x-icon">
</head>
<body>
    <nav>
        <ul class="nav-section nav-left">
            <li><a href="../index.php">Magazine</a></li>
            <li><a href="../deportes.php">Deporte</a></li>
            <li><a href="../cultura.php">Cultura</a></li>
            <li><a href="../contactos.php">Contacto</a></li>
        </ul>

    <div class="logo">
        <a href="../../Maqueta/index.php"><img src="../../Media/mediaIndex/logo laint1.1.png" alt=""></a>
    </div>
        <ul class="nav-section nav-right">
            <li><a href="../sign.php" >Acceder</a></li>
            <li><button class="menu-button" id="openMenu">Cuenta</button></li>
            <li><a href="../laintShop.php">Laint Shop</a></li>
        </ul>
    </nav>
    <div class="side-menu" id="sideMenu">
        <button class="close-btn" id="closeMenu">&times;</button>
        <img src="../../Media/mediaIndex/iconoPerfil1.2.webp" class="Icono">
        <?php if ($sesion_activa): ?>
            <h1><?php echo htmlspecialchars($nombre_usuario); ?></h1>
            <h3><?php echo htmlspecialchars($usuario); ?></h3>
            <a href="../../PHP/sesion/logout.php">Cerrar sesión</a>
        <?php else: ?>
            <h1>Invitado</h1>
            <h3>No has iniciado sesión</h3>
            <a href="../sign.php">Iniciar sesión</a>
            <a href="../sign.php">Registrarse</a>
        <?php endif; ?>
        <hr class="separador">
        <h4 class="cambioColor">Cambiar Tema</h4>
        <div id="contenedor-tema">
            <div class="toggle">
            </div>
        </div>
    </div>
    <header>
        <div class="contenedor1">
            <div class="contenedor-texto">
                <div class="link">
                    <a href="../index.php">Actualidad</a>
                </div>
                <div class="texto-noticia">
                    <h1>San Salvador convierte al Parque Cuscatlán en epicentro cultural con la exposición “Arte en el Parque II</h1>
                </div>
                <div class="footer-new">
                    <h5>Por <span>LAINT</span> Mayo 24,2025,10:21am</h5>
                </div>
            </div>
            <div class="contenedor-imagen">
                <div class="imagen1">
                    <img src="../../Media/Noticias/Arte en el parque.jpg">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="parrafoNoticia">
            <div class="div-parra">
                <p>
                    <strong>San Salvador, julio de 2025 </strong> En una innovadora apuesta por la democratización del arte y la revitalización de los espacios públicos, el Parque Cuscatlán se ha transformado en una galería al aire libre con la inauguración de la exposición “Arte en el Parque III”. Esta iniciativa reúne una selección de 30 obras de reconocidos y emergentes artistas salvadoreños, presentadas en gigantografías instaladas estratégicamente a lo largo y ancho del parque, invitando a los visitantes a recorrer, reflexionar y disfrutar de la riqueza visual y conceptual del arte contemporáneo nacional.
                </p>
                <h1><strong>Arte accesible para toda la comunidad</strong></h1>
                <p>
                    Organizada en conjunto por la Alcaldía de San Salvador y varias instituciones culturales, la exposición nace con la intención clara de derribar las barreras tradicionales del arte, acercándolo a un público diverso que incluye desde familias y estudiantes hasta turistas y transeúntes habituales del parque. Al presentar las piezas en un entorno público, se busca que la experiencia artística deje de ser un privilegio exclusivo para quienes asisten a museos o galerías privadas.
                </p>
                <p>
                    Las obras que componen la muestra abordan un amplio espectro de temas relevantes para la sociedad salvadoreña: desde la representación de la multiculturalidad y las tradiciones ancestrales, hasta problemáticas sociales como la migración, la resiliencia, la memoria histórica y la convivencia. Cada gigantografía ofrece una narrativa visual única, creada para dialogar tanto con el espacio físico como con la experiencia cotidiana de quienes las observan.
                </p>
                <div class="contenedor-foto">
                    <img src="../../Media/Noticias/arteparquefoto.webp" alt="">
                </div>
                <h1><strong>Obras destacadas de “Arte en el Parque III</strong></h1>
                <details class="animated-details">
                        <summary>Algunas de las piezas más representativas incluidas en la exposición son:</summary>
                        <div class="contenido">
                            <ul class="lista-obras">
                                <li><strong>“Raíces que hablan”</strong>“Raíces que hablan” de María López: una representación vibrante de la conexión entre generaciones a través de símbolos indígenas y colores cálidos.</li>
                                <li><strong>“Migrantes invisibles”</strong> de Carlos Herrera: una reflexión visual sobre las historias no contadas de quienes buscan un futuro fuera del país.</li>
                                <li><strong>“Resiliencia urbana” </strong>de Ana Morales: un collage que mezcla grafitis, fotografías y mensajes de esperanza en zonas urbanas.</li>
                                <li><strong>“Memoria compartida”</strong> de Luis Sánchez: una serie de retratos de personajes históricos y populares que han marcado la identidad salvadoreña.</li>
                                <li><strong>“Convivencia en colores”</strong> de Gabriela Jiménez: una explosión de formas y figuras que celebran la diversidad cultural y étnica.</li>
                            </ul>
                        </div>
                    </details>
                <h1><strong>Un espacio que fomenta identidad, diálogo y participación</strong></h1>
                <p>
                    El Parque Cuscatlán, conocido por ser un punto de encuentro social y recreativo, ahora se erige también como un espacio para el encuentro cultural. Además de la exhibición, durante los próximos meses se desarrollarán talleres artísticos, encuentros con los creadores, charlas sobre arte y cultura urbana, y presentaciones musicales en vivo, fomentando así un ambiente dinámico que favorece la interacción entre artistas y comunidad.La respuesta positiva ha motivado a organizadores locales a expandir la iniciativa con talleres, competencias internas y alianzas con instituciones que promuevan el arte y el deporte juvenil.
                </p>
                <p>
                    “Queremos que el arte sea un puente para fortalecer el sentido de identidad y pertenencia en nuestra ciudad, y que sirva como un medio para generar diálogos abiertos sobre nuestra realidad”, comentó la directora del área de cultura de la Alcaldía, quien agregó que esta es la tercera edición del proyecto, consolidándose como una tradición cultural en la capital.
                </p>
                <h1><strong>Un proyecto con visión de largo plazo</strong></h1>
                <p>
                    “Arte en el Parque III” forma parte de un esfuerzo sostenido por reimaginar el uso de los espacios públicos en San Salvador, impulsando proyectos culturales que aporten a la cohesión social y al desarrollo de las expresiones artísticas locales. La alcaldía planea que esta galería urbana continúe creciendo en ediciones futuras, incluyendo nuevas temáticas, artistas y formatos, ampliando la oferta cultural para todos los habitantes.
                </p>
                <p>
                    El impacto de la exposición se refleja no solo en la apreciación del arte sino también en la revitalización del parque, que ha visto un aumento significativo en visitas desde la inauguración. Los visitantes valoran especialmente la combinación entre naturaleza, arte y actividades complementarias que hacen del recorrido una experiencia completa.
                </p>
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
                            <h5><strong>Tema: </strong>Deportes</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="../Noticias/noticia4.php"><strong>Kardo y el BMX</strong></a></h3>
                        </div>
                        <div class="contenedor-img">
                            <a href="../Noticias/noticia4.php"><img src="../../Media/Noticias/noticiaKardo.jpg"></a>
                        </div>
                    </div>
                    <hr color="grey" size="1">
                    <div class="contenedor-noti-uno">
                        <div class="texto-noti">
                            <h5><strong>Tema: </strong>SubCulturas</h5>
                            <h5 class="autor"><strong>Autor:</strong> Creado por equipo LAINT</h5>
                            <h3><a href="../Noticias/noticia6.php"><strong>Thrifting en El Salvador</strong></a></h3>
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
        <h2>&copy; 2025 LAINT Magazine. Todos los derechos reservados.</h2>
    </footer>
    <div class="grid-language">
        <div class="language"><a href="../../Maqueta EN/Noticias/noticia5.php">+ English</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/noticiasSummary.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>