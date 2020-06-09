<?php

require_once '../data/Conexion.class.php';


class sesion extends Conexion {
    private $email;
    private $clave;
    
    public function getEmail() {
        return $this->email;
    }

    public function getClave() {
        return $this->clave;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }

    public function validarSesion() {
        try {
            $sql = "
                    select
                            p.apellido_paterno,
                            p.apellido_materno,
                            p.nombres,
                            u.clave,
                            u.estado,
                            p.num_documento,
                            t.nombre as tipo_usuario
                    from
                            usuario u
                    inner join personal p on (u.idpersonal = p.idpersonal)
                    inner join tipo_usuario t on (u.idtipousuario = t.idtipousuario)
                            

                    where
                            u.email = :p_email
                ";
            
            
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindValue(":p_email", $this->getEmail());
            $sentencia->execute();
            $resultado = $sentencia->fetch( PDO::FETCH_ASSOC ); //Utilizo fetch cuando se recupera 1 solo registro
            
            
            if ($sentencia->rowCount()){
                //El usuario si existe
                if ($resultado["clave"] == md5( $this->getClave() ) ){
                    if ($resultado["estado"] == "A"){
                        session_name("sistema_hospital_v1");
                        session_start();
                        
                        $_SESSION["s_usuario"]  = $resultado["nombres"] . ' ' . $resultado["apellido_paterno"]. ' ' . $resultado["apellido_materno"];
                        $_SESSION["s_email"]    = $this->getEmail();
                        $_SESSION["s_cargo"]    = $resultado["tipo_usuario"];
                        $_SESSION["s_dni"]      = $resultado["num_documento"];
                        
                        
                        return "SI"; //Si Ingresa
                    }else{
                        return "UI"; //Usuario Inactivo
                    }
                }else{
                    return "CI"; //Clave Incorrecta
                }
            }else{
                return "NE"; //No Existe
            }
            
            
        } catch (Exception $exc) {
            throw $exc;
        }
    }



    
}
