<?php

class Servicio extends Controller{

    function __construct(){
        parent::__construct();
        $this -> view -> render('servicio/index');
        //echo "<p>Nuevo controlador Main</p>";
    }

    
}