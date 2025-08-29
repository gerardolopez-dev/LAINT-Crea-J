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
    <title>Deportes</title>
    <link rel="Stylesheet" href="../CSS/deportes.css">
    <link rel="shortcut icon" href="../Media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/boton-theme.css">
</head>
<body id="cuerpo">
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
    <header>
        <div class="headerdiv">
            <img src="../Media/PaginaDeportes/fondo.jpg" class="imagendiv">
        </div>
        <div class="deportes">
         <h1>DEPORTES</h1>
        </div>
        <div class="noticias">
         <h1>NOTICIAS</h1>
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
                <p>¿Alguna vez te has preguntado cómo el skateboarding se transformó en una subcultura vibrante y un deporte reconocido en todo el mundo?
                  Sigue leyendo 
                  para descubrir la fascinante historia, las modalidades, términos y normas de este apasionante estilo de vida sobre ruedas.
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
                    <summary class="titulo2">La historia del skateboarding</summary>
                    <p class="parrafo2">
                       El skateboarding, o monopatinaje, nació en California durante los años 50, cuando los surfistas buscaban una alternativa para los días sin olas. 
                       Usando tablas con ruedas, comenzaron a "surfear" el asfalto, lo que dio origen a una nueva forma de expresión deportiva y cultural.
                       El skateboarding (o skate abreviado) es un deporte que consiste en desplazarse sobre una tabla por el suelo o por superficies habilitadas para su práctica como rampas, ollas o barras entre muchas otras. 
                       Durante el desplazamiento se pueden realizar varios trucos, estos trucos consisten en levantar la tabla del suelo y hacer figuras, posiciones o piruetas en el aire.  
                    </p>
                </details>
                <details>
                    <summary class="titulo2">La cultura del skateboarding.</summary>
                    <p class="parrafo2">
                     El skateboarding no es solo un deporte: es una cultura con identidad propia. Desde sus orígenes en las calles hasta los skateparks actuales, ha representado libertad, creatividad y resistencia ante lo convencional
                     Los skaters forman una comunidad diversa y unida, donde no importa la edad, el origen ni el nivel. Lo que realmente cuenta es la pasión por rodar, el esfuerzo constante por dominar nuevos trucos y la autenticidad al expresarse sobre la tabla.
                     El estilo de vida skater también se refleja en la ropa, la música (como el punk, hip-hop o lo-fi), el arte urbano y hasta en la forma de hablar. Más allá de las competiciones, el skate es una forma de expresión personal, una manera de ver el mundo y de conquistar cada rincón del espacio urbano.  
                    </p>
                </details>
            </div> 
            <div class="titulo2">
              <h2>Tipos de skateboarding.</h2>
            </div>
            <div class="flipcard">
                <div class="face front">
                    <img src="../Media/PaginaDeportes/skate2.png" class="imagen2" alt="">  
                </div>
                <div class="face back">
                    <ul> 
                        <li class="lista1"><strong>Street:</strong> Trucos en escaleras, barandillas, bordillos y bancos.</li>
                        <br>
                        <li class="lista1"><strong>Vert:</strong> Ramps gigantes y medio tubos.</li>
                        <br>
                        <li class="lista1"><strong>Park:</strong> Combinación de obstáculos en skateparks.</li>
                        <br>
                        <li class="lista1"><strong>Freestyle:</strong> Trucos técnicos sobre superficie plana.</li>
                        <br>
                        <li class="lista1"><strong>ruising/longboard:</strong>C Más relajado, para moverse o descensos.</li>
                    </ul>
              </div>
            </div>
            <br>
            <br>
            <div class="container3">
               <details>
                 <summary class="titulo2">Normas del skateboarding</summary>
                  <ul>
                     <li><h3>Uso de equipo de protección:</h3>Siempre se recomienda usar casco, rodilleras, coderas y muñequeras, sobre todo si se es principiante o menor de edad.</li>
                     <li><h3>Respeto por los demás:</h3>Esperar tu turno si hay más personas en el parque o rampa.<br>No interrumpir a otros mientras están en medio de un truco.</li>
                     <li><h3>Uso adecuado del espacio:</h3>No bloquear rampas, barandales ni líneas de deslizamiento.<br>No patinar en zonas prohibidas (algunas plazas o edificios tienen restricciones).</li>
                     <li><h3>Mantener el orden y la limpieza:</h3>No dejar basura ni dañar la infraestructura del parque o la calle.<br>No usar cera en superficies sin permiso.</li>
                     <li><h3>Responsabilidad personal:</h3>Conocer tus propios límites para evitar accidentes.<br>Ser consciente del entorno (peatones, vehículos, obstáculos).</li>
                   </ul> 
               </details>
            </div>
            <div class="titulo2">
                <h2>Términos básicos del skateboarding</h2>
            </div>
            <div class="flipcard">
                <div class="face front">
                  <img src="../Media/PaginaDeportes/skatepark.png" alt="">
                </div>
                <div class="face back">
                  <ul>
                     <li>Skater: Persona que practica skateboarding.</li>
                     <li>Skatepark: Lugar con rampas, barandales y obstáculos diseñados para patinar.</li>
                     <li>Truco (Trick): Movimiento o maniobra realizada con la patineta.</li>
                     <li>Deck: Tabla del skate.</li>
                     <li>Trucks: Ejes metálicos que conectan las ruedas con la tabla.</li>
                     <li>Grip tape:	Cinta adherente que va en la parte superior de la tabla, da tracción al pie.</li>
                     <li>Wheels: Ruedas del skate.</li>
                     <li>Bearings: Rodamientos que permiten que las ruedas giren.</li>
                     <li>Set up: Conjunto completo de partes del skate: tabla, ejes, ruedas, etc.</li>
                   </ul>
                </div>
            </div>
            <div class="titulo2">
              <h2>Conclusión</h2>
            </div>
            <div class="parrafo2">
              <p>
                 El skateboarding es mucho más que una actividad deportiva: es un fenómeno cultural que ha moldeado e inspirado distintas formas de arte y expresión. Ha influido en cómo se filma, se fotografía, se viste, se diseña, se escribe y se vive la ciudad. 
                 Su presencia en los medios no solo muestra trucos, sino que cuenta historias, retrata comunidades y transforma lo cotidiano en extraordinario. La tabla de skate se ha convertido en una herramienta de libertad creativa que rueda no solo sobre el pavimento, sino sobre la imaginación colectiva de una cultura global.
              </p>  
            </div>
            <div class="contenedorLinea1">
             <div class="lineahorizontal"></div>
            </div>
            <br>
            <div class="container2">
              <div class="card">
                 <a href="../Maqueta/streetball.php">
                     <img src="../Media/PaginaDeportes/streetball1.png" alt="streetball" class="cardimg"> 
                 </a>
                 <div class="cardcontent">
                       <a href="../Maqueta/streetball.php">
                         <h2 class="titulo3">StreetBall</h2> 
                       </a>
                     <p class="parrafo4">
                         ¿Alguna vez te has preguntado cómo el streetball se convirtió en una cultura vibrante y un deporte tan popular en las calles de todo el mundo? 
                         Sigue leyendo para descubrir la fascinante historia, las modalidades, términos y normas de este apasionante juego.
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
        <div class="grid-language">
            <div class="language" ><a href="../Maqueta EN/deportes.php">+ English</a></div>
        </div>
        <div class="footer">
            <hr>
            <h2>Laint®</h2>
            <p>Las imágenes utilizadas en este proyecto son únicamente para fines educativos y sin intención de lucro</p>
        </div>
        <div class="overlay" id="overlay"></div>
        <script src="../JS/deportes.js"></script>
        <script src="../JS/boton.js"></script>
</body>
<script src="../JS/menuDesplegable.js"></script>
</html>