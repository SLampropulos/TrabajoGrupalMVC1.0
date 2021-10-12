<?php

class Portfolio extends Controller{

    function __construct(){
        parent::__construct();
        $this -> view -> render('portfolio/index');
        //echo "<p>Nuevo controlador Main</p>";
    }

    
}