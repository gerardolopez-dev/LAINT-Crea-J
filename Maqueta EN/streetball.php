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
    <title>StreetBall</title>
    <link rel="Stylesheet" href="../CSS/streetball.css">
    <link rel="stylesheet" href="../CSS/boton-theme.css">
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
    <br>
    <header>
        <div class="streetball">
         <h1>STREETBALL</h1>
        </div>
        <br>
        <br>
        <div class="headerimage">
            <center>
             <img src="../Media/PaginaDeportes/streetball1.png" class="headerimg">
            </center>            
        </div>
    </header>
    <section>
      <div class="container">
        <div class="parrafo">
          <p>
            Have you ever wondered how streetball became such a vibrant culture and popular sport on the streets around the world?
            Read on to discover the fascinating history, forms, terms, and rules of this exciting game.
          </p>
        </div>
        <div class="contenedorLinea1">
          <div class="lineahorizontal"></div>
        </div>
        <br>
        <div class="container3">
          <details>
            <summary class="titulo2">The history of Streetball</summary>
            <p class="parrafo2">
              Streetball is a street version of basketball that originated in urban neighborhoods in the United States, especially in New York City during the 1950s.
              It is played in parks and streets, with more flexible rules and a freestyle style that emphasizes creativity and individual talent. It is known for its spectacular plays and its strong connection to urban culture.
            </p>
            <p class="parrafo2">
              In the 1990s, it gained worldwide fame thanks to tournaments like those at Rucker Park and AND1's mixtapes, which showcased players with impressive skills.
              Today, streetball is a cultural expression that combines sport, music, fashion, and art.
            </p>  
          </details>
          <details>
            <summary class="titulo2">The culture of StreetBall</summary>
            <p class="parrafo2">
             Streetball culture is an urban expression that combines sport, style, music, and community.
             It goes beyond the game: it's a way of life born in the streets, where creativity, respect, and personal growth are fundamental.
            </p>
            <p class="parrafo2">
              In this culture, style matters as much as skill. Players strive to stand out with unique moves, eye-catching clothing, and an authentic attitude.
              Music, especially hip-hop, often accompanies games, creating an energetic and vibrant atmosphere.
            </p>
          </details>
          <center>
            <img src="../Media/PaginaDeportes/streetball.png" class="imagen1">
          </center>
        </div>
        <br>
        <div class="container3">
          <details>
            <summary class="titulo2">Streetball Modalities</summary>
            <ul>
             <li><h3>1 vs 1 (One against one)</h3>An individual duel where the first person to reach a certain number of points or whoever has the most points at the end of the time wins. It focuses on ball handling and individual talent.</li>
             <li><h3>3 vs 3 (Three against three)</h3>Very popular, it's played on a half-court with three players per team. It's faster and more intense than traditional basketball.</li>
             <li><h3>5 vs 5 (Five against five)</h3>Similar to traditional basketball, but with looser rules and a street-style style. It's usually played on full courts.</li>
             <li><h3>Elimination Tournament</h3>Teams compete in elimination rounds until only one team emerges as the champion. This is very common in street events.</li>
             <li><h3>Skill Duels (Freestyle)</h3>Players compete by showcasing tricks, dribbles, and creative moves. Style, originality, and ball control are valued.</li>
             <li><h3>Shooting for challenges or bets</h3>Players are challenged to score difficult shots from different positions or under special conditions.</li>
           </ul>
         </details>
        </div> 
        <div class="titulo2">
          <h1>Streetball Rules</h1>
        </div>
        <div class="flipcard">
         <div class="face front">
            <img src="../Media/PaginaDeportes/streetball3.png" alt="">
          </div>
          <div class="face back">
            <ul>
              <li>It is played on half court (usually 1 vs 1, 2 vs 2 or 3 vs 3).</li>
              <br>
              <li>The first person to reach a certain number of points (for example, 11 or 21) wins.</li>
              <br>
              <li>Shots are worth 1 and 2 points (not 2 and 3 as in traditional basketball).</li>
              <br>
              <li>After each basket, possession changes.</li>
              <br>
              <li>There are no referees, the game is played with respect, and fouls between players are resolved.</li>
              <br>
              <li>There is no fixed time, but it can be played for time or up to a certain score.</li>
            </ul>
          </div>  
        </div>
        <div class="titulo2">
          <h1>Streetball Terms</h1>
        </div>
        <div class="flipcard">
          <div class="face front">
            <img src="../Media/PaginaDeportes/streetball2.png">
          </div>
          <div class="face back">
            <ul>
              <li>Crossover: Quick change of direction with the ball to deceive the defender.</li>
              <li>Fadeaway: Jump shot away from the defender</li>
              <li>Dunk: Dunk or dunk, to score by jumping and putting the ball in with force.</li>
              <li>Alley-oop: A high pass that another player receives in the air and scores.</li>
              <li>No-look pass: Pass without looking, to surprise the opponent.</li>
              <li>Iso (isolation): Individual play without team help, one on one.</li>
              <li>Trash talk: Verbal provocation between players.</li>
              <li>Handles: Ability to control and move the ball with style.</li>
              <li>Street name: Nickname used on the courts, part of the player's identity.</li>
              <li>And one: Basket plus foul, with additional free throw option.</li>
            </ul>
          </div>
        </div>
        <div class="titulo2">
          <h1>Conclusion</h1>
        </div>
        <div class="parrafo1">
          <p>
            Streetball is more than a sport: it's a form of urban expression that combines talent, creativity, and culture.
            Emerging from the streets, it has given voice to communities and players seeking to stand out with their own style. Its free spirit, its connection to music and fashion, and its spirit of self-improvement make it a symbol of identity and passion around the world.
          </p>
        </div>
        <div class="container2">
          <div class="card">
            <a href="../Maqueta EN/deportes.php">
              <img src="../Media/PaginaDeportes/skate.png" alt="streetball" class="cardimg"> 
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
  </section>   
  <div class="grid-language">
    <div class="language"><a href="../Maqueta/streetball.php">+ Español</a></div>
  </div>
  <div class="footer">
    <hr>
    <h2>Laint®</h2>
    <p>The images used in this project are for educational purposes only and not intended for profit</p>
  </div>
  <div class="overlay" id="overlay"></div>

</body>
<script src="../JS/streetball.js"></script>
<script src="../JS/menuDesplegable.js"></script>
<script src="../JS/boton.js"></script>
</html>