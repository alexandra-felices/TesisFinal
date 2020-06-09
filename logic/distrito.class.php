<?php

require_once '../data/Conexion.class.php';

class distrito extends Conexion {
    private $idprovincia;
    private $iddepartamento;
    private $iddistrito;
    private $nombre;
    
    function getIdprovincia() {
        return $this->idprovincia;
    }

    function getIddepartamento() {
        return $this->iddepartamento;
    }

    function getIddistrito() {
        return $this->iddistrito;
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

    function setIddistrito($iddistrito) {
        $this->iddistrito = $iddistrito;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function cargarDatos($cod_dep, $cod_pro) {
        try {
            $sql = "select iddistrito,nombre from distrito where iddepartamento = :p_codigo_dep and idprovincia = :p_codigo_pro order by 2";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_codigo_dep", $cod_dep);
            $sentencia->bindParam(":p_codigo_pro", $cod_pro);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    
}
