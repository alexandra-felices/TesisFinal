<?php

require_once '../data/Conexion.class.php';

class departamento extends Conexion {
    private $iddepartamento;
    private $nombre;
    
    function getIddepartamento() {
        return $this->iddepartamento;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIddepartamento($iddepartamento) {
        $this->iddepartamento = $iddepartamento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    
    
        public function cargarDatos() {
        try {
            $sql = "select * from departamento order by 1";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    
}
