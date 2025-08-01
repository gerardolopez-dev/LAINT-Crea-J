const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        } else {
            entry.target.classList.remove('visible'); 
        }
    });
}, {
    threshold: 0.40,
});

function animateAll() {
    const elementos = document.querySelectorAll('.marcasDiv, .prendas, .footer');
    
    elementos.forEach(elemento => {
        elemento.classList.add('reveal');
        observer.observe(elemento);
    });
}

document.addEventListener('DOMContentLoaded', animateAll);
