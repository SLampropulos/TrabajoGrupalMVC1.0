<?php

class Planeacion extends Controller{

    function __construct(){
        parent::__construct();
        $this -> view -> render('planeacion/index');
        //echo "<p>Nuevo controlador Main</p>";
    }

    
}