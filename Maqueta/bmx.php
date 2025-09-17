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
                 ¿Alguna vez has pensado cómo el BMX pasó de ser una actividad recreativa a convertirse en una cultura urbana cargada de estilo, adrenalina y pasión que se vive en calles, parques y espacios públicos de todo el mundo?
                 Descubre cómo surgió este vibrante movimiento, las diferentes formas en que se practica, los términos que lo identifican y las normas que lo transforman en una auténtica forma de expresión sobre dos ruedas.
             </p>
            </div>
           <div class="contenedorLinea1">
             <div class="lineahorizontal"></div>
           </div>
           <br>
           <div class="container3">
             <details>
                <summary class="titulo2">La historia del bmx</summary>
                <p>
                   El BMX (Bicycle Motocross) nació en California, Estados Unidos, a finales de los años 60. Surgió cuando niños y jóvenes empezaron a imitar las carreras de motocross usando bicicletas en terrenos de tierra. 
                   Estas bicicletas eran más pequeñas y resistentes, lo que permitía saltos, derrapes y maniobras extremas.
                </p>
                <p>
                   En los años 70, el BMX se popularizó rápidamente y comenzaron a organizarse carreras oficiales, dando origen al BMX racing. 
                   Poco después, surgió el freestyle, una modalidad enfocada en trucos y acrobacias en rampas, calles y skateparks.
                </p>
                <p>
                   Con el tiempo, el BMX se convirtió en un deporte reconocido mundialmente, con competencias profesionales, patrocinadores y presencia en los X Games y los Juegos Olímpicos. 
                   Hoy, el BMX es una cultura que mezcla deporte, estilo y vida urbana.
                </p>
             </details>
             <details>
                <summary class="titulo2">Cultura del bmx</summary>
                <p>
                   La cultura del BMX es una forma de vida urbana que combina deporte extremo, libertad y creatividad. 
                   Nació en las calles y pistas de tierra, y se caracteriza por la pasión por las bicicletas, los trucos y el estilo personal.
                </p>
                <p>
                   Los riders valoran la autosuperación, el compañerismo y el respeto en cada práctica. Además, el BMX está estrechamente ligado a la música, la moda callejera y el arte urbano. 
                   No solo es un deporte, sino una comunidad donde cada truco expresa identidad y actitud.
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
                <summary class="titulo2">Formas de practica del BMX</summary>
                <ul>
                   <li><h3>Racing</h3>Carreras en pistas de tierra con curvas y saltos. Se compite por velocidad</li>
                   <li><h3>Freestyle</h3>Enfocado en trucos y acrobacias. Se divide en varias submodalidades:</li>
                   <ul>
                      <li>Park: Se practica en skateparks con rampas y obstáculos.</li>
                      <li>Street: En espacios urbanos usando barandas, escaleras y muros.</li>
                      <li>Flatland: Trucos técnicos en suelo plano, sin rampas.</li>
                      <li>Dirt Jump: Saltos y trucos en rampas de tierra.</li>
                      <li>Vert: Maniobras en medias tuberías (half-pipe).</li>
                   </ul>
                </ul> 
              </details>
           </div>
           <div class="titulo2">
             <h1>Terminos que identifican al BMX</h1>
           </div>
           <div class="flipcard">
             <div class="face front">
                <img src="../Media/PaginaDeportes/bmx2.png" alt="">
             </div>
             <div class="face back">
                <ul>
                 <li>Bunny hop: Salto básico sin rampa.</li>
                 <li>Tailwhip: La bicicleta gira sobre su eje mientras el rider salta.</li>
                 <li>Barspin: Giro completo del manubrio en el aire.</li>
                 <li>Grind: Deslizamiento sobre bordes o barandas con los pegs.</li>
                 <li>Manual: Rodar solo con la rueda trasera sin pedalear.</li>
                 <li>Fakie: Ir hacia atrás manteniendo el equilibrio.</li>
                 <li>Air: Truco realizado en el aire después de una rampa.</li>
                 <li>Half-pipe: Estructura en forma de “U” usada para trucos aéreos.</li>
                 <li>Pegs: Tubos en los ejes usados para pararse o deslizarse.</li>
                 <li>Drop-in: Entrada desde lo alto de una rampa.</li>
                </ul>
             </div>
           </div>
           <br>
           <br>
           <div class="container3">
             <details>
               <summary class="titulo2">Normas del BMX</summary>
               <ul>
                <li><h3>Usar equipo de protección</h3>Siempre se debe llevar casco, y en muchas modalidades también rodilleras, coderas y guantes.</li>
                <li><h3>Revisar el estado de la bicicleta</h3>Asegurarse de que frenos, llantas y componentes estén en buen estado antes de montar.</li>
                <li><h3>Respetar los espacios y turnos</h3>En parques o pistas, se debe esperar el turno y evitar cruzarse en el camino de otros riders.</li>
                <li><h3>Evitar maniobras peligrosas en zonas no adecuadas</h3>No realizar trucos en lugares concurridos o inseguros.</li>
                <li><h3>Cuidar el entorno</h3>No dañar estructuras públicas ni dejar basura.</li>
                <li><h3>Seguir las reglas de cada pista o parque</h3>Algunas instalaciones tienen normas específicas de uso que deben respetarse.</li>
                <li><h3>Practicar con respeto</h3>Fomentar el compañerismo y ayudar a los riders con menos experiencia.</li>
             </ul>
             </details>
           </div>
           <div class="titulo2">
             <h1>Conclusión</h1>
           </div>
           <div class="parrafo1">
             <p>
                El BMX es más que un deporte extremo; es una cultura que representa libertad, pasión y estilo de vida. Nacido en las calles y pistas, permite a los riders expresarse a través de la velocidad, los trucos y la creatividad. 
                Con diversas formas de práctica y una fuerte comunidad, el BMX sigue creciendo como símbolo de superación, identidad y conexión urbana.
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
                 <a href="../Maqueta/scootering.php">
                     <img src="../Media/PaginaDeportes/scootering.png" alt="scootering" class="cardimg"> 
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
            </div>      
        </div>
    </section>
    <div class="grid-language">
        <div class="language"><a href="../Maqueta EN/bmx.php">+ English</a></div>
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