<?php

require_once '../logic/Provincia.class.php';
require_once '../util/functions/Helper.class.php';

try {
    $objDistrito = new Provincia();
    
    $cod_dep = $_POST["p_codigo_dep"];
    
    
    $resultado = $objDistrito->cargarDatos($cod_dep);
    Helper::imprimeJSON(200, "", $resultado);
    
} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}

