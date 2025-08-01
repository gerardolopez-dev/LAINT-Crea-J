const observer = new IntersectionObserver((entries)=>{
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        } else {
            entry.target.classList.remove('visible');
        }
    });
},
{
    threshold: 0.15
});

const elementos = document.querySelectorAll('.columna1 .noticias, .columna2 .noticias, .divNews, .contenedorLinea1, .footer');

elementos.forEach(elemento => {
    elemento.classList.add('reveal');
    observer.observe(elemento);
});