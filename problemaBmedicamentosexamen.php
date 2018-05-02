<?php



class Medicamento {

    var $nombre;

    var $precio;



    function __construct ($nombre, $precio) {

        $this->nombre = $nombre;

        $this->precio = $precio;

    }

    function getNombre () {

        return $this->nombre;

    } 

    function setNombre ($nombre) {

        $this->$nombre = $nombre;

    }

    function getPrecio () {

        return $this->precio;

    } 

    function setEdad ($precio) {

        $this->$precio = $precio;

    }



    //No se pedía este método (fx), pero lo creamos para ayudarnos

    function mostrar() {

        echo "Medicamento ".$this->nombre." y vale ".$this->precio."<br>";

    }

}



class Farmacia {

    var $cif;

    var $medicamentos;



    function __construct ($cif) {

        $this->cif = $cif;

    }



    function setCif ($cif) {

        $this->cif = $cif;

    }



    function getCif ($cif) {

        return $cif;

    }



    function getMedicamentos () {

        return $this->medicamentos;

    }



    // Da de baja un medicamento anulando su casilla

    function bajaMedicamento ($nombreMedicamento) {

        $enc = false;

        for ($i=0; $i < count($this->medicamentos) && ($enc == false); $i++) { 

            if ($this->medicamentos[$i] != null) {

                if ($nombreMedicamento == $this->medicamentos[$i]) {

                    $this->medicamentos[$i] = null;

                    $enc = true;

                }

            }

        }

    }



    //Desarrollar altaMedicamento (esto te toca a ti)

    function altaMedicamento ($medicamento) {

        $enc = false;

        for ($i=0; ($i < count($this->medicamentos)) && ($enc == false); $i++) { 

            if ($this->medicamentos[$i] == null) {

                $this->medicamento[$i] = $medicamento;

                $enc = true;

            }

        }

        if ($enc == false) { 

            $this->medicamentos[] = $medicamento;

        }

    }



    //Esta función no se pedía, pero la hemos creado porque nos

    //   ayuda a comprobar el problema

    function mostrar () {

        for ($i=0; $i < count($this->getMedicamentos()); $i++) { 

            $this->medicamentos[$i]->mostrar();

        }

    }

}



$a = new Medicamento ("Paracetamol", 3);

$b = new Medicamento ("Ibuprofeno", 7);



$farma = new Farmacia ("A00000001");

$farma->altaMedicamento ($a);

$farma->altaMedicamento ($b);



$farma->mostrar();



//No pide esto, pero nos ayuda: esto muestra el número total de medicamentos de $farma

echo count ($farma->getMedicamentos());