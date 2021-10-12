<?php

class Equipo extends Controller {

    function __construct() {
        parent::__construct();
        $this -> view -> render('equipo/index');
        
    }
}