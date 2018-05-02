<? php

class Padre {
    function mostrar (){
        echo "Soy tu padre";
    }
}

class Hija extends Padre {
    functionmostra(){
        echo "Soy tu hija";
        parent::mostrar ();
    }
}

$p = new Hija ();
$p->mostrar ();



class Vehiculo {
    var $color;
    var $kms;
    var $cv;
    var $techosolar;

    function __construct ($color, $kms, $cv, $techosolar){
        $this->color = $color;
        $this->kms = $kms;
        $this->cv = $cv;
        $this->techosolar = $techosolar;  //true o false
    }
    //Poner los getters y los setters aqui, detras del constructor. el constructor es lo que va primero

    function mostrar () {
        echo "color:".$this->color."<br>";
        echo "kms:".$this->kms."<br>";
        echo "cv:".$this->cv."<br>";
        if ($this->techosolar == true) { //if ($this->techosolar)
            echo "Tiene techo solar";
        }
        else {
            echo "No tiene techo solar";
        }
    }
}


class Coche extends Vehiculo {
    var $puertas;

    function __construct ($color, $kms, $cv, $techosolar, $puertas) {
        parent::__construct ($color, $kms, $cv, $techosolar);
        $this->puertas = $puertas;
    }

    //Faltan todos los getters y setters

    function mostrar () {
        parent::mostrar();
        echo "puertas: ".$this->puertas."<br>";
    }
}

class Camion extends Vehiculo {
    var $pma;
    var $tara;

    function __construct ($color, $kms, $cv, $techosolar, $pma, $tara) {
        parent::__construct ($color, $kms, $cv, $techosolar);
         $this->pma = $pma;
         $this->tara = $tara;
    }
    //Faltan todos los getters y setters

    function mostrar () {
        parent::mostrar();
         echo "Peso Maximo Autorizado: ".$this->pma."<br>";
         echo "Tara: ".$this->tara."<br>";
    }
}

class Caravana extends Vehiculo {
    var $cocina; //booleano
    var $camas;

    function __construct ($color, $kms, $cv, $techosolar, $cocina, $camas) {
        parent::__construct ($color, $kms, $cv, $techosolar);
         $this->cocina = $cocina;
         $this->camas = $camas;
    }

     //Faltan todos los getters y setters

    function mostrar () {
        parent::mostrar();
        echo "cocina: ".$this->cocina."<br>";
        echo "camas: ".$this->camas."<br>";
    }
}

$a = new Coche ("verde", 4000, 110, true, 5);
$b = new Camion ("blanco", 2000, 300, false, 3500, 3000);
$c = new Caravana ("amarilla", 10000, 200, true, true, 3);


//creamos un vector para meter las variables que tengo

$vehiculos = array($a, $b, $c);

for($i=0; $i < count($vehiculos); $i++){
    $vehiculos[$i]->mostrar();
}