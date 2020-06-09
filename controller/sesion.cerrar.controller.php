<?php

    session_name("sistema_hospital_v1");
    session_start();
    
    unset($_SESSION["s_usuario"]);
    unset($_SESSION["s_email"]);
    unset($_SESSION["s_cargo"]);
    
    session_destroy();
    
    header("location:../view/index.html");
    
    
