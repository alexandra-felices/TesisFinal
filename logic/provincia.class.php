<?php

require_once '../data/Conexion.class.php';

class provincia extends Conexion {
    private $idprovincia;
    private $iddepartamento;
    private $nombre;

    function getIdprovincia() {
        return $this->idprovincia;
    }

    function getIddepartamento() {
        return $this->iddepartamento;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdprovincia($idprovincia) {
        $this->idprovincia = $idprovincia;
    }

    function setIddepartamento($iddepartamento) {
        $this->iddepartamento = $iddepartamento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    
    public function cargarDatos($cod_dep) {
        try {
            $sql = "select idprovincia,nombre from provincia where iddepartamento = :p_codigo_dep order by 2";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_codigo_dep", $cod_dep);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    
}
