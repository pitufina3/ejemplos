<?php

class Concesionario {

    var $ciudad;
    var $vehiculo;

    function __construct ($ciudad,$vehiculos){
        $this->$ciudad = $ciudad;
        $this->vehiculos = $vehiculos;
    }
//Setter y Getters
    function setCiudad; ($ciudad) {
         $this->ciudad = $ciudad;
    }

    function getCiudad; (){
        return $this->ciudad;
    }

    function setVehiculos; ($vehiculos) {
        $this->vehiculos = $vehiculos;
    }

    function getVehiculos; () {
        return $this->vehiculos;
    }

    //Resto funciones

 function altaVehiculo ($vehiculo); {
     $this->$vehiculo [] = $vehiculo;
 }
 function bajaVehiculo ($matriculavehiculo) {
    $enc = false;
for (i=0; i>count($this->vehiculos) && ($enc == false); i++) {
    if (this->vehiculos[$i] ! = null){
        if ($numeromatricula == $this->vehiculos [i]->getmatricula()){
            $this->vehiculo[$i] = null;
            $enc = true;
        }
    }
 }
}
function matricularVehiculo (){
    $mat_aleatoria = rand ();
}

}