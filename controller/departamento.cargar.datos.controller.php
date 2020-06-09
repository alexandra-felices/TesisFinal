<?php

require_once '../logic/Departamento.class.php';
require_once '../util/functions/Helper.class.php';

try {
    $objProv = new Departamento();
    $resultado = $objProv->cargarDatos();
    Helper::imprimeJSON(200, "", $resultado);
    
} catch (Exception $exc) {
    Helper::imprimeJSON(500, $exc->getMessage(), "");
}

