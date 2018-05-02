<?php

class Persona {
    var $nombre;
    var $edad;

    function __construct ($nombre, $edad) {
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

    function mostrar () {
        echo "Soy ".$this->nombre." y tengo ".$this->edad." años.<br>";
    }
}


class Jugador extends Persona {
    var $numPartidos;

    function __construct ($nombre, $edad, $numPartidos) {
        parent::__construct ($nombre, $edad);
        $this->numPartidos = $numPartidos;
    }

    function setNumPartidos ($numPartidos) {
        $this->numPartidos = $numPartidos;
    }
    function getNumPartidos () {
        return $this->numPartidos;
    }

    function mostrar() {
        parent::mostrar();
        echo "Ha jugado " . $this->getNumPartidos() . " partidos<br>";
    }
}


$a = new Persona("Pepe",32);
$b = new Persona ("Paco", 22);
$c = new Jugador ("Iniesta",32,500);
$d = new Jugador ("Pique",28,300);
$vector = array ($a,$b,$c,$d);


for ($i=0; $i < count($vector); $i++) { 
    $vector[$i]->mostrar();
}
