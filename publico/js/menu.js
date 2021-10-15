const abrir = document.querySelector(".abrir");
const menu = document.querySelector(".menu-nav");


abrir.addEventListener("click",()=>{
    menu.classList.toggle("desplegar")
})

window.addEventListener("click",e=>{
    if(menu.classList.contains("desplegar") && e.target != menu && e.target != abrir ){
        
        menu.classList.toggle("desplegar")
    }
})


