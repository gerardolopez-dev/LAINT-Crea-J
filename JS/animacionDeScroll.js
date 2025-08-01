// "Al cargar la pagina"
window.onload = function() {
    
//(Explicacion de Adán:) En esta parte es donde se identifica las partes de mi codigo de cultura
//Por medio de una variable los identifica
    var elementos = document.querySelectorAll('h1, p, img');
    
//(Otra explicacion de lo que va hacer este codigo): aqui es donde se oculta cada elemento de mi pagina "Cultura"
    elementos.forEach(e => {
        e.style.opacity = '0';
        e.style.transform = 'translateY(30px)';
        e.style.transition = 'all 0.9s ease';
    });
    
//(Explicaciond de Adán:) Aqui da la visibilidad por medio de la ventana.
    function animar() {
        elementos.forEach(e => {
            var rect = e.getBoundingClientRect();
            if (rect.top < window.innerHeight) {
                e.style.opacity = '1';
                e.style.transform = 'translateY(0)';
            }
        });
    }

    //(Parte final) Cuando el usuario haga la funcion de bajar o scrollear
   window.onscroll = animar;

   //Este hace que se ejecute el codigo de la visibilidad
    animar(); 
};