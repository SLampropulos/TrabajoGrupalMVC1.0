<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web dinamica</title>
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <main>
        <section class="contenedor" id="contacto">
        <h2 class="subtitulo">Formulario de registro</h2>
        <div class="contenedor-servicio">
            
            
        
        <form class="formulario" name="aspirantes" enctype="text/plain" method="POST">
            <p class="texto-form">llene sus datos para que los tengamos en cuenta</p>
            <label for="firstname">Nombre: </label>     <input type="text" name="nombre" id="firstname"  placeholder="Ingrese su nombre aqui..."> 
            <label for="lastname">Apellido:</label>     <input type="text" name="apellido"  id="lastname"   placeholder="Ingrese su apellido aqui..."> 
            <label for="nacionalidad">Nacionalidad</label> <input type="text" id="nacionalidad" placeholder="ingrese nacionalidad" name="nacionalidad">
            <label for="street">Calle:</label>          <input type="text"  name="calle"   id="street"    placeholder="Ingrese su calle aqui...">
            <label for="number">Numero:</label>         <input type="number"   name="numero de calle"    id="number"     placeholder="Ingrese el numero..">   
            <label for="city">Ciudad:</label>           <input type="text"     name="ciudad"      id="city"      placeholder="C.A.B.A."> 
            <label for="zipcode">Código Postal:</label> <input type="text"     name="codigo postal"   id="zipcode"  placeholder="Ingrese su codigo postal aqui..."> <br><br>
            <label for="telefono">Telefono:</label>     <input type="tel"      name="telefono"  id="telefono" placeholder="ingrese su telefono aqui ...."> 
            <label for="BirthDate">Fecha Nac.:</label>  <input type="date"     name="nacimiento" id="birthdate" > 
            <label for="mail">Mail: </label>            <input type="email"    name="mail"      id="mail"      >   
            
           

            <label for="gender">Genero: (Select)</label> 
                <select id="Genero" name="Genero">
                    <option value="mujer">mujer</option>
                    <option value="hombre">hombre</option>
                    <option value="otro">otro</option>
                </select>  
                
            <label for="conocimientos">Conocimientos previos:</label>
                    <input class="valores" type="checkbox" value="HTML"> HTML
                <br><input class="valores" type="checkbox" value="CSS"> CSS
                <br><input class="valores" type="checkbox" value="BOOTSTRAP"> Bootstrap
                <br><input class="valores" type="checkbox" value="Javascript"> Javascript
                <br><input class="valores" type="checkbox" value="Typescript"> Typescript
                <br><input class="valores" type="checkbox" value="Angular"> Angular
                <br><input class="valores" type="checkbox" value="BaseDeDatos"> Base de Datos
                <br><input class="valores" type="checkbox" value="Python"> Python
                <br><input class="valores" type="checkbox" value="Django"> Django 
                <br><br>
        
            <label for="estudios">Estudios: (Select)</label>
            <select id="estudios" name="estudios">
                <option value="primaria">Primaria</option>
                <option value="secundaria">Secundaria</option>
                <option value="terciario">Terciario</option>
                <option value="universitario">Universitario</option>
            </select>
           
            <label for="comentarios" class="comentarios">Comentarios:</label> 
            
            <textarea name="comentarios" rows="3" cols="30"></textarea>
            
            <input type="submit" value="Enviar" class="boton-enviar" id="boton">
        </form>
        <script src="public/js/registro.js"></script>
        <script src="public/js/checkbox.js"></script>
        
</div>
    </section>
    </main>

    
    
    
   
   <script src="public/js/lightbox.js"></script>
    

</body>
</html>