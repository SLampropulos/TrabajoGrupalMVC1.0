<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web dinamica</title>
    <link rel="stylesheet" href="publico/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
  <header id="header">
  <script src="publico/js/header.js"></script>
  </header>

  <main>

     
       
    <?php    
          include_once("ruteador.php");// incluyo al ruteador en la plantilla
    ?>


    </main>

    <footer id="footer">
        <script src="publico/js/footer.js"></script>
    </footer>
    
    
   <script src="publico/js/menu.js"></script>
   <script src="publico/js/lightbox.js"></script>

   <script src="publico/js/lista.js"></script>
   <script src="publico/js/guardar.js"></script>

   
    

</body>
</html>


