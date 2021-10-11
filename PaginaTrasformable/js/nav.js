let requestNav = new XMLHttpRequest();
requestNav.open('GET', "JSON/ventanas.json");
requestNav.responseType = 'text';
requestNav.send();


requestNav.onload = function() {
    const ventana = requestNav.response;
    const textVentana = JSON.parse(ventana);

    crearHTML(textVentana);
    funcionBotonLogIn();

}

function crearHTML(textVentana){
    var texto_nav_html = `    
    <div class="container">
        <div>
        <button class="navbar-toggler color-secundario" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button id="LogIn" class="btn color-secundario p-2" type="button" data-toggle="modal" data-target="#mobalLogIn">
            Log in
        </button>

        </div>
        <a class="navbar-brand" href="index.html">
            <div class="d-none d-lg-block">
                <img src="fotos/logo.png" width="373" height="60" alt="" loading="lazy">
            </div>
            <div class="d-lg-none">
                <img src="fotos/logo.png" width="156" height="25" alt="" loading="lazy">
            </div>
        </a>
        <div class="d-lg-none"></div>
        <div class="collapse navbar-collapse " id="navbarResponsive">
            <!-- DESPLEGUE DEL MENU -->
            <ul class="navbar-nav ml-auto">
                <li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="Busacar" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn color-secundario my-2 my-sm-0" type="button" data-toggle="modal" data-target="#errorModal">
                            <!--type="submit" para la busqueda como es un error le pongo button--><span class="icon-buscar"></span>
                        </button>
                    </form>
                </li>

                
    `;
    var texto_nav_html_final =`
            </ul>
        </div>
    </div>
    

    `;
    textVentana.forEach(element => {
        texto_nav_html += ` 
        <li id="${element.ventana_id}" class="nav-item font-weight-bold">
        <a class="nav-link" href="${element.direccion}"><span class="${element.icono} mr-3"></span>${element.nombre}<span class="sr-only">(current)</span></a>
        </li>
    
        `    
    });
    texto_nav_html += texto_nav_html_final;
    const nav = document.getElementById("Nav");
    nav.className += "navbar navbar-light  sticky-top color-principal";
    nav.innerHTML=texto_nav_html;    

    const senialador = new Actual();
    senialador.asignarActual(textVentana);

}


//pongo el active para resaltar en la pagina que esta actualmente el usuario del

class Actual {
    actual = "";


    asignarActual(ventanas){
        for(let i=0; i<ventanas.length; i++){
            if(document.title == ventanas[i].titulo){
                this.actual = ventanas[i].ventana_id;
            }
        }
        if(this.actual=="")return;
        const elegido = document.getElementById(this.actual);
        elegido.className += " active";
    }

}

function funcionBotonLogIn(){
    var modalText = document.getElementById("modalUsuario");
    if(localStorage.getItem('usuario') == null){
        modalText.innerHTML= `
            <div class="modal fade" id="mobalLogIn" tabindex="-1" aria-labelledby="mobalLogIn" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Inicie sesion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNombreNav">Nombre/s</label>
                                    <input type="text" name="Nombre" class="form-control" id="inputNombreNav" placeholder="Stan" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputApellidoNav">Apellido/s</label>
                                    <input type="text" name="Apellido" class="form-control" id="inputApellidoNav" placeholder="Lee" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="inputMailNav">Mail</label>
                                    <input type="email" name="mail" class="form-control" id="inputMailNav" placeholder="Stan" required>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button id="botonNavIngresar" type="button" class="btn btn-primary">Ingresar</button>
                    </div>
                    </div>
                </div>
            </div>
        `;
        funcionBotonIngresarUsuario();

    }else{
        var usuario = localStorage.getItem("usuario");
        usuario = JSON.parse(usuario);
        document.getElementById("LogIn").innerHTML = usuario.nombre+" "+usuario.apellido;

        modalText.innerHTML=`
        <div class="modal fade" id="mobalLogIn" tabindex="-1" aria-labelledby="mobalLogIn" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mi cuenta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p>Nombre: ${usuario.nombre}</p>
                            </div>
                            <div class="form-group col-md-6">
                                <p>Apellido: ${usuario.apellido}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <p>Mail: ${usuario.mail}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button id="botonNavSalir" type="button" class="btn btn-primary">Salir</button>
                    </div>
                    </div>
                </div>
            </div>
        `;
        
        funcionBotonSalir();
    }
}
function funcionBotonIngresarUsuario(){
    
    document.getElementById("botonNavIngresar").addEventListener("click", ()=>{
        var usuario = {
            nombre:document.getElementById("inputNombreNav").value,
            apellido:document.getElementById("inputApellidoNav").value,
            mail:document.getElementById("inputMailNav").value
        }
        localStorage.setItem("usuario",JSON.stringify(usuario));
        location.reload();
    
        });    
}

function funcionBotonSalir(){

    document.getElementById("botonNavSalir").addEventListener("click", ()=>{
        
        localStorage.removeItem("usuario");
        
        location.reload();
    });
}
