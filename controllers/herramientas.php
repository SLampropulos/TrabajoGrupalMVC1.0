<?php

class Herramientas extends Controller {

    function __construct() {
        parent::__construct();
        $this -> view -> render('herramientas/index');
        
    }
}