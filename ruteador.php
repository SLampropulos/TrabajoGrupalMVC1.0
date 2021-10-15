<?php


/*
echo $controlador;
echo " ";
echo $accion;
*/

include_once("controladores/controlador_".$controlador.".php");//incluyo al controlador en el archivo


$objControlador = "Controlador".ucfirst($controlador); //hago el controlador dinamico //el ucfirst es para aclarar que la primera letra es mayuscula
$controlador = new $objControlador(); //creo objeto del controlador //hago el objeto dinamico
$controlador -> $accion(); //llamo al metodo //hago al metodo dinamico