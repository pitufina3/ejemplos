<?php
class Jugador {
    var $nombre;
    var $fechanac;
    var $goles;

    function __construct ($nombre, $fechanac, $goles) {
        $this->nombre = $nombre;
        $this->fechanac = $fechanac;
        $this->goles = $goles;
    }

    function getNombre () {
        return $this->nombre;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getFechanac (){
        return $this->fechanac;
    }

    function setFechaNac ($fechanac){
        $this->fechanac = $fechanac;
    }

    function getGoles () {
        return $this->goles;
    }

    function setGoles ($goles) {
        $this->goles = $goles;
    }
}

class Equipo {
    var $nombre;
    var $añofundación;
    var $estadio;
    var$jugador;

    function __construc ($nombre, $añofundacion, $estadio, $goles) {
        $this->nombre = $nombre;
        $this->añofundacion = $añofundacion;
        $this->estadio = $estadio;
        $this->jugador = $jugador;
    }

    function getNombre () {
        return $this->nombre;
    }

    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getAñoFundacion (){
        return $this->añofundacion;
    }

    function setAnoFundacion ($anofundacion){
        $this->anofundacion = $anofundacion;
    }

    function getEstadio () {
        return $this->estadio;
    }

    function setEstadio ($estadio) {
        $this->estadio = $estadio;
    }
    
    function setJugador (){
        $this->jugador = $jugador;
    }
}
   
    
        class Federacion {
            var $pais;
            var $nombre;
            var $equipos;
            var $partidos;
        
            function __construc ($pais, $nombre, $equipos, $partidos) {
                $this->pais = $pais;
                $this->nombre = $nombre;
                $this->equipos = $equipos;
                $this->partidos = $partidos;
            }
        
            function getPais () {
                return $this->pais;
            }
        
            function setPais ($pais) {
                $this->pais = $pais;
            }
            function getNombre (){
                return $this->nombre;
            }
        
            function setNombre ($nombre){
                $this->nombre = $nombre;
            }
        
            function getEquipos () {
                return $this->equipos;
            }
        
            function setEquipos ($equipos) {
                $this->equipos = $equipos;
            }

            function getPartidos (){
                return $this->partidos;

            function setEquipos ($partidos){
                $this->partidos = $partidos;
            }
            }
        


    function maximoGoleador(){
        $maximo = 0;
        for($i=0;$i<count(jugadores);$i++){
            if(maximo<jugadores[i]->goles){
                $maximo=jugadores[i]->goless
                pos=i;
            }    
            returnjugador[pos];
        }
    }
    function maximoGoleador(){
        maximo=0;
        for(i=0;i<count(equipos);i++){
            if(maximo<equipos[i]->maximoGoleador()->goles;
            maximo=equipos[i]->maximoGoleador()->goles;
            pos=i;
        }
        return equpos[pos]->maximoGoleador;
    }

}
function getjugadores(){
    return $this->jugadores;

function addJugador ($jugador){
    $this->jugadores [] = $jugador;
}
}

$equipoprueba = new Equipo();

$jug = new Jugador ();
$jug = new Jugador ();

$equipoprueba->addJugador(jug);
$equipoprueba->addJugador(jug2);





//Una forma de crear un Jugador
$mijugador= new Jugador();
$mijugador->setNombre("Paco");
$mijugador->setFechaNac(37);
$goles->setGoles(40)

//Otra forma de crear un jugador llamando al constructor parametrizado (con parámetros)
$mijugador = new Jugador ("Pepe", 25)

//Recuperar datos
echo "El nombre es ".$mijugador->getNombre();
echo "La fechanac es ".$mijugaodor->getFechaNac();
echo "Los goles son"$mijugador->getgoles();


//Una forma de crear un Equipo
$miequipo= new Equipo();
$miequipo->setNombre("Barcelona");
$miequipo->setAnoFundacion(1985);
$miequipo->setEstadio("New Camp");
$miequipo->setJugador("Messi");

//Otra forma de crear un equipo llamando al constructor parametrizado (con parámetros)
$miequipo = new Equipo ("Real Madrid", )

//Recuperar datos
echo "El nombre es ".$miequipo->getNombre();
echo "La fechanac es ".$miequipo->getAnoFundacion();
echo "El estadio es".$miequipo->getEstadio();
echo "El jugador es".$miequipo->getJugador();


//Una forma de crear una Federacion
$mifederacion= new Federacion();
$mifederacion->setPais("España");
$mifederacion->setnombre("Española");
$federacion->setEquipos(40);
$federacion->getJugador(100);

//Otra forma de crear una Federacion llamando al constructor parametrizado (con parámetros)
$mifederacion = new Federacion ("Portuguesa")

//Recuperar datos
echo "El pais es ".$mifederacion->getPais();
echo "el nombre es ".$mifederacion->getnombre();
echo "Los equipos son".$mifederacion->getequipos();
echo "Los partidos osn".$mifederacion->getpartidos();



