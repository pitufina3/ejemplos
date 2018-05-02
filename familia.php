<?php

class Padre {
    function mostar (){
        echo "Soy tu padre";
    }
}

class Hija extends Padre {
    function mostrar (){
        echo "Soy tu hija";
        parent::mostrar();
    }
}

$p =new Padre;
$p->mostrar ();