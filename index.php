<?php

$controlador="paginas";//agrego accion por defecto
$accion="inicio";//agrego accion por defecto


if( isset($_GET['controlador']) && isset($_GET['accion']) )//pregunto al usuario si existe un controlador y una accion 
{

    if( ($_GET['controlador']!="") && ($_GET['accion']!=""))//pregunto si los valores estan vacios
    {
        $controlador = $_GET['controlador'];//asignar el valor al controlador
        $accion = $_GET['accion'];//asignar el valor a la accion
    }
    
    //print_r($_GET);//imprimo el recorrido

}

require_once("vistas/template.php");