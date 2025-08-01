const productos = [
    {
        id: "fly-crew-01",
        titulo: "RED FLY",
        url: "https://www.instagram.com/flycrewculture/",
        imagen: "../Media/Prendas/FlyCrewCulture/flyCrewRoja.png",
        imagenModelo: "../Media/Prendas/FlyCrewCulture/flyCrewModeloRoja.png",
        precio: 89.99,
    },
    {
        id: "fly-crew-02",
        titulo: "BLACK FLY",
        url: "https://www.instagram.com/flycrewculture/",
        imagen: "../Media/Prendas/FlyCrewCulture/flyCrewNegra.jpeg",
        imagenModelo: "../Media/Prendas/FlyCrewCulture/flyCrewModeloNegra.png",
        precio: 89.99,
    },
    {
        id: "coming-soon-01",
        titulo: "COMING SOON",
        url: "",
        imagen: "../Media/Prendas/FlyCrewCulture/coming3.png",
        imagenModelo: "",
        precio: "",
        comingSoon: true,
    },
    {
        id: "coming-soon-02",
        titulo: "COMING SOON",
        url: "",
        imagen: "../Media/Prendas/FlyCrewCulture/coming3.png",
        imagenModelo: "",
        precio: "",
        comingSoon: true,
    }
];

const productos2 = [
    {
        id: "dc-01",
        titulo: "DC Court Graffik",
        url: "https://www.dcshoes.com/products/dc-shoes-mens-court-graffik-shoes-whiteblackblack-wlk",
        imagen: "../Media/Prendas/DC/dcCourtNegras.jpg",
        imagenModelo: "../Media/Prendas/DC/dcCourtNegrasModelo.jpg",
        precio: 69.99,
    },
    {
        id: "dc-02",
        titulo: "DC Stag",
        url: "https://www.dcshoes.com/products/dcshoes-mens-stag-shoes-black-grey-lime-black-grey-lime",
        imagen: "../Media/Prendas/DC/dcStag.jpg",
        imagenModelo: "../Media/Prendas/DC/dcStagModelo.avif",
        precio: 79.99,
    },
    {
        id: "bapesta-01",
        titulo: "ABC CAMO BAPE STA™",
        url: "https://eu.bape.com/products/0zxshm191335n?variant=54911982764405",
        imagen: "../Media/Prendas/Bapesta/bapestaAzul.png",
        imagenModelo: "../Media/Prendas/Bapesta/bapestaAzulModelo.webp",
        precio: 299.99,
    },
    {
        id: "bapesta-02",
        titulo: "BAPE STA™ #3",
        url: "https://eu.bape.com/products/0zxshm191305o?variant=55331854877045",
        imagen: "../Media/Prendas/Bapesta/bapestaCeleste.png",
        imagenModelo: "../Media/Prendas/Bapesta/bapestaCelesteModelo.webp",
        precio: 299.99,
    }
];

const productos3 = [
    {
        id: "carhartt-01",
        titulo: "Carhartt Detroit Jacket",
        url: "https://www.carhartt.com/product/103828/mens-blanket-lined-detroit-jacket---relaxed-fit---duck---1-warm-rating",
        imagen: "../Media/Prendas/Carhartt/carharttJacketSalmon.png",
        imagenModelo: "../Media/Prendas/Carhartt/carharttJacketSalmonModelo.jpg",
        precio: 119.99,
    },
    {
        id: "carhartt-02",
        titulo: "Carhartt Duck Detroit Jacket",
        url: "https://www.carhartt.com/product/103828-BRNLREG/mens-blanket-lined-detroit-jacket---relaxed-fit---duck---1-warm-rating",
        imagen: "../Media/Prendas/Carhartt/carharttJacketDuck.png",
        imagenModelo: "../Media/Prendas/Carhartt/carharttJacketDuckModelo.jpg",
        precio: 119.99,
    },
    {
        id: "fake-gods-01",
        titulo: "Sports Club Gallery",
        url: "https://fakegodsbrand.com/products/sports-club-gallery-zipper-green",
        imagen: "../Media/Prendas/FakeGods/zipperverde.png",
        imagenModelo: "../Media/Prendas/FakeGods/zipperverdeModelo.webp",
        precio: 99.99,
    },
    {
        id: "fake-gods-02",
        titulo: "Valentine´s Hoddie Rose",
        url: "https://fakegodsbrand.com/products/valentines-hoodie-rose?_pos=7&_sid=1ffd61452&_ss=r",
        imagen: "../Media/Prendas/FakeGods/hoddieRosado.png",
        imagenModelo: "../Media/Prendas/FakeGods/hoddieRosadoModelo.webp",
        precio: 93.99,
    }
];

const productos4 = [
    {
        id: "golf-le-fleur-01",
        titulo: "Lacost x Golf Le Fleur",
        url: "https://golflefleur.com/?srsltid=AfmBOor06gSQ5I8g_RQfLPF9E3fy8qtLdVU6dRn6ssDsUNVd6npRTYGk",
        imagen: "../Media/Prendas/GOLF/golfLacosteCeleste.png",
        imagenModelo: "../Media/Prendas/GOLF/golfLacosteCelesteModelo.avif",
        precio: 49.99,
    },
    {
        id: "golf-le-fleur-02",
        titulo: "Lacost x Golf Le Fleur",
        url: "https://golflefleur.com/?srsltid=AfmBOor06gSQ5I8g_RQfLPF9E3fy8qtLdVU6dRn6ssDsUNVd6npRTYGk",
        imagen: "../Media/Prendas/GOLF/golfLacosteVarios.png",
        imagenModelo: "../Media/Prendas/GOLF/golfLacosteVariosModelo.jpg",
        precio: 119.99,
    },
    {
        id: "stussy-01",
        titulo: "Stussy Green",
        url: "https://www.stussy.com/",
        imagen: "../Media/Prendas/Stussy/stussyVerde.png",
        imagenModelo: "../Media/Prendas/Stussy/stussyVerdeModelo.jpg",
        precio: 89.99,
    },
    {
        id: "stussy-02",
        titulo: "Stussy Withered Flower",
        url: "https://www.stussy.com/",
        imagen: "../Media/Prendas/Stussy/stussyWitheredFlower.jpg",
        imagenModelo: "../Media/Prendas/Stussy/stussyWitheredFlowerModelo.png",
        precio: 139.99,
    }
];

const productos5 = [
    {
        id: "nude-project-01",
        titulo: "Blue Jeans",
        url: "https://nude-project.com/es/collections/pantalones-vaqueros-hombre/products/pantalon-vaquero-basico-azul",
        imagen: "../Media/Prendas/NudeProject/nudePantalonVaquero.webp",
        imagenModelo: "../Media/Prendas/NudeProject/nudePantalonVaqueroModelo.webp",
        precio: 142.99,
    },
    {
        id: "nude-project-02",
        titulo: "Baggy Indigo Old Denim",
        url: "https://nude-project.com/es/products/pantalon-corto-baggy-indigo-old-denim?_pos=1&_sid=ccd64b8e2&_ss=r",
        imagen: "../Media/Prendas/NudeProject/nudeJortMujer.webp",
        imagenModelo: "../Media/Prendas/NudeProject/nudeJortMujerModelo.webp",
        precio: 128.99,
    },
    {
        id: "scuffers-01",
        titulo: "Naughty Blue Pants",
        url: "https://scuffers.com/es/products/naughty-blue-pants?_pos=1&_sid=807305b90&_ss=r",
        imagen: "../Media/Prendas/Scuffers/scuffersNaughtyPants.jpg",
        imagenModelo: "../Media/Prendas/Scuffers/scuffersNaughtyPantsModelo.webp",
        precio: 106.99,
    },
    {
        id: "scuffers-02",
        titulo: "Mowa Pink Pants",
        url: "https://scuffers.com/es/products/mowa-pink-pants",
        imagen: "../Media/Prendas/Scuffers/scuffersPinkPants.webp",
        imagenModelo: "../Media/Prendas/Scuffers/scuffersPinkPantsModelo.webp",
        precio: 106.99,
    }
];


const contenedorProductos = document.querySelector("#contenedor-productos");
const contenedorProductos2 = document.querySelector("#contenedor-productos-2");
const contenedorProductos3 = document.querySelector("#contenedor-productos-3");
const contenedorProductos4 = document.querySelector("#contenedor-productos-4");
const contenedorProductos5 = document.querySelector("#contenedor-productos-5");

document.addEventListener('DOMContentLoaded', function() {
    cargarProductos(productos, contenedorProductos);
    cargarProductos(productos2, contenedorProductos2);
    cargarProductos(productos3, contenedorProductos3);
    cargarProductos(productos4, contenedorProductos4);
    cargarProductos(productos5, contenedorProductos5);
});

function abrirSideBuy(producto) {
    if (producto.comingSoon) {
        return;
    }

    document.getElementById('imagen-producto').src = producto.imagen;
    document.getElementById('titulo-producto').textContent = producto.titulo;
    document.getElementById('precio-producto').textContent = `$${producto.precio}`;

    document.getElementById('boton-compra').onclick = () => {
        window.open(producto.url, '_blank');
    }

    const sideMenuBuy = document.getElementById('sideMenuBuy');
    const overlayDos = document.getElementById('overlay-dos');
    
    if (sideMenuBuy) sideMenuBuy.classList.add('active');
    if (overlayDos) overlayDos.classList.add('active');
    document.body.style.overflow = 'hidden'; 
};

function cargarProductos(productosArray, contenedor) {

    contenedor.innerHTML = '';

    productosArray.forEach(producto => {

        const div = document.createElement("div");
        div.classList.add("prendas");

        if (producto.comingSoon) {
            div.innerHTML = `
                <div class="producto-card-coming-soon">
                        <img src="${producto.imagen}" class="producto-imagen" >
                    <div class="contenedorTexto">
                        <div class="producto-titulo">
                        ${producto.titulo}
                        </div>
                        <div class="precio">
                        $$$
                        </div>
                    </div>
                </div>
            `;
        } else {
            div.innerHTML = `
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <img src="${producto.imagen}" class="producto-imagen" alt="${producto.titulo}">
                        </div>
                        <div class="back">
                            <img src="${producto.imagenModelo}" class="producto-imagen" alt="${producto.titulo} - Modelo">
                        </div>
                    </div>
                    <div class="contenedorTexto">
                        <a href="${producto.url}" class="producto-titulo-enlace">
                            <div class="producto-titulo">${producto.titulo}</div>
                        </a>
                            <div class="precio">$${producto.precio}</div>
                            </div>
                    </div>
            `;
        }

        div.addEventListener('click', () => {
            abrirSideBuy(producto);
        });
        
        contenedor.appendChild(div);
    });
};

function cerrarSidebar() {
    document.getElementById('sideMenuBuy').classList.remove('active');
    document.getElementById('overlay-dos').classList.remove('active');
    document.body.style.overflow = 'auto';
}

document.getElementById('cerrar-menu').addEventListener('click', cerrarSidebar);
document.getElementById('overlay-dos').addEventListener('click', cerrarSidebar); 