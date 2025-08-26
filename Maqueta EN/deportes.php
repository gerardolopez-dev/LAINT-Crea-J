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
    <title>Sports</title>
    <link rel="Stylesheet" href="../CSS/deportes.css">
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/boton-theme.css">
</head>
<body id="cuerpo">
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
         <div id="contenedor-tema">
            <div class="toggle">
            </div>
        </div>
    </div>
    <header>
        <div class="headerdiv">
            <img src="../Media/PaginaDeportes/fondo.jpg" class="imagendiv">
        </div>
        <div class="deportes">
         <h1>SPORTS</h1>
        </div>
        <div class="noticias">
         <h1>NEWS</h1>
        </div>
        <div class="contenedorLinea1">
            <div class="lineahorizontal"></div>
        </div>
        <br>
        <div class="headerimage">
            <center>
                <img src="../Media/PaginaDeportes/skate.png" class="headerimg">
            </center>            
        </div>
    </header>
    <br>
    <section>
        <div class="container">
            <div class="parrafo">
                <p>
                 Have you ever wondered how skateboarding evolved into a vibrant subculture and a globally recognized sport?
                 Read on to discover the fascinating history, styles, terms, and rules of this exciting lifestyle on wheels.
                </p>
            </div>
            <div class="contenedorLinea1">
                <div class="lineahorizontal"></div>
            </div>
            <div class="titulo1">
               <h1>SKATEBOARDING</h1>
            </div>
            <div class="container3">
                <details>
                    <summary class="titulo2">The history of skateboarding</summary>
                    <p class="parrafo2">
                       Skateboarding originated in California in the 1950s, when surfers were looking for an alternative to surfing on days without waves.
                       Using boards with wheels, they began to "surf" the asphalt, giving rise to a new form of sporting and cultural expression.
                       Skateboarding (or skate for short) is a sport that involves riding a board on the ground or on specially designed surfaces such as ramps, potholes, bars, and many others.
                       While riding, various tricks can be performed. These tricks consist of lifting the board off the ground and performing tricks, positions, or flips in the air.  
                    </p>
                </details>
                <details>
                    <summary class="titulo2">The culture of skateboarding.</summary>
                    <p class="parrafo2">
                     Skateboarding isn't just a sport: it's a culture with its own identity. From its origins in the streets to today's skateparks, it has represented freedom, creativity, and resistance to convention.
                     Skaters form a diverse and close-knit community, where age, background, or skill level doesn't matter. What truly counts is the passion for riding, the constant effort to master new tricks, and the authenticity of one's expression on the board.
                     The skater lifestyle is also reflected in clothing, music (such as punk, hip-hop, or lo-fi), urban art, and even the way people speak. Beyond competitions, skateboarding is a form of personal expression, a way of seeing the world and conquering every corner of urban space.  
                    </p>
                </details>
            </div> 
            <div class="titulo2">
              <h2>Types of skateboarding.</h2>
            </div>
            <div class="flipcard">
                <div class="face front">
                    <img src="../Media/PaginaDeportes/skate2.png" class="imagen2" alt="">  
                </div>
                <div class="face back">
                    <ul> 
                        <li>Street: Tricks on stairs, railings, curbs, and benches.</li>
                        <br>
                        <li>Vert: Giant ramps and half pipes.</li>
                        <br>
                        <li>Park: Combination of obstacles in skate parks.</li>
                        <br>
                        <li>Freestyle: Technical tricks on a flat surface.</li>
                        <br>
                        <li>Cruising/longboard: More relaxed, for moving around or going downhill.</li>
                    </ul>
              </div>
            </div>
            <br>
            <br>
            <div class="container3">
               <details>
                 <summary class="titulo2">Skateboarding Rules</summary>
                  <ul>
                     <li><h3>Use of protective equipment:</h3>It is always recommended to wear a helmet, knee pads, elbow pads, and wrist guards, especially if you are a beginner or a minor.</li>
                     <li><h3>Respect for others:</h3>Wait your turn if there are other people in the park or ramp.<br>Do not interrupt others while they are in the middle of a trick.</li>
                     <li><h3>Proper use of space:</h3>Do not block ramps, handrails or slide lines.<br>Do not skate in prohibited areas (some squares or buildings have restrictions).</li>
                     <li><h3>Maintain order and cleanliness:</h3>Do not leave litter or damage the park or street infrastructure.<br>Do not use wax on surfaces without permission.</li>
                     <li><h3>Personal responsibility:</h3>Know your own limits to avoid accidents.<br>Be aware of your surroundings (pedestrians, vehicles, obstacles).</li>
                   </ul> 
               </details>
            </div>
            <div class="titulo2">
                <h2>Basic skateboarding terms</h2>
            </div>
            <div class="flipcard">
                <div class="face front">
                  <img src="../Media/PaginaDeportes/skatepark.png" alt="">
                </div>
                <div class="face back">
                  <ul>
                     <li>Skater: Person who practices skateboarding.</li>
                     <li>Skatepark: Place with ramps, railings and obstacles designed for skating.</li>
                     <li>Truco (Trick): Movement or maneuver performed with the skateboard.</li>
                     <li>Deck: Skate board.</li>
                     <li>Trucks: Metal axles that connect the wheels to the board.</li>
                     <li>Grip tape:	Grip tape that goes on the top of the board, giving traction to the foot.</li>
                     <li>Wheels: Skateboard wheels.</li>
                     <li>Bearings: Bearings that allow the wheels to turn.</li>
                     <li>Set up: Complete set of skateboard parts: deck, trucks, wheels, etc.</li>
                   </ul>
                </div>
            </div>
            <div class="titulo2">
              <h2>Conclusion</h2>
            </div>
            <div class="parrafo2">
              <p>
                 Skateboarding is much more than a sporting activity: it's a cultural phenomenon that has shaped and inspired diverse forms of art and expression. It has influenced how we film, photograph, dress, design, write, and experience the city.
                 Its presence in the media doesn't just showcase tricks; it tells stories, portrays communities, and transforms the everyday into the extraordinary. The skateboard has become a tool of creative freedom that rolls not only on the pavement, but also on the collective imagination of a global culture.
              </p>  
            </div>
            <div class="contenedorLinea1">
             <div class="lineahorizontal"></div>
            </div>
            <br>
            <div class="container2">
              <div class="card">
                 <a href="../Maqueta EN/streetball.php">
                     <img src="../Media/PaginaDeportes/streetball1.png" alt="streetball" class="cardimg"> 
                 </a>
                 <div class="cardcontent">
                       <a href="../Maqueta EN/streetball.php">
                         <h2 class="titulo3">StreetBall</h2> 
                       </a>
                     <p class="parrafo4">
                         Have you ever wondered how streetball became such a vibrant culture and popular sport on the streets around the world?
                         Read on to discover the fascinating history, forms, terms, and rules of this exciting game.
                     </p>
                 </div>
              </div>
              <div class="card">
                 <a href="../Maqueta EN/scootering.php">
                     <img src="../Media/PaginaDeportes/scootering.png" alt="Scootering" class="cardimg"> 
                 </a>
                 <div class="cardcontent">
                      <a href="../Maqueta EN/scootering.php">
                         <h2 class="titulo3">Scootering</h2>
                      </a>
                      <p class="parrafo4">
                         Have you ever stopped to think about how scootering evolved into an energetic and creative urban culture that's increasingly taking over cities around the world?
                         Join us and discover the origins of this exciting movement, its different forms of practice, the vocabulary that defines it, and the rules that make it a true form of expression on wheels.
                      </p> 
                   </div>
               </div>   
              <div class="card">
                 <a href="../Maqueta EN/bmx.php">
                     <img src="../Media/PaginaDeportes/bmx.png" alt="bmx" class="cardimg"> 
                 </a>
                 <div class="cardcontent">
                      <a href="../Maqueta EN/bmx.php">
                         <h2 class="titulo3">BMX</h2> 
                      </a>
                     <p class="parrafo4">
                         Have you ever wondered how BMX evolved from a recreational activity to an urban culture filled with style, adrenaline, and passion, found in streets, parks, and public spaces around the world?
                         Discover how this vibrant movement emerged, the different ways it's practiced, the terms that identify it, and the rules that transform it into a true form of expression on two wheels.
                     </p>
                 </div>
              </div>
            </div>
        </div>
        <div class="grid-language">
            <div class="language" ><a href="../Maqueta/deportes.php">+ Español</a></div>
        </div>
        <div class="footer">
            <hr>
            <h2>Laint®</h2>
            <p>The images used in this project are for educational purposes only and not intended for profit</p>
        </div>
        <div class="overlay" id="overlay"></div>
        <script src="../JS/deportes.js"></script>
        <script src="../JS/boton.js"></script>
</body>
<script src="../JS/menuDesplegable.js"></script>
</html>