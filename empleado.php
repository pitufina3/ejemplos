<?php

class Empleado{
    var $nombre;
    var $edad;

    function __construc($nombre, $edad) {


        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function setNombre ($nombre) {

        $this->$nombre = $nombre;

    }

    function getNombre () {

        return $this->nombre;

    }

    function setEdad ($edad) {

        $this->$edad = $edad;

    }

    function getEdad () {

        return $this->edad;

    }

    
}

