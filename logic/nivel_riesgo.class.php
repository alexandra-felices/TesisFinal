<?php

require_once '../data/Conexion.class.php';


class nivel_riesgo extends Conexion {
    private $idnivelriesgo;
    private $nombre;
    
    function getIdnivelriesgo() {
        return $this->idnivelriesgo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdnivelriesgo($idnivelriesgo) {
        $this->idnivelriesgo = $idnivelriesgo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


    
}
