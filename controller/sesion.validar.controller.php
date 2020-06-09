<?php

require_once '../logic/Sesion.class.php';
require_once '../util/functions/Helper.class.php';

try {
    
    /*Obtener los datos ingresados en el formulario*/
    
    if (!isset($_POST["txtEmail"]) || $_POST["txtEmail"] == ""  ){
        Helper::mensaje("Debe ingresar su email", "e", "../view/index.html", 5);
    }else if (!isset($_POST["txtClave"]) || $_POST["txtClave"] == ""  ){
        Helper::mensaje("Debe ingresar su clave", "e", "../view/index.html", 5);
    }
    
    $email = $_POST["txtEmail"];
    $clave = $_POST["txtClave"];
    /*Obtener los datos ingresados en el formulario*/
    
    $objSesion = new Sesion();
    $objSesion->setEmail($email);
    $objSesion->setClave($clave);
    
    $resultado = $objSesion->validarSesion();
    
    //echo $resultado;
    
    switch ($resultado) {
        case "NE":
            Helper::mensaje("Usuario no existe", "a", "../view/index.html", 3);
            break;
        
        case "CI":
            Helper::mensaje("La clave es incorrecta", "e", "../view/index.html", 3);
            break;
        
        case "UI":
            Helper::mensaje("Usuario inactivo", "a", "../view/index.html", 3);
            break;
        
        default: //SI
            if($_SESSION["s_cargo"] === "ADMINISTRADOR"){
            header("location:../view/principal.view.php");
                
            }else{
                header("location:../view/principal.docente.view.php");
            }

            break;
    }
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}


