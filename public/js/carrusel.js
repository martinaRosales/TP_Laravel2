// Armado del carrusel en Resultados
window.addEventListener("load", () => {
    let xml = new XMLHttpRequest();
    xml.open("GET", "http://127.0.0.1:8000/resultados_");
    xml.onreadystatechange = function () {
        if (xml.readyState == 4 && xml.status == 200) {
            console.log(xml.response);
            let jsonCarrusel = JSON.parse(this.response);
            let contenedorCarrusel =
                document.getElementById("contenedorCarrusel");
            armarCarrusel(contenedorCarrusel, jsonCarrusel);
        }
    };
    xml.send();
});

const tamanoPantalla = () => {
    let pantalla = window.innerWidth;
    let cantidadImagenes = 4;
    cantidadImagenes = pantalla <= 576 ? 1 : cantidadImagenes;
    cantidadImagenes = pantalla > 576 && pantalla <= 768 ? 2 : cantidadImagenes;
    cantidadImagenes = pantalla > 768 && pantalla <= 992 ? 3 : cantidadImagenes;
    return cantidadImagenes;
};

const armarCarrusel = (dom, jsonContenido) => {
    console.log(jsonContenido.length);
    let pantalla = tamanoPantalla();
    dom.innerHTML = `<div class="carousel-item "><div class='row justify-content-center'></div></div`;
    let i = 1;
    jsonContenido.forEach((imagen) => {
        dom.lastElementChild.children[0].innerHTML += `<div class='col'><img class='img-fluid' src='${imagen.img}'></div>`;
        if (i % pantalla == 0 && i !== jsonContenido.length) {
            dom.innerHTML += `<div class="carousel-item "><div class='row justify-content-center'></div></div>`;
        }
        i++;
    });
    dom.children[0].classList.add("active");
};
