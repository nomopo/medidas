<?php
/**
 * Created by PhpStorm.
 * User: informatica
 * Date: 21/02/2018
 * Time: 10:48
 */

include_once('assets/funciones.php');

//$xml =  "//192.168.0.4/ficheros/XML_CURVAS_NO_HARD/old/";
//$greenflex = "//192.168.0.247/greenflex/2018/";
$xml = "archivos/old";
$todos = "archivos/old/todos";

if ($gestor = opendir($xml)) {
    while (false !== ($entrada = readdir($gestor))) {
        if (substr($entrada, -4) == ".xml" or substr($entrada, -4) == ".XML") {
            $array[] = $entrada;

        }
    }
}

closedir($gestor);


mes_ano();

