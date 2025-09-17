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
    <link rel="stylesheet" href="../../CSS/noticia.css">
    <link rel="stylesheet" href="../../CSS/boton-theme.css">
    <link rel="stylesheet" href="../../CSS/language.css"> 
    <link rel="stylesheet" href="../../CSS/particulas.css">
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
                    <h1>San Salvador Turns Parque Cuscatlán into a Cultural Hub with “Art in the Park II”</h1>
                </div>
                <div class="footer-new">
                    <h5>By <span>LAINT</span> May 24, 2025, 10:21am</h5>
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
                    <strong>San Salvador, July 2025 </strong> — In a bold move to democratize art and revitalize public spaces, Parque Cuscatlán has transformed into an open-air gallery with the launch of the exhibition “Art in the Park III.” The initiative brings together 30 works by both established and emerging Salvadoran artists, displayed in large-scale prints placed throughout the park, inviting visitors to walk, reflect, and experience the richness of contemporary national art.
                </p>
                <h1><strong>Art Made Accessible to Everyone</strong></h1>
                <p>
                    Organized by the Municipality of San Salvador in collaboration with several cultural institutions, the exhibition aims to break down traditional barriers to art, reaching a diverse audience that includes families, students, tourists, and everyday parkgoers. By taking the artwork out of private galleries and into public spaces, the project seeks to ensure the artistic experience is no longer reserved for a privileged few.
                </p>
                <p>
                    The works showcased cover a wide spectrum of themes relevant to Salvadoran society: from multiculturalism and ancestral traditions to social issues like migration, resilience, historical memory, and coexistence. Each large-format piece tells its own story, designed to spark dialogue with both the physical space and the daily lives of those who pass by.
                </p>
                <div class="contenedor-foto">
                    <img src="../../Media/Noticias/arteparquefoto.webp" alt="">
                </div>
                <h1><strong>Highlights of “Art in the Park III”</strong></h1>
                <details class="animated-details">
                        <summary>Some of the most representative pieces include:</summary>
                        <div class="contenido">
                            <ul class="lista-obras">
                                <li><strong>“Roots That Speak”</strong> by María López: a vibrant representation of generational connections through indigenous symbols and warm colors.</li>
                                <li><strong>“Invisible Migrants”</strong> by Carlos Herrera: a visual reflection on the untold stories of those seeking a future abroad.</li>
                                <li><strong>“Urban Resilience”</strong> by Ana Morales: a collage blending graffiti, photography, and messages of hope from city neighborhoods.</li>
                                <li><strong>“Shared Memory”</strong> by Luis Sánchez: a series of portraits of historic and popular figures who have shaped Salvadoran identity.</li>
                                <li><strong>“Living Together in Color”</strong> by Gabriela Jiménez: an explosion of shapes and figures celebrating cultural and ethnic diversity.</li>
                            </ul>
                        </div>
                    </details>
                <h1><strong>A Space for Identity, Dialogue, and Participation</strong></h1>
                <p>
                    Known as a hub for recreation and community life, Parque Cuscatlán is now also a stage for cultural encounters. Beyond the exhibition, the upcoming months will feature art workshops, meet-and-greets with artists, talks on culture and urban art, and live music performances—creating a dynamic environment that strengthens interaction between creators and the community.
                </p>
                <p>
                    “We want art to serve as a bridge that strengthens identity and belonging in our city, while also opening space for honest conversations about our reality,” said the Municipality’s cultural director, noting that this is the third edition of the project, which has now become a cultural tradition in the capital.
                </p>
                <h1><strong>A Long-Term Vision</strong></h1>
                <p>
                    “Art in the Park III” is part of an ongoing effort to reimagine how public spaces are used in San Salvador, driving cultural projects that build social cohesion and empower local artistic expression. The city plans to expand this urban gallery in future editions, bringing in new themes, artists, and formats to broaden the cultural offer for all residents.
                </p>
                <p>
                    The impact of the exhibition is seen not only in the appreciation of art, but also in the revitalization of the park itself, which has seen a significant rise in visitors since the opening. Visitors especially value the combination of nature, art, and complementary activities that make the experience complete.
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
                            <h3><a href="../Noticias/noticia6.php"><strong>Thrifting in El Salvador</strong></a></h3>
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
        <div class="language"><a href="../../Maqueta/Noticias/noticia5.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/noticiasSummary.js"></script>
    <script src="../../JS/boton.js"></script>
    <script src="../../JS/particulas.js"></script>
</body>
</html>