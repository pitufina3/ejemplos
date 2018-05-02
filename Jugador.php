<?php

class Jugador{
    var $nombre;
    var $fechanac;
    var $goles;

    function __constructor ($nombre,$fechanac,$goles){
    $this->nombre=$nombre;
    $this->fechanac=$fechanac;
    $this->goles=$goles;
    }
    function getNombre() {
        return $this->nombre;
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getFechanac() {
        return $this->fechanac;
    }
    function setFechanac($fechanac) {
        $this->fechanac = $fechanac;
    }
    function getGoles() {
        return $this->goles;
    }
    function setGoles($goles) {
        $this->goles = $goles;
    }
}

class Equipo{
    var $nombre;
    var $anofundacion;
    var $estadio;
    var $jugador;

    function __constructor ($nombre, $anofundacion, $estadio, $jugador) {
        $this->nombre = $nombre;
        $this->anofundacion = $anofundacion;
        $this->estadio = $estadio;
        $this->jugador = $jugador;
    }
    function getNombre() {
        return $this->nombre;
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getAnofundacion() {
        return $this->anofundacion;
    }
    function setAnofundacion ($anofundacion) {
        $this->anofundacion = $anofundacion;
    }
    function getEstadio() {
        return $this->estadio;
    }
    function setEstadio ($estadio) {
        $this->estadio = $estadio;
    }
    function getJugador() {
        return $this->jugador;
    }
    function setJugador ($jugador) {
        $this->jugador = $jugador;
    }
    function addJugador ($jugador) {
        $this->jugadores[] = $jugador;
    }    

    function maximoGoleador() {
    $maximo=0;
    $pos=0;
        for($i=0; $i<count($jugadores); $i++){
            if(maximo<jugadores[i]->goles){
                jugadores[i]->goles=maximo;
                $pos=i
            }
        }
        return jugador [pos]
    }
}


class Federacion{
    var $pais;
    var $nombres;
    var $equipos;
    var $partidos;

    function__constructor ($pais,$nombre,$equipos,$partidos){
    $this->pais=$pais;
    $this->nombre=$fechanac;
    $this->equipos=$equipos;
    $this->partidos=$partidos;
    }
    function getPais () {
        return $this->pais;
    }
    function setPais ($pais) {
        $this->pais = $pais;
    }
    function getNombre () {
        return $this->nombre;
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getEquipos () {
        return $this->equipos;
    }
    function setEquipos ($equipos) {
        $this->equipos = $equipos;
    }
    function getPartidos () {
        return $this->partidos;
    }
    function setPartidos ($partidos) {
        $this->partidos = $partidos;
    }

    function maximoGoleador() {
        $maximo=0;
        $pos=0;
            for(i=0; i<count($equipos);i++){
                if(maximo<equipos[i]->maximoGoleador()->goles){
                maximo=equipos[i]->maximoGoleador()->goles;
                pos=i
                }
            }
        return equipos[pos]->maximoGoleador();
    }
}

$equipoprueba= new Equipo();

$jug= new Jugador();
$jug2= new Jugador();

$equipoprueba->addJugador(jug);
$equipoprueba->addJugador(jug2);