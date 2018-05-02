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



//Una forma de hacerlo

$a = new Persona("Claudio",25);

$b = new Persona ("Juanillo", 31);

$c = new Jugador ("Messi",29,1000);

$d = new Jugador ("CR7",44,999);

$vector = array ($a,$b,$c,$d);



//Otra forma de hacerlo

$vector = array();

$a = new Persona("Claudio",25);

$vector[] = $a;

$a = new Persona("Juan",27);

$vector[] = $a;



//Otra forma más

$vector = array(new Persona("Claudio",25),

                new Persona("Claudio",25),

                new Jugador("Pedro",25,1000),

                new Jugador ("CR7",44,999)

            );



for ($i=0; $i < count($vector); $i++) { 

    $vector[$i]->mostrar();

}