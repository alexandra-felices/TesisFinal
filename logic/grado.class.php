<?php

require_once '../data/Conexion.class.php';


class grado extends Conexion {
    private $idgrado;
    private $nombre;
    
    function getIdgrado() {
        return $this->idgrado;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdgrado($idgrado) {
        $this->idgrado = $idgrado;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function cargardatos() {
        try {
            $sql = "select * from grado order by 1";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
}
