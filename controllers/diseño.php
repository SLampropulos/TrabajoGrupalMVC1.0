<?php

class Diseño extends Controller{
    function __construct() {
        parent::__construct();
        $this -> view -> render('diseño/index');
    }
   
}