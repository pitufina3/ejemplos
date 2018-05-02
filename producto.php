<?php

class Producto {

    var $nombre;
    var $precio;
    var $Temp;
    var $Fechacaducidad;


class Productocongelado extends Producto {

    var $temp;
    

    function __construct ($nombre, $precio, $temp,) {

        parent::__construct ($nombre, $precio,$temp);

        $this->temp = $temp;

    }

    function setTemp ($temp) {

        $this->temp = $temp;

    }

    function getTemp () {

        return $this->temp;

    }

        }

        class Productofresco extends Producto {

            var $fechacaducidad;
            
        
            function __construct ($nombre, $precio, $fechacaducidad,) {
        
                parent::__construct ($nombre, $precio,$fechacaducidad);
        
                $this->fechacaducidad = $fechacaducidad;
        
            }
        
            function setFechacaducidad ($fechacaducidad) {
        
                $this->fechacaducidad = $fechacaducidad;
        
            }
        
            function getFechaCaducidad () {
        
                return $this->fechacaducidad;
        
            }
        
                }   



    function mostrar() {

        parent::mostrar();

        echo " " . $this->getTemp() . " productos<br>";
        echo "". $this->getFechacaducidad() . "productos<br>";

    }

}








