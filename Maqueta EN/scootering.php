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
    <title>Scootering</title>
    <link rel="Stylesheet" href="../CSS/scootering.css">
    <link rel="stylesheet" href="../CSS/boton-theme.css">
    <link rel="stylesheet" href="../CSS/particulasOtro.css">
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
</head>
<body>
    <script src="../JS/scootering.js"></script>
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
        <div class="scootering">
         <h1>SCOOTERING</h1>
        </div>
        <br>
        <br>
        <div class="headerimage">
            <center>
             <img src="../Media/PaginaDeportes/scootering.png" class="headerimg">
            </center>            
        </div>        
    </header>
    <section>
      <div class="container">
        <div class="parrafo">
          <p>
            Have you ever stopped to think about how scootering evolved into an energetic and creative urban culture that's increasingly taking over cities around the world?
            Join us and discover the origins of this exciting movement, its different forms of practice, the vocabulary that defines it, and the rules that make it a true form of expression on wheels.
          </p>
        </div>
        <div class="contenedorLinea1">
         <div class="lineahorizontal"></div>
        </div>
        <br>
        <div class="container3">
         <details>
           <summary class="titulo2">The history of Scootering</summary>
           <p class="parrafo2">
             Scootering, or the use of scooters as a sport, began to develop in the late 1990s and early 2000s, when young people began modifying traditional scooters to perform tricks similar to skateboarding or BMX.
             Initially, folding aluminum scooters were used, but over time, more durable models emerged, specifically designed for jumps, stunts, and ramp use.
           </p>
           <p class="parrafo2">
             Scootering quickly gained popularity thanks to skate parks, online videos, and organized competitions.
             In places like the United States, Australia, and Europe, communities of riders formed, turning scooters into a means of urban expression. Over time, specialized brands, international events, and prominent figures emerged, helping to professionalize the sport.
           </p>
           <p class="parrafo2">
             Today, scootering is part of urban youth culture, with styles that include street (street tricks) and park (ramp stunts), and it continues to grow as an extreme sport with its own identity.
           </p>
         </details>
         <details>
           <summary class="titulo2">The culture of Scootering</summary>
           <p class="parrafo2">
             Scootering culture is a youthful, urban expression that combines sport, creativity, and lifestyle. Born in the streets and skateparks, it values freedom, originality, and community among riders.
             Tricks, scooter customization, and style of dress are part of its identity.
           </p>
           <p class="parrafo2">
             It's heavily influenced by other urban cultures like skateboarding and BMX, and relies on social media and videos to share achievements and connect with others.
             More than a sport, scootering is a way of living, moving, and expressing oneself within the city.
           </p>
         </details>
        </div>
        <br>
        <center>
         <img src="../Media/PaginaDeportes/scootering1.png" class="imagen1">
        </center>
        <br>
        <div class="container3">
          <details>
            <summary class="titulo2">Ways to practice Scootering</summary>
            <ul>
             <li><h3>Street</h3>It is practiced in urban environments using stairs, railings, benches, and curbs. The tricks are technical and creative.</li>
             <li><h3>Park</h3>It takes place in skate parks with ramps, bowls, and quarter pipes. High jumps and mid-air tricks are the focus here.</li>
             <li><h3>Flatland</h3>It focuses on performing tricks on a flat surface without obstacles. It requires a great deal of balance and control.</li>
             <li><h3>Dirt</h3>Less common, it's practiced on dirt tracks with jumps, similar to BMX. It uses more durable equipment.</li>
           </ul>
          </details>
        </div> 
        <div class="titulo2">
          <h1>Scootering Vocabulary</h1>
        </div>
        <div class="flipcard">
          <div class="face front">
            <img src="../Media/PaginaDeportes/scootering2.png" alt="">
          </div>
          <div class="face back">
            <ul>
              <li>Tailwhip: Complete rotation of the base of the scooter while the rider jumps.</li>
              <li>Barspin: Turning the handlebars in the air.</li>
              <li>Bunny hop: Basic jump to take off from the ground without a ramp.</li>
              <li>Manual: Roll only with the rear wheel, maintaining balance.</li>
              <li>Grind: Glide with the base of the scooter over a railing or edge.</li>
              <li>Drop-in: Enter from the top of a ramp.</li>
              <li>Scooter deck: Platform where the feet are placed.</li>
              <li>Fork: Front part that supports the front wheel.</li>
              <li>Clamp: Part that adjusts and fixes the handlebar to the scooter tube.</li>
              <li>Ramp: Ramp used to perform jumps and tricks.</li>
            </ul>
          </div>
        </div>
        <br>
        <br>
        <div class="container3">
          <details>
            <summary class="titulo2">Scootering Rules</summary>
            <ul>
             <li><h3>Wear protective equipment</h3>A helmet, knee pads, elbow pads, and gloves are always recommended, especially in parks or competitions.</li>
             <li><h3>Respect turns</h3>In skate parks or shared spaces, turns must be respected to avoid accidents.</li>
             <li><h3>Caring for the environment</h3>Do not damage public structures and avoid practicing in prohibited areas.</li>
             <li><h3>Maintain control</h3>Do not perform dangerous maneuvers in crowded or busy spaces.</li>
             <li><h3>Follow the park rules</h3>Each skate park may have its own rules that must be respected (schedules, zones, minimum age, etc.).</li>
             <li><h3>Practice with respect</h3>Promote camaraderie and a good atmosphere among riders of all levels.</li>
           </ul>
          </details>
        </div>  
        <div class="titulo2">
          <h1>Conclusion</h1>
        </div>
        <div class="parrafo1">
          <p>
            Scootering is more than a sport; it's a form of urban expression that combines skill, creativity, and style. Born in the streets, it has grown into a culture with its own identity, where every trick reflects effort and personality.
            With respect, passion, and community, scootering continues to gain ground in the youth and extreme sports world.
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
    </section>  
    <div class="grid-language">
        <div class="language"><a href="../Maqueta/scootering.php">+ Español</a></div>
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
<script src="../JS/particulas.js"></script>
</html>