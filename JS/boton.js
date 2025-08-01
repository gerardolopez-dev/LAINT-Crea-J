const contenedorTema = document.getElementById('contenedor-tema');
const toggle = document.querySelector('.toggle');

function aplicarTema() {
    const temaGuardado = localStorage.getItem('tema');
    
    if (temaGuardado === 'oscuro') {
        document.documentElement.setAttribute('data-theme', 'dark');
        activarTemaOscuro();
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        activarTemaClaro();
    }
}

function activarTemaOscuro() {
    toggle.style.left = '40px';
}

function activarTemaClaro() {
    toggle.style.left = '0px';
}

function cambiarTema() {
    const temaActual = document.documentElement.getAttribute('data-theme');
    
    if (temaActual === 'light') {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('tema', 'oscuro');
        activarTemaOscuro();
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('tema', 'claro');
        activarTemaClaro();
    }
}

aplicarTema();

contenedorTema.addEventListener('click', cambiarTema);