<?php

class ControladorPaginas {

    public function inicio() {
        include_once("vistas/paginas/inicio.php");//para cargar la vista
    }

    public function error() {
        include_once("vistas/paginas/error.php");//para cargar la vista
    }

    public function portfolio() {
        include_once("vistas/paginas/portfolio.php");//para cargar la vista
    }

    public function diseño() {
        include_once("vistas/paginas/diseño.php");//para cargar la vista
    }

    public function equipo() {
        include_once("vistas/paginas/equipo.php");//para cargar la vista
    }

    public function expertos() {
        include_once("vistas/paginas/expertos.php");//para cargar la vista
    }
    
    public function herramientas() {
        include_once("vistas/paginas/herramientas.php");//para cargar la vista
    }
    
    public function oficina() {
        include_once("vistas/paginas/oficina.php");//para cargar la vista
    }

    public function planeacion() {
        include_once("vistas/paginas/planeacion.php");//para cargar la vista
    }

    public function programacion() {
        include_once("vistas/paginas/programacion.php");//para cargar la vista
    }

    public function servicio() {
        include_once("vistas/paginas/servicio.php");//para cargar la vista
    }
}