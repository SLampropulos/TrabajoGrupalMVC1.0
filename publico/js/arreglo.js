var productos = [ 
    {  html_h3: "Trabajo en equipo",
        img_src: "uno.jpg",
        img_alt: "equipo",
        a_html:  "equipo.html"
    } ,{  
        html_h3: "Planeacion",
        img_src: "dos.jpg",
        img_alt: "planeacion",
        a_html:  "planeacion.html"
    },  {  
        html_h3: "Programacion",
        img_src: "tres.jpg",
        img_alt: "programacion",
        a_html: "programacion.html"
    }, {  
        html_h3: "Diseño",
        img_src: "cuatro.jpg",
        img_alt: "Diseño",
        a_html: "diseño.html"
    }, {  
        html_h3: "Herramientas (Dispositivos)",
        img_src: "cinco.jpg",
        img_alt: "herramientas",
        a_html: "herramientas.html"
    }, {  
        html_h3: "Oficinas",
        img_src: "seis.jpg",
        img_alt: "oficinas",
        a_html: "oficina.html"
    }
];



var texto_html = "";  
            
productos.forEach(element => {  
     
texto_html = texto_html +  ` 
        
            <div class="contenedor fondo-contenedor">
            
                    <h3 class="subtitulo-arreglo">  ${element.html_h3} </h3>
                    <div class="contenedor-galeria">
                    <img src="publico/img/${element.img_src}" alt="${element.img_alt}" class="img-galeria">
                    <a class="nav" href="${element.a_html}" >Leer mas</a>
                    </div>
                     
                
            </div>
        
         
                    `
});

document.getElementById("galeria1").innerHTML = texto_html;