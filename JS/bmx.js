document.addEventListener('DOMContentLoaded', function() {
    
    var elementos = document.querySelectorAll('.parrafo, .parrafo2, .titulo1 h1, .titulo2, .headerimg, .imagen2, .imagen3, .flipcard, .card, .container3');

    //Esconde los elementos
    for(var i = 0; i < elementos.length; i++) {
        elementos[i].style.opacity = '0';
        elementos[i].style.transform = 'translateY(30px)';
        elementos[i].style.transition = 'all 0.8s ease-out';
    }

    //Se ejecuta cuando hago scroll
    function mostrarElementos() {
        var altoPantalla = window.innerHeight;
        
        for(var i = 0; i < elementos.length; i++) {
            var posicion = elementos[i].getBoundingClientRect();
            
            // Si el elemento está visible y aún no se ha mostrado
            if(posicion.top <= altoPantalla * 0.8 && elementos[i].style.opacity == '0') {
                elementos[i].style.opacity = '1';
                elementos[i].style.transform = 'translateY(0)';
            }
        }
    }

    //Cuando el usuario hace scroll
    window.addEventListener('scroll', mostrarElementos);
    
    setTimeout(mostrarElementos, 100);

    //Título principal
    var titulo = document.querySelector('.bmx h1');
    if(titulo) {
        titulo.style.opacity = '0';
        titulo.style.transform = 'translateY(-20px)';
        titulo.style.transition = 'all 1.5s ease-out';
        
        setTimeout(function() {
            titulo.style.opacity = '1';
            titulo.style.transform = 'translateY(0)';
        }, 800);
    }
});