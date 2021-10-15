const imagenes = document.querySelectorAll(".img-galeria");
const imageneslight = document.querySelector(".agregar-imagen");
const contenedorlight = document.querySelector(".imagen-light");
const abrir1 = document.querySelector(".abrir");

imagenes.forEach(imagen => {
    imagen.addEventListener("click", ()=>{
        mostrarImagen(imagen.getAttribute("src"));
        
    })
})

contenedorlight.addEventListener("click",(e)=>{
    if(e.target !== imageneslight){
        contenedorlight.classList.toggle("mostrar");
        imageneslight.classList.toggle("mostrarImagen");
        abrir1.style.opacity="1";
    }

})

const mostrarImagen = (imagen) => {
    imageneslight.src =imagen;
    contenedorlight.classList.toggle("mostrar");
    imageneslight.classList.toggle("mostrarImagen");
    abrir1.style.opacity="0";
}
