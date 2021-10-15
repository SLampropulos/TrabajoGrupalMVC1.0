<?php

include_once("modelos/empleado.php");
include_once("conexion.php");

class ControladorEmpleados {
    public function inicio(){
        include_once("vistas/empleados/inicio.php");//para cargar la vista
    }

    public function crear(){
        
        if($_POST)//valido si hay un envio
        {
            print_r($_POST);//imprimo los valores
            $nombre = $_POST['nombre'];//valores del formulario para la base de datos
            $correo = $_POST['correo'];//valores del formulario para la base de datos

            empleado::crear($nombre,$correo);//ejecuto el metodo del modelo empleado
        }
        
        include_once("vistas/empleados/crear.php");//para cargar la vista
    }
    
    public function editar(){
        include_once("vistas/empleados/editar.php");//para cargar la vista
    }
}