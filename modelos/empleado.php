<?php

class Empleado{
    public static function crear($nombre, $correo)
    {
        $conexion= BD::crearInstancia(); //llamo al metodo para crear una conexion con la base de datos
    
        $sql = $conexion -> prepare("INSERT INTO empleados(nombre,correo) VALUES(?,?)");// creo sentencia sql para agregar los datos a la base
        $sql -> execute(array($nombre,$correo));//
    }
}