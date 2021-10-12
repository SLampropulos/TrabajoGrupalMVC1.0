<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web dinamica</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <main>
        <section class="contenedor" id="contacto">
            <h2 class="subtitulo">Contactenos</h2>
            <div class="contenedor-servicio contacto">
                <img src="public/img/User interface_Monochromatic.svg" alt="">
                <div class="interface-servicio">
                    <form  name="aspirantes" enctype="text/plain" method="post">
                    
                        <label class="n-servicio"><span class="numero">1</span>Nombre</label>
                        <input type="text" id="" class="form-control" placeholder="ingrese su nombre" name="nombre">
                        
                  
                        <label class="n-servicio"><span class="numero">2</span>Apellido</label>
                        <input type="text" id="" class="form-control" placeholder="ingrese su Apellido" name="apellido">
                        
                    
                        <label class="n-servicio"><span class="numero">3</span>Pais</label>
                        <input type="text" id="" class="form-control" placeholder="ingrese nacionalidad" name="nacionalidad">
                       
                   
                   
                        <label class="n-servicio" for="e-mail"><span class="numero">4</span>Mail</label>
                        <input type="e-mail" id="" class="form-control" placeholder="ingrese mail" name="e-mail">
                       
                   
                    
                        <label class="n-servicio"><span class="numero">5</span>Mensaje</label>
                        <textarea type="text" id="" class="form-control" placeholder="escriba el Mensaje" name="msg"></textarea>
                    
                    <input type="submit" class="boton boton-default" value="enviar">
                    </form>
                    <script src="public/js/registro.js"></script>
                </div>
            </div>

        </section>

        
        



    </main>
   

   <script src="public/js/lista.js"></script>
   <script src="public/js/guardar.js"></script>
    
   

</body>
</html>