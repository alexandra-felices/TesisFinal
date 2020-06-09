<?php

require_once '../logic/grado.class.php';
require_once '../util/functions/Helper.class.php';

try {
    $objProv = new grado();
    $resultado = $objProv->cargardatos();
    Helper::imprimeJSON(200, "", $resultado);
    
} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}

