<?php

class Contacto extends Controller{
    function __construct() {
        parent::__construct();
        $this -> view -> render('contacto/index');
    }
   
}