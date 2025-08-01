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
    <title>Noticia Cinco</title>
    <link rel="stylesheet" href="../../CSS/noticia5.css">
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
                <h1>San Salvador turns Cuscatlán Park into a cultural epicenter with the exhibition “Art in the Park III”</h1>
            </div>
            <div class="footer-new">
                <h5>By <span>LAINT</span> May 24, 2025, 10:21 AM</h5>
            </div>
        </div>
        <div class="contenedor-imagen">
            <div class="imagen1">
                <img src="../../Media/Noticias/Arte en el parque.jpg">
            </div>
        </div>
    </div>
</header>

<section class="parrafoNoticia">
    <div class="div-parra">
        <p>
            <strong>San Salvador, July 2025</strong> – In an innovative move to democratize art and revitalize public spaces, Cuscatlán Park has been transformed into an open-air gallery with the launch of the exhibition “Art in the Park III.” This initiative brings together 30 works by renowned and emerging Salvadoran artists, presented in large-format prints strategically installed throughout the park, inviting visitors to explore, reflect, and enjoy the visual and conceptual richness of national contemporary art.
        </p>

        <h1><strong>Accessible art for the entire community</strong></h1>
        <p>
            Organized jointly by the San Salvador Mayor’s Office and various cultural institutions, the exhibition clearly aims to break traditional barriers to art, bringing it closer to a diverse audience — including families, students, tourists, and everyday parkgoers. By presenting the pieces in a public setting, the goal is to make the artistic experience no longer a privilege reserved for those who visit museums or private galleries.
        </p>
        <p>
            The featured works address a wide range of themes relevant to Salvadoran society: from multicultural representation and ancestral traditions to social issues like migration, resilience, historical memory, and coexistence. Each large-format piece offers a unique visual narrative, created to interact with both the physical space and the everyday experience of its viewers.
        </p>

        <div class="contenedor-foto">
            <img src="../../Media/Noticias/arteparquefoto.webp" alt="">
        </div>

        <h1><strong>Featured works of “Art in the Park III”</strong></h1>
        <details class="animated-details">
            <summary>Some of the most representative pieces included in the exhibition are:</summary>
                <div class="contenido">
                    <ul class="lista-obras">
                        <li><strong>“Roots That Speak”</strong> by María López: a vibrant depiction of generational connection through indigenous symbols and warm colors.</li>
                        <li><strong>“Invisible Migrants”</strong> by Carlos Herrera: a visual reflection on the untold stories of those seeking a future abroad.</li>
                        <li><strong>“Urban Resilience”</strong> by Ana Morales: a collage mixing graffiti, photographs, and messages of hope in urban areas.</li>
                        <li><strong>“Shared Memory”</strong> by Luis Sánchez: a series of portraits of historical and popular figures that have shaped Salvadoran identity.</li>
                        <li><strong>“Living Together in Color”</strong> by Gabriela Jiménez: an explosion of shapes and figures celebrating cultural and ethnic diversity.</li>
                    </ul>
                </div>
        </details>

        <h1><strong>A space that fosters identity, dialogue, and participation</strong></h1>
        <p>
            Cuscatlán Park, known as a social and recreational gathering point, now also stands as a space for cultural exchange. In addition to the exhibition, the coming months will include art workshops, meet-the-artist sessions, talks on art and urban culture, and live music performances, promoting a dynamic environment that encourages interaction between artists and the community. The positive response has motivated local organizers to expand the initiative with workshops, internal competitions, and partnerships with institutions promoting youth art and sports.
        </p>
        <p>
            “We want art to be a bridge that strengthens the sense of identity and belonging in our city, and to serve as a medium for generating open dialogue about our reality,” said the director of the culture department of the Mayor’s Office, adding that this is the third edition of the project, now solidified as a cultural tradition in the capital.
        </p>

        <h1><strong>A project with a long-term vision</strong></h1>
        <p>
            “Art in the Park III” is part of a sustained effort to reimagine the use of public spaces in San Salvador, promoting cultural projects that contribute to social cohesion and the development of local artistic expression. The Mayor’s Office plans for this urban gallery to continue growing in future editions, including new themes, artists, and formats, expanding cultural offerings for all residents.
        </p>
        <p>
            The impact of the exhibition is reflected not only in the appreciation of art but also in the revitalization of the park, which has seen a significant increase in visits since the launch. Visitors especially value the blend of nature, art, and complementary activities that make the tour a complete experience.
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
    <div class="grid-language">
        <div class="language"><a href="../../Maqueta/noticia5.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
    <script src="../../JS/menuDesplegable.js"></script>
    <script src="../../JS/noticiasSummary.js"></script>
    <script src="../../JS/boton.js"></script>
</body>
</html>