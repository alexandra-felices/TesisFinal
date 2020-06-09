<?php

require_once '../logic/Distrito.class.php';
require_once '../util/functions/Helper.class.php';

try {
    $objDistrito = new Distrito();
    
    $cod_dep = $_POST["p_codigo_dep"];
    $cod_pro = $_POST["p_codigo_pro"];
    
    
    $resultado = $objDistrito->cargarDatos($cod_dep,$cod_pro);
    Helper::imprimeJSON(200, "", $resultado);
    
} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}

