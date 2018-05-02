<?php
class Tienda {
    var $empleado;
    var $producto;

    function __construc($empleado, $producto) {


        $this->empleado = $empleado;
        $this->producto = $producto;
    }

    function setEmpleado ($empleado) {

        $this->$empleado = $empleado;

    }

    function getEmpleado () {

        return $this->empleado;

    }

    function setProducto ($producto) {

        $this->$producto = $producto;

    }

    function getProducto () {

        return $this->producto;

    }

    function empleadomasjoven() {
        $menor=0;
        $pos=0;
            for($i=0; $i<count($empleados); $i++){
                if(menor<empleados[i]->edad){
                    empleados[i]->edad=menor;
                    $pos=i
                }
            }
            return empleado [pos]
        }


}
$a = new Producto ("Queso",25, 12, 12/11/20);

$b = new Producto ("Leche", 31, 22/5/25);


$vector = array ($a,$b,);






$p = new Productos ();
$p->mostrar ();

$productoprueba= new Producto();

$prod1= new Productor();
$prod1= new Producto();

$productoprueba->addProducto(prod1);
$productoprueba->addProducto(prod2);