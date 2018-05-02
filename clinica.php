<?php

class Perro{
    var $nombre;
    var $edad;

    
}
class Clinica{
    var$nombre;
    var$nombredirector;
    var$telefono;
    var$animales;

    
     
        function __construct ($nombre, $nombredirector, $telefono, $animales) {
            $this->nombre = $nombre;
            $this->nombredirector = $nombredirector;
            $this->telefono = $telefono;
            $this->animales = $animales;
        }
    
        function getNombre () {
            return $this->$nombre;
        }
    
        function setNombre ($nombre) {
            $this->nombre = $nombre;
        }
        function getNombreDirector (){
            return $this->nombredirector;
        }
    
        function setNombreDirector ($nombredirector){
            $this->nombredirector = $nombredirector;
        }
    
        function getTelefono () {
            return $this->telefono;
        }
    
        function setTelefono ($telefono) {
            $this->telefono = $telefono;
        }
        
        function getAnimales(){
            $this->animales;
        }
        function setAnimales ($Animales){
            $this->animales = $animales;
        }
        
        function getclinica(){
            return $this->clinica;
        
        function addClinica ($clinica){
            $this->clinica[] = $clinica;
        }
    }

        $clinicaprueba = new Clinica();

        $clinica= new Clinica ();
        $clinica = new Clinica2 ();
        
        $clinicaprueba->addClinica(clinica);
        $clinicaprueba->addClinica(clinica2);
        
        
        
        
        
        //Una forma de crear una Clinica
        $miclinica= new Clinica();
        $minombre->setNombre("vete");
        $minombredirector->setNombreDirector("Juan");
        $mitelefono->setTelefono(924404040);
        $mianimales->setAnimales("Perro");
        
        //Otra forma de crear una clinica llamando al constructor parametrizado (con parámetros)
        $miclinica = new Clinica ("beta", 25)
        
        //Recuperar datos
        echo "El nombre es ".$miclinica->getNombre();
        echo "EL nombre director es ".$miclinica->getNombreDirector();
        echo "El telefono es".$miclinica->getTelefono();
        echo "Los animales son".$miclinica->getPerro();
        





















functio altaAnimal () {

}
functio buscarAnimalPorNombre () {

}

functio buscarAnimalMasViejo() {

}
function setNombreClinica ($nombre) {
    $nombreclinica = $nombre;
}
function setNombreDirector ($nombre){
    $nombredirector = $nombre;
}
}


//Aqui es donde empieza el principal
//Tengo que crear una clinica veterinaria, llenarla de animales y buscar

$miclinica = new Clinica();
$miclinica=>setNombreClinica ("El Paraiso de los Animales");
$miclinica=>setNombreDirector = ("Florentino");

$a = new Perro();
$a->nombre = "Lassie";
$a->edad = 5;
$miclinica->animales[] = $a;