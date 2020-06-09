<?php

require_once '../data/Conexion.class.php';


class personal extends Conexion {
    private $idpersonal;
    private $nombres;
    private $apellido_paterno;
    private $apellido_materno;
    private $tipo_documento;
    private $num_documento;
    private $fecha_nacimiento;
    private $sexo;
    private $direccion;
    private $telefono_movil;
    private $iddepartamento;
    private $idprovincia;
    private $iddistrito;
    private $idgrado;
    private $titulo;
    private $estado;
    
    function getIdgrado() {
        return $this->idgrado;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getIdpersonal() {
        return $this->idpersonal;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellido_paterno() {
        return $this->apellido_paterno;
    }

    function getApellido_materno() {
        return $this->apellido_materno;
    }

    function getTipo_documento() {
        return $this->tipo_documento;
    }

    function getNum_documento() {
        return $this->num_documento;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono_movil() {
        return $this->telefono_movil;
    }

    function getIddepartamento() {
        return $this->iddepartamento;
    }

    function getIdprovincia() {
        return $this->idprovincia;
    }

    function getIddistrito() {
        return $this->iddistrito;
    }

    function getEstado() {
        return $this->estado;
    }

    function setIdpersonal($idpersonal) {
        $this->idpersonal = $idpersonal;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellido_paterno($apellido_paterno) {
        $this->apellido_paterno = $apellido_paterno;
    }

    function setApellido_materno($apellido_materno) {
        $this->apellido_materno = $apellido_materno;
    }

    function setTipo_documento($tipo_documento) {
        $this->tipo_documento = $tipo_documento;
    }

    function setNum_documento($num_documento) {
        $this->num_documento = $num_documento;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono_movil($telefono_movil) {
        $this->telefono_movil = $telefono_movil;
    }

    function setIddepartamento($iddepartamento) {
        $this->iddepartamento = $iddepartamento;
    }

    function setIdprovincia($idprovincia) {
        $this->idprovincia = $idprovincia;
    }

    function setIddistrito($iddistrito) {
        $this->iddistrito = $iddistrito;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }
    
    function setIdgrado($idgrado) {
        $this->idgrado = $idgrado;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function listar() {
        try {
            $sql = "
                    select ROW_NUMBER () OVER (ORDER BY IDPERSONAL),
                    UPPER(p.tipo_documento),
                    p.num_documento,
                    UPPER((p.apellido_paterno || ' ' || p.apellido_materno || ', ' ||p.nombres) )AS nombre_completo,
                    (select g.nombre as grado from titulo t inner join grado g on (t.idgrado = g.idgrado) where t.idpersonal = p.idpersonal ORDER BY t.idgrado DESC LIMIT 1),
                    (select t.nombre as titulo from titulo  t where t.idpersonal = p.idpersonal ORDER BY t.idgrado DESC LIMIT 1)
                    from personal P order by 4
                ";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }

    
}
