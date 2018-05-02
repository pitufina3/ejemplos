<?php

class Vehiculo {
    var $color;
    var $kms;
    var $cv;
    var $techosolar; //true o false

    function __construct ($color,$kms, $cv, $tc) {
        $this->color = $color;
        $this->kms = $kms;
        $this->cv = $cv;
        $this->techosolar = $tc;
    }

    //Faltan los getters y los setters    
    
    function mostrar () {
        echo "Color: ".$this->color."<br>";
        echo "Kilómetros: ".$this->kms."<br>";
        echo "Cv: ".$this->cv."<br>";
        if ($this->techosolar == true) {  //if ($this->techosolar) {
            echo "Tiene techo solar"; }
        else { 
            echo "No tiene techo solar"; 
        }
    }
}

class Coche extends Vehiculo {
    var $puertas;

    function __construct ($color,$kms, $cv, $tc, $puertas) {
        parent::__construct($color, $kms, $cv, $tc);
        $this->puertas = $puertas;
    }

    function mostrar () {
        parent::mostrar();
        echo "Puertas: ".$this->puertas."<br>";
    }
}

class Camion extends Vehiculo {
    var $pma;
    var $tara;

    function __construct ($color,$kms, $cv, $tc, $pma, $t) {
        parent::__construct($color, $kms, $cv, $tc);
        $this->pma = $pma;
        $this->tara = $t;
    }

    function mostrar () {
        parent::mostrar();
        echo "Peso Maximo Autorizado: ".$this->pma."<br>";
        echo "Tara: ".$this->tara."<br>";
    }
}

class Caravana extends Vehiculo {
    var $cocina; //booleano
    var $camas;

    function __construct ($color,$kms, $cv, $tc, $cocina, $camas) {
        parent::__construct($color, $kms, $cv, $tc);
        $this->cocina = $cocina;
        $this->camas = $camas;
    }

    function mostrar () {
        parent::mostrar();
        echo "Cocina ".$this->cocina."<br>";
        echo "Camas: ".$this->camas."<br>";
    }
}

$a = new Coche ("Verde", 4000, 110, true, 5);
$b = new Camion ("Blanco", 20000, 300, false, 3500, 3000);
$c = new Caravana ("Amarilla", 10000, 200, true, true, 3);

$vehiculos = array($a, $b, $c);

for ($i=0; $i < count($vehiculos); $i++) { 
    $vehiculos[$i]->mostrar();
    echo "<br>";
}

