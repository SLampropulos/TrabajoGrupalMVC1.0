var lista=[];

function añadirALaListaDelSistema (pnombre,papellido,ppais,pmail,pmensaje)
{
    var nuevoEnLalista = {
        nombre : pnombre,
        apellido : papellido,
        pais : ppais,
        mail : pmail,
        mensaje : pmensaje,
    };

    
    lista.push(nuevoEnLalista);
}

function getListaDelSistema(){
    return lista;
}