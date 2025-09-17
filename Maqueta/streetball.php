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
    <link rel="stylesheet" href="../CSS/particulasOtro.css">
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
        <hr class="separador">
        <h4 class="cambioColor">Cambiar Tema</h4>
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
            ¿Alguna vez te has preguntado cómo el streetball se convirtió en una cultura vibrante y un deporte tan popular en las calles de todo el mundo? 
            Sigue leyendo para descubrir la fascinante historia, las modalidades, términos y normas de este apasionante juego.
          </p>
        </div>
        <div class="contenedorLinea1">
          <div class="lineahorizontal"></div>
        </div>
        <br>
        <div class="container3">
          <details>
            <summary class="titulo2">La historia del Streetball</summary>
            <p class="parrafo2">
              El streetball es una versión callejera del baloncesto que nació en los barrios urbanos de Estados Unidos, especialmente en Nueva York durante los años 50. 
              Se juega en parques y calles, con reglas más flexibles y un estilo libre que destaca la creatividad y el talento individual. Es conocido por sus jugadas espectaculares y su fuerte conexión con la cultura urbana.
            </p>
            <p class="parrafo2">
              En los años 90 ganó fama mundial gracias a torneos como los de Rucker Park y a las mixtapes de AND1, que mostraban a jugadores con habilidades impresionantes. 
              Hoy el streetball es una expresión cultural que combina deporte, música, moda y arte.
            </p>  
          </details>
          <details>
            <summary class="titulo2">La cultura del StreetBall</summary>
            <p class="parrafo2">
              La cultura del streetball es una expresión urbana que combina deporte, estilo, música y comunidad. 
              Va más allá del juego: es una forma de vida nacida en las calles, donde la creatividad, el respeto y la superación personal son fundamentales.
            </p>
            <p class="parrafo2">
              En esta cultura, el estilo importa tanto como la habilidad. Los jugadores buscan destacarse con movimientos únicos, ropa llamativa y una actitud auténtica. 
              La música, especialmente el hip-hop, suele acompañar los partidos, creando un ambiente energético y vibrante.
            </p>
          </details>
          <center>
            <img src="../Media/PaginaDeportes/streetball.png" class="imagen1">
          </center>
        </div>
        <br>
        <div class="container3">
          <details>
            <summary class="titulo2">Modalidades del Streetball</summary>
            <ul>
             <li><h3>1 vs 1 (Uno contra uno)</h3>Duelo individual donde gana quien llegue primero a cierta cantidad de puntos o quien tenga más al finalizar el tiempo. Se enfoca en el manejo del balón y el talento individual.</li>
             <li><h3>3 vs 3 (Tres contra tres)</h3>Muy popular, se juega en media cancha con tres jugadores por equipo. Es más rápido e intenso que el baloncesto tradicional.</li>
             <li><h3>5 vs 5 (Cinco contra cinco)</h3>Similar al baloncesto tradicional, pero con reglas más libres y estilo callejero. Suele jugarse en canchas completas.</li>
             <li><h3>Torneo por eliminación</h3>Equipos se enfrentan en rondas eliminatorias hasta que solo uno queda campeón. Muy común en eventos callejeros.</li>
             <li><h3>Duelos de habilidades (freestyle)</h3>Jugadores compiten mostrando trucos, dribles y movimientos creativos. Se valora el estilo, la originalidad y el control del balón.</li>
             <li><h3>Tiro por retos o apuestas</h3>Se hacen desafíos entre jugadores para anotar tiros difíciles desde diferentes posiciones o con condiciones especiales.</li>
           </ul>
         </details>
        </div> 
        <div class="titulo2">
          <h1>Normas del Streetball</h1>
        </div>
        <div class="flipcard">
         <div class="face front">
            <img src="../Media/PaginaDeportes/streetball3.png" alt="">
          </div>
          <div class="face back">
            <ul>
              <li>Se juega en media cancha (usualmente en 1 vs 1, 2 vs 2 o 3 vs 3).</li>
              <br>
              <li>Gana el primero en llegar a un número de puntos (por ejemplo, 11 o 21).</li>
              <br>
              <li>Los tiros valen 1 y 2 puntos (no 2 y 3 como en el baloncesto tradicional).</li>
              <br>
              <li>Después de cada canasta, cambia la posesión.</li>
              <br>
              <li>No hay árbitros, se juega con respeto y se resuelven las faltas entre jugadores.</li>
              <br>
              <li>No hay tiempo fijo, pero puede jugarse por tiempo o hasta cierto puntaje.</li>
            </ul>
          </div>  
        </div>
        <div class="titulo2">
          <h1>Terminos del Streetball</h1>
        </div>
        <div class="flipcard">
          <div class="face front">
            <img src="../Media/PaginaDeportes/streetball2.png">
          </div>
          <div class="face back">
            <ul>
              <li>Crossover: Cambio rápido de dirección con el balón para engañar al defensor.</li>
              <li>Fadeaway: Tiro en suspensión alejándose del defenso</li>
              <li>Dunk: Clavada o mate, encestar saltando y metiendo el balón con fuerza.</li>
              <li>Alley-oop: Pase elevado que otro jugador recibe en el aire y encesta.</li>
              <li>No-look pass: Pase sin mirar, para sorprender al rival.</li>
              <li>Iso (aislamiento): Jugada individual sin ayuda del equipo, uno contra uno.</li>
              <li>Trash talk: Provocación verbal entre jugadores.</li>
              <li>Handles: Habilidad para controlar y mover el balón con estilo.</li>
              <li>Street name: Apodo usado en las canchas, parte de la identidad del jugador.</li>
              <li>And one: Canasta más falta, con opción de tiro libre adicional.</li>
            </ul>
          </div>
        </div>
        <div class="titulo2">
          <h1>Conclusión</h1>
        </div>
        <div class="parrafo1">
          <p>
            El streetball es más que un deporte: es una forma de expresión urbana que combina talento, creatividad y cultura. 
            Surgido en las calles, ha dado voz a comunidades y jugadores que buscan destacarse con estilo propio. Su esencia libre, su conexión con la música y la moda, y su espíritu de superación lo convierten en un símbolo de identidad y pasión en todo el mundo.
          </p>
        </div>
        <div class="container2">
          <div class="card">
            <a href="../Maqueta/deportes.php">
              <img src="../Media/PaginaDeportes/skate.png" alt="streetball" class="cardimg"> 
            </a>
           <div class="cardcontent">
             <a href="../Maqueta/deportes.php">
               <h2 class="titulo3">Skateboarding</h2> 
             </a>
             <p class="parrafo4">
               ¿Alguna vez te has preguntado cómo el skateboarding se transformó en una subcultura vibrante y un deporte reconocido en todo el mundo?
               Sigue leyendo para descubrir la fascinante historia, las modalidades, términos y normas de este apasionante estilo de vida sobre ruedas.
             </p>
           </div>
          </div>
          <div class="card">
            <a href="../Maqueta/scootering.php">
              <img src="../Media/PaginaDeportes/scootering.png" alt="Scootering" class="cardimg"> 
            </a>
            <div class="cardcontent">
              <a href="../Maqueta/scootering.php">
                <h2 class="titulo3">Scootering</h2>
              </a>
              <p class="parrafo4">
                ¿Te has detenido a pensar cómo el scootering evolucionó hasta convertirse en una cultura urbana llena de energía y creatividad que conquista cada vez más espacios en ciudades de todo el mundo?
                Acompáñanos y descubre el origen de este emocionante movimiento, sus distintas formas de práctica, el vocabulario que lo define y las reglas que lo convierten en una verdadera forma de expresión sobre ruedas.
              </p> 
            </div>
          </div>   
          <div class="card">
            <a href="../Maqueta/bmx.php">
              <img src="../Media/PaginaDeportes/bmx.png" alt="bmx" class="cardimg"> 
            </a> 
            <div class="cardcontent">
             <a href="../Maqueta/bmx.php">
               <h2 class="titulo3">BMX</h2> 
             </a>
             <p class="parrafo4">
               ¿Alguna vez has pensado cómo el BMX pasó de ser una actividad recreativa a convertirse en una cultura urbana cargada de estilo, adrenalina y pasión que se vive en calles, parques y espacios públicos de todo el mundo?
               Descubre cómo surgió este vibrante movimiento, las diferentes formas en que se practica, los términos que lo identifican y las normas que lo transforman en una auténtica forma de expresión sobre dos ruedas.
             </p>
           </div>
         </div>
       </div>
    </div>
  </section>   
  <div class="grid-language">
    <div class="language"><a href="../Maqueta EN/streetball.php">+ English</a></div>
  </div>
  <div class="footer">
    <hr>
    <h2>Laint®</h2>
    <p>Las imágenes utilizadas en este proyecto son únicamente para fines educativos y sin intención de lucro</p>
  </div>
  <div class="overlay" id="overlay"></div>

</body>
<script src="../JS/streetball.js"></script>
<script src="../JS/menuDesplegable.js"></script>
<script src="../JS/boton.js"></script>
<script src="../JS/particulas.js"></script>
</html>