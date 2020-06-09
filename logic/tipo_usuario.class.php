<?php

require_once '../data/Conexion.class.php';

class variable extends Conexion {
    private $idtipousuario;
    private $nombre;

    function getIdtipousuario() {
        return $this->idtipousuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdtipousuario($idtipousuario) {
        $this->idtipousuario = $idtipousuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}
