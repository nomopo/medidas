<?php
include_once ('assets/config/funciones.php');

$familia                    = $_POST['familia'];
$codigo                     = $_POST['codigo'];
$modelo                     = $_POST['modelo'];
$version                    = $_POST['version'];
$numero_serie               = $_POST['numero_serie'];
$fecha_compra               = $_POST['fecha_compra'];
$garantia                   = $_POST['garantia'];
if($fecha_compra == '0000-00-00' OR $numero_factura == NULL OR $numero_factura = ''){
    $fin_garantia               = '';        
}else {
    $fin_garantia               = calcularGarantia($fecha_compra, $garantia);
}

$numero_factura             = $_POST['numero_factura'];
$archivo_factura_tmp        = $_FILES['archivo_factura']['tmp_name'];
$archivo_factura_name       = $numero_factura.".pdf";
$archivo_factura_tipo       = $_FILES['archivo_factura']['type'];
if($numero_factura == '' OR $numero_factura == NULL){
    $path                       = "";    
}else {
    $path                       = "assets/facturas/".$numero_serie.".pdf";
}

$activo                     = $_POST['activo'];
$empresa                    = $_POST['empresa'];
$departamento               = $_POST['departamento'];
$usuario                    = $_POST['usuario'];
$observaciones              = $_POST['observaciones'];

insertar_datos($familia, $codigo,$modelo,$version,$numero_serie,$fecha_compra,$garantia,$fin_garantia,$numero_factura,$path,$activo,$empresa,$departamento,$usuario, $observaciones);
  
if(!subirArchivo($archivo_factura_tmp, $archivo_factura_name)){
  echo "Error en la subida del fichero";
} 

header("Location: listado.php");
/*
*/

?>