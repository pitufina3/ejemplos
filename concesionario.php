<?php

class Vehiculos {
    var $matricula;
    var $numeroruedas;
    var $kms;

    function__construct ($matricula, $numeroruedas, $kms) {
        $this->matricula = $matricula;
        $this->numeroruedas = $numeroruedas;
        $this->kms = $kms;
    }

    function getMatricula(){
        return $this->matricula;
    }

    function setMatricula ($matricula){
        $this->matricula = $matricula;
    }

    function getNumRuedas () {
        return $this->numruedas;
    }

    function setNumRuedas ($nuemruedas) {
        $this->numruedas = $numruedas;
    }

    function getKms () {
        return $this->kms;
    }
        
    function setKms ($kms){
        $this->kms = $kms;
    }  
}

class Concesionario {
    var $ciudad;
    var $vehiculos;


    function__construc ($ciudad,$vehiculos){
        $this->ciudad = $ciudad;
        $this->vehiculos = $vehiculos;
    }

    //Getter y Setters
    function setCiudad ($ciudad){
        $this->ciudad = $ciudad;
    }
    function getCiudad (){
        return $this->ciudad;
    }
    function setVehiculos (){
        $this->vehiculos = $vehiculos;
    }
    function getVehiculos (){
        return $this->vehiculos;
    }
//Resto funciones

    functionaltaVehiculo ($vehiculo){
        $this->vehiculo[] = $vehiculo;
    }

    functionbajaVehiculos ($nummatricula){
        $enc = false;
        for ($i=0; $i < count($this->vehiculos) && ($enc==false); $i++) {
                if ($this->vehiculos[$i] != null){
                    if ($numeromatricula == $this->vehiculos[$i]->getMatricula()){
                    $this->vehiculos[$i] = null;
                    $enc = true;
                }
            }
        }
    }

    functionmatricularVehiculos ($vehiculos){   
        //suponemos que se conecta con la DGT y devuelve el numero de matricula
        $matri_aleatoria = rand();

        $enc = false;
        $pos = 0;
        for ($i=0; $i < count($this->vehiculos) && ($enc==false); $i++) {
                if ($this->vehiculos[$i] != null){
                    if ($this->vehiculos[$i]->getMatricula()==''){
                    $this->vehiculos[$i]->setMatricula($mat_aleatoria);
                    $enc = true;
                    $pos = $i;
                }
            }
        }
        return $this->vehiculos[$pos];
    }

    functionvenderVehiculos (){
        $vaux = this->matriculavehiculos();
        $this->bajavehiculos(vaux->getMatricula());
    }
}








class EmpresaTRansportes {
    var $cif;
    var $clientes;
    var $vehiculos;

    function__construc ($cif, $clientes, $vehiculos) {
        $this->cif = $cif;
        $this->clientes = $clientes;
        $this->vehiculos = $vehiculos;
    }

    function getComprarVehiculos () {
        return $this->comprarvehiculos;
    }

    function setComprarVehiculos ($comprarvehiculos) {
        $this->comprarvehiculos = $comprarvehiculos;
    }
    function getRecogerPaquete ()){
        return $this->recogerpaquete;
    }

    fuction setRecogerPaquete ($recogerpaquete){
        $this->recogerpaquete = $recogerpaquete;
    }

    function getEntregarPaquete(){
        return $this->entregarpaquete;
    }

    function setEntregarPaquete ($entregarpaquete){
        $this->entregarpaquete = $entregarpaquete;
    }
}


    