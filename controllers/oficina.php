<?php

class Oficina extends Controller{

    function __construct(){
        parent::__construct();
        $this -> view -> render('oficina/index');
        //echo "<p>Nuevo controlador Main</p>";
    }

    
}