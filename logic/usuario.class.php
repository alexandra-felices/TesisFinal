<?php

require_once '../data/Conexion.class.php';

class usuario extends Conexion {
    private $idusuario;
    private $idpersonal;
    private $idtipousuario;
    private $email;
    private $clave;
    private $estado;
    
    function getIdusuario() {
        return $this->idusuario;
    }

    function getIdpersonal() {
        return $this->idpersonal;
    }

    function getIdtipousuario() {
        return $this->idtipousuario;
    }

    function getEmail() {
        return $this->email;
    }

    function getClave() {
        return $this->clave;
    }

    function getEstado() {
        return $this->estado;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setIdpersonal($idpersonal) {
        $this->idpersonal = $idpersonal;
    }

    function setIdtipousuario($idtipousuario) {
        $this->idtipousuario = $idtipousuario;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }


}
