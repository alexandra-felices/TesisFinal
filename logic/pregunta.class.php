<?php

require_once '../data/Conexion.class.php';

class pregunta extends Conexion {
    private $idpregunta;
    private $idvariable;
    private $nombre;

    function getIdpregunta() {
        return $this->idpregunta;
    }

    function getIdvariable() {
        return $this->idvariable;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdpregunta($idpregunta) {
        $this->idpregunta = $idpregunta;
    }

    function setIdvariable($idvariable) {
        $this->idvariable = $idvariable;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}
