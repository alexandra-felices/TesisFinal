<?php

    require_once '../util/functions/Helper.class.php';

    session_name("sistema_hospital_v1");
    session_start();
    
    if ( ! isset($_SESSION["s_usuario"])){
        //No inició sesión
        Helper::mensaje("Para ingersar a esta página primero debe iniciar sesión", "e", "index.html", 5);
       
    }
    
    
    //Si ha iniciado sesiòn, entonces se carga en 2 variables los datos del usuario (nombre y el cargo)
    $nombreUsuario = ucwords(strtolower($_SESSION["s_usuario"]));
    $emailUsuario = ucwords(strtolower($_SESSION["s_email"]));
    $cargoUsuario  = ucwords(strtolower($_SESSION["s_cargo"]));
    
    $foto = $_SESSION["s_dni"];
    /*
    if (file_exists("fotos/" . $foto . ".jpg" )){
        $fotoUsuario = $foto . ".jpg";
    }else */
        
    if (file_exists("fotos/" . $foto . ".png" )){
        $fotoUsuario = $foto . ".png";
    }else{
        $fotoUsuario = "default-user-image.png";
    }
    
    $dniSesion  = ucwords(strtolower($_SESSION["s_dni"]));;
    
    //echo $dniSesion;
    
    