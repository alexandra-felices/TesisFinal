<?php

require_once '../data/Conexion.class.php';

class variable extends Conexion {
    private $idvariable;
    private $nombre;

    function getIdvariable() {
        return $this->idvariable;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdvariable($idvariable) {
        $this->idvariable = $idvariable;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}
