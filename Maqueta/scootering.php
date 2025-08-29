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
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
</head>
<body>
    <script src="../JS/scootering.js"></script>
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
            ¿Te has detenido a pensar cómo el scootering evolucionó hasta convertirse en una cultura urbana llena de energía y creatividad que conquista cada vez más espacios en ciudades de todo el mundo?
            Acompáñanos y descubre el origen de este emocionante movimiento, sus distintas formas de práctica, el vocabulario que lo define y las reglas que lo convierten en una verdadera forma de expresión sobre ruedas.
          </p>
        </div>
        <div class="contenedorLinea1">
         <div class="lineahorizontal"></div>
        </div>
        <br>
        <div class="container3">
         <details>
           <summary class="titulo2">La historia del Scootering</summary>
           <p class="parrafo2">
             El scootering, o uso del scooter como deporte, comenzó a desarrollarse a finales de los años 90 y principios de los 2000, cuando jóvenes empezaron a modificar scooters tradicionales para hacer trucos similares a los del skate o el BMX. 
             Al principio, se usaban scooters plegables de aluminio, pero con el tiempo surgieron modelos más resistentes diseñados específicamente para saltos, acrobacias y uso en rampas.
           </p>
           <p class="parrafo2">
             El scootering ganó popularidad rápidamente gracias a parques de skate, videos en internet y competencias organizadas. 
             En lugares como Estados Unidos, Australia y Europa, se formaron comunidades de riders que convirtieron el scooter en un medio de expresión urbana. Con el tiempo, surgieron marcas especializadas, eventos internacionales y figuras destacadas que ayudaron a profesionalizar este deporte.
           </p>
           <p class="parrafo2">
             Hoy, el scootering es parte de la cultura urbana juvenil, con estilos que incluyen street (trucos en la calle) y park (acrobacias en rampas), y continúa creciendo como un deporte extremo con identidad propia.
           </p>
         </details>
         <details>
           <summary class="titulo2">La cultura del Scootering</summary>
           <p class="parrafo2">
             La cultura del scootering es una expresión urbana juvenil que combina deporte, creatividad y estilo de vida. Nacida en las calles y skateparks, valora la libertad, la originalidad y la comunidad entre riders. 
             Los trucos, la personalización del scooter y la forma de vestir forman parte de su identidad.
           </p>
           <p class="parrafo2">
             Está fuertemente influenciada por otras culturas urbanas como el skate y el BMX, y se apoya en redes sociales y videos para compartir logros y conectar con otros. 
             Más que un deporte, el scootering es una forma de vivir, moverse y expresarse dentro de la ciudad.
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
            <summary class="titulo2">Formas de practica del Scootering</summary>
            <ul>
             <li><h3>Street</h3>Se practica en entornos urbanos usando escaleras, barandales, bancas y bordillos. Los trucos son técnicos y creativos.</li>
             <li><h3>Park</h3>Se realiza en skateparks con rampas, bowls y quarter pipes. Aquí se destacan los saltos altos y trucos en el aire.</li>
             <li><h3>Flatland</h3>Se enfoca en realizar trucos sobre superficie plana sin usar obstáculos. Requiere mucho equilibrio y control.</li>
             <li><h3>Dirt</h3>Menos común, se practica en pistas de tierra con saltos, similar al BMX. Se usa equipo más resistente.</li>
           </ul>
          </details>
        </div> 
        <div class="titulo2">
          <h1>Vocabulario del Scootering</h1>
        </div>
        <div class="flipcard">
          <div class="face front">
            <img src="../Media/PaginaDeportes/scootering2.png" alt="">
          </div>
          <div class="face back">
            <ul>
              <li>Tailwhip: Giro completo de la base del scooter mientras el rider salta.</li>
              <li>Barspin: Giro del manillar en el aire.</li>
              <li>Bunny hop: Salto básico para despegar del suelo sin rampa.</li>
              <li>Manual: Rodar solo con la rueda trasera manteniendo el equilibrio.</li>
              <li>Grind: Deslizarse con la base del scooter sobre una baranda o borde.</li>
              <li>Drop-in: Entrar desde lo alto de una rampa.</li>
              <li>Scooter deck: Plataforma donde se colocan los pies.</li>
              <li>Fork: Parte delantera que sostiene la rueda delantera.</li>
              <li>Clamp: Pieza que ajusta y fija el manillar al tubo del scooter.</li>
              <li>Ramp: Rampa usada para realizar saltos y trucos.</li>
            </ul>
          </div>
        </div>
        <br>
        <br>
        <div class="container3">
          <details>
            <summary class="titulo2">Reglas del Scootering</summary>
            <ul>
             <li><h3>Usar equipo de protección</h3>Siempre se recomienda casco, rodilleras, coderas y guantes, sobre todo en parques o competencias.</li>
             <li><h3>Respetar turnos</h3>En skateparks o espacios compartidos, se deben respetar los turnos para evitar accidentes.</li>
             <li><h3>Cuidar el entorno</h3>No dañar estructuras públicas y evitar practicar en zonas prohibidas.</li>
             <li><h3>Mantener el control</h3>No realizar maniobras peligrosas en espacios con mucha gente o tránsito.</li>
             <li><h3>Seguir las reglas del parque</h3>Cada skatepark puede tener normas propias que deben respetarse (horarios, zonas, edad mínima, etc.).</li>
             <li><h3>Practicar con respeto</h3>Promover el compañerismo y el buen ambiente entre riders de todos los niveles.</li>
           </ul>
          </details>
        </div>  
        <div class="titulo2">
          <h1>Conclusión</h1>
        </div>
        <div class="parrafo1">
          <p>
            El scootering es más que un deporte; es una forma de expresión urbana que combina habilidad, creatividad y estilo. Nacido en las calles, ha crecido hasta convertirse en una cultura con identidad propia, donde cada truco refleja esfuerzo y personalidad. 
            Con respeto, pasión y comunidad, el scootering sigue ganando espacio en el mundo juvenil y en la escena de los deportes extremos.
          </p>
        </div> 
        <div class="container2">
          <div class="card">
            <a href="../Maqueta/deportes.php">
              <img src="../Media/PaginaDeportes/skate.png" alt="skate" class="cardimg"> 
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
            <a href="../Maqueta/streetball.php">
              <img src="../Media/PaginaDeportes/streetball1.png" alt="streetball" class="cardimg"> 
            </a>
            <div class="cardcontent">
              <a href="../Maqueta/streetball.php">
                <h2 class="titulo3">Streetball</h2>
              </a>
              <p class="parrafo4">
                ¿Alguna vez te has preguntado cómo el streetball se convirtió en una cultura vibrante y un deporte tan popular en las calles de todo el mundo? 
                Sigue leyendo para descubrir la fascinante historia, las modalidades, términos y normas de este apasionante juego.
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
        <div class="language"><a href="../Maqueta EN/scootering.php">+ English</a></div>
    </div>
    <div class="footer">
      <hr>
      <h2>Laint®</h2>
      <p>Las imágenes utilizadas en este proyecto son únicamente para fines educativos y sin intención de lucro</p>
    </div>
    <div class="overlay" id="overlay"></div>    
</body>
<script src="../JS/menuDesplegable.js"></script> 
<script src="../JS/boton.js"></script>
</html>