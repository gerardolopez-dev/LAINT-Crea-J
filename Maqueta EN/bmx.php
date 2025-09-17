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
    <title>BMX</title>
    <link rel="Stylesheet" href="../CSS/bmx.css">
    <link rel="stylesheet" href="../CSS/boton-theme.css">
    <link rel="stylesheet" href="../CSS/particulasOtro.css">
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
</head>
<body>
   <script src="../JS/bmx.js"></script>
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
    <br>
    <header>
        <div class="bmx">
         <h1>BMX</h1>
        </div>
        <br>
        <br>
        <div class="headerimage">
            <center>
             <img src="../Media/PaginaDeportes/bmx.png" class="headerimg">
            </center>            
        </div>        
    </header>
    <section>
        <div class="container">
            <div class="parrafo">
               <p>
                 Have you ever wondered how BMX evolved from a recreational activity to an urban culture filled with style, adrenaline, and passion, found in streets, parks, and public spaces around the world?
                 Discover how this vibrant movement emerged, the different ways it's practiced, the terms that identify it, and the rules that transform it into a true form of expression on two wheels.
             </p>
            </div>
           <div class="contenedorLinea1">
             <div class="lineahorizontal"></div>
           </div>
           <br>
           <div class="container3">
             <details>
                <summary class="titulo2">The history of BMX</summary>
                <p>
                   BMX (Bicycle Motocross) originated in California, USA, in the late 1960s. It emerged when children and young people began imitating motocross racing using bicycles on dirt terrain.
                   These bikes were smaller and more durable, allowing for jumps, drifts, and extreme maneuvers.
                </p>
                <p>
                   In the 1970s, BMX quickly became popular, and official races began to be organized, giving rise to BMX racing.
                   Shortly after, freestyle emerged, a sport focused on tricks and stunts on ramps, streets, and skate parks.
                </p>
                <p>
                   Over time, BMX became a globally recognized sport, with professional competitions, sponsorships, and a presence at the X Games and the Olympics.
                   Today, BMX is a culture that blends sport, style, and urban life.
                </p>
             </details>
             <details>
                <summary class="titulo2">BMX culture</summary>
                <p>
                   BMX culture is an urban lifestyle that combines extreme sport, freedom, and creativity.
                   Born on the streets and dirt tracks, it is characterized by a passion for bikes, tricks, and personal style.
                </p>
                <p>
                   Riders value self-improvement, camaraderie, and respect in every practice. Furthermore, BMX is closely linked to music, street fashion, and urban art.
                   It's not just a sport, but a community where every trick expresses identity and attitude.
                </p>
             </details>
           </div>
           <br>
            <center>
               <img src="../Media/PaginaDeportes/bmx1.png" class="imagen1">
            </center>
            <br>
           <div class="container3">
              <details>
                <summary class="titulo2">BMX practice methods</summary>
                <ul>
                   <li><h3>Racing</h3>Races on dirt tracks with curves and jumps. The competition is based on speed.</li>
                   <li><h3>Freestyle</h3>Focused on tricks and acrobatics. It is divided into several submodalities:</li>
                   <ul>
                      <li>Park: It is practiced in skate parks with ramps and obstacles.</li>
                      <li>Street: In urban spaces using railings, stairs and walls.</li>
                      <li>Flatland: Technical tricks on flat ground, without ramps.</li>
                      <li>Dirt Jump: Jumps and tricks on dirt ramps.</li>
                      <li>Vert: Maneuvers in half pipes.</li>
                   </ul>
                </ul> 
              </details>
           </div>
           <div class="titulo2">
             <h1>Terms that identify BMX</h1>
           </div>
           <div class="flipcard">
             <div class="face front">
                <img src="../Media/PaginaDeportes/bmx2.png" alt="">
             </div>
             <div class="face back">
                <ul>
                 <li>Bunny hop: Basic jump without ramp.</li>
                 <li>Tailwhip: The bike spins on its axis as the rider jumps.</li>
                 <li>Barspin: Full turn of the handlebar in the air.</li>
                 <li>Grind: Sliding on edges or railings with the pegs.</li>
                 <li>Manual: Rolling only on the rear wheel without pedaling.</li>
                 <li>Fakie: Go backwards while maintaining balance.</li>
                 <li>Air: Trick performed in the air after a ramp.</li>
                 <li>Half-pipe: “U” shaped structure used for aerial tricks.</li>
                 <li>Pegs: Thubs on the axles used for standing or sliding.</li>
                 <li>Drop-in: Entrance from the top of a ramp.</li>
                </ul>
             </div>
           </div>
           <br>
           <br>
           <div class="container3">
             <details>
               <summary class="titulo2">BMX Rules</summary>
               <ul>
                <li><h3>Wear protective equipment</h3>You should always wear a helmet, and in many disciplines, knee pads, elbow pads, and gloves as well.</li>
                <li><h3>Check the condition of the bicycle</h3>Make sure brakes, tires, and components are in good condition before riding.</li>
                <li><h3>Respect spaces and turns</h3>In parks or on slopes, you should wait your turn and avoid crossing paths with other riders.</li>
                <li><h3>Avoid dangerous maneuvers in unsuitable areas</h3>Do not perform tricks in crowded or unsafe places.</li>
                <li><h3>Caring for the environment</h3>Do not damage public structures or leave litter.</li>
                <li><h3>Follow the rules of each track or park</h3>Some facilities have specific rules of use that must be followed.</li>
                <li><h3>Practice with respect</h3>Promote camaraderie and help less experienced riders.</li>
             </ul>
             </details>
           </div>
           <div class="titulo2">
             <h1>Conclusion</h1>
           </div>
           <div class="parrafo1">
             <p>
                BMX is more than an extreme sport; it's a culture that represents freedom, passion, and lifestyle. Born on the streets and tracks, it allows riders to express themselves through speed, tricks, and creativity.
                With diverse forms of practice and a strong community, BMX continues to grow as a symbol of achievement, identity, and urban connection.
             </p>
           </div>
           <div class="container2">
              <div class="card">
                 <a href="../Maqueta EN/deportes.php">
                     <img src="../Media/PaginaDeportes/skate.png" alt="skate" class="cardimg"> 
                 </a>
                 <div class="cardcontent">
                       <a href="../Maqueta EN/deportes.php">
                         <h2 class="titulo3">Skateboarding</h2> 
                       </a>
                     <p class="parrafo4">
                         Have you ever wondered how skateboarding evolved into a vibrant subculture and a globally recognized sport?
                         Read on to discover the fascinating history, styles, terms, and rules of this exciting lifestyle on wheels.
                     </p>
                 </div>
              </div>
              <div class="card">
                 <a href="../Maqueta EN/streetball.php">
                     <img src="../Media/PaginaDeportes/streetball1.png" alt="streetball" class="cardimg"> 
                 </a>
                 <div class="cardcontent">
                      <a href="../Maqueta EN/streetball.php">
                         <h2 class="titulo3">Streetball</h2>
                      </a>
                      <p class="parrafo4">
                         Have you ever wondered how streetball became such a vibrant culture and popular sport on the streets around the world?
                         Read on to discover the fascinating history, forms, terms, and rules of this exciting game.
                      </p> 
                   </div>
               </div>   
              <div class="card">
                 <a href="../Maqueta EN/scootering.php">
                     <img src="../Media/PaginaDeportes/scootering.png" alt="scootering" class="cardimg"> 
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
            </div>      
        </div>
    </section>
    <div class="grid-language">
        <div class="language"><a href="../Maqueta/bmx.php">+ Español</a></div>
    </div>
    <div class="overlay" id="overlay"></div>
      <div class="footer">
        <hr>
        <h2>Laint®</h2>
        <p>Las imágenes utilizadas en este proyecto son únicamente para fines educativos y sin intención de lucro</p>
      </div>
</body>
<script src="../JS//menuDesplegable.js"></script>
<script src="../JS/boton.js"></script>
<script src="../JS/particulas.js"></script>
</html>