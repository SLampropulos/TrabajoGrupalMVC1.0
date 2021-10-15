<?php

class BD //para conectarnos a la base de datos con un PDO
{
    private static $instancia = NULL;//se cra cuando me conecte con la base de datos

    public static function crearInstancia() {

        if(!isset( self :: $instancia))//pregunto si existe una conexion
        {
            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO :: ERRMODE_EXCEPTION;//creo esta variable para notificar en caso de que haya un error

            self::$instancia = new PDO('mysql:host=localhost;dbname=empleados;port=3307','root','',$opcionesPDO);//creo una nueva conexion
            echo "conexion realizada";

        }
        return self::$instancia;//debuelvo la instancia creada
    }
}