<?php
/**
 * Created by PhpStorm.
 * User: informatica
 * Date: 21/02/2018
 * Time: 10:48
 */
ini_set('max_execution_time','300');

$xml =  "//192.168.0.4/ficheros/XML_CURVAS_NO_HARD/2018/01/";
//$greenflex = "//192.168.0.247/greenflex/2018/";
$greenflex = "xml/";

if ($gestor = opendir($xml)) {
    while (false !== ($entrada = readdir($gestor))) {
        if (substr($entrada, -4) == ".xml" or substr($entrada, -4) == ".XML") {
            $array[] = $entrada;

        }
    }
}
closedir($gestor);
/*
echo "************************************************************************************************************<br>";

for($i=0;$i<sizeof($array);$i++) {
    $fichero = simplexml_load_file($xml.$array[$i]);
    $cliente = $fichero->CURVA->CLIENTE;
    if(($cliente == 4797) OR
      ($cliente == 4798) OR
      ($cliente == 4799) OR
      ($cliente == 4800) OR
      ($cliente == 4801) OR
      ($cliente == 4802) OR
      ($cliente == 4803) OR
      ($cliente == 4804) OR
      ($cliente == 4805) OR
      ($cliente == 4806) OR
      ($cliente == 4807) OR
      ($cliente == 4808) OR
      ($cliente == 4809) OR
      ($cliente == 4810) OR
      ($cliente == 4811) OR
      ($cliente == 4812) OR
      ($cliente == 4813) OR
      ($cliente == 4814) OR
      ($cliente == 4815) OR
      ($cliente == 4816) OR
      ($cliente == 4817) OR
      ($cliente == 4818) OR
      ($cliente == 4819) OR
      ($cliente == 4820) OR
      ($cliente == 4821) OR
      ($cliente == 4822) OR
      ($cliente == 4823) OR
      ($cliente == 4824) OR
      ($cliente == 4825) OR
      ($cliente == 4826) OR
      ($cliente == 4827) OR
      ($cliente == 4828) OR
      ($cliente == 4829) OR
      ($cliente == 4830) OR
      ($cliente == 4831) OR
      ($cliente == 4832) OR
      ($cliente == 4833) OR
      ($cliente == 4834) OR
      ($cliente == 4835) OR
      ($cliente == 4836) OR
      ($cliente == 4837) OR
      ($cliente == 4838) OR
      ($cliente == 4839) OR
      ($cliente == 4840) OR
      ($cliente == 4841) OR
      ($cliente == 4842) OR
      ($cliente == 4843) OR
      ($cliente == 4844) OR
      ($cliente == 4845) OR
      ($cliente == 4846) OR
      ($cliente == 4847) OR
      ($cliente == 4848) OR
      ($cliente == 4849) OR
      ($cliente == 4850) OR
      ($cliente == 4851) OR
      ($cliente == 4852) OR
      ($cliente == 4853) OR
      ($cliente == 4854) OR
      ($cliente == 4855) OR
      ($cliente == 4856) OR
      ($cliente == 4857) OR
      ($cliente == 4858) OR
      ($cliente == 4859) OR
      ($cliente == 4860) OR
      ($cliente == 4861) OR
      ($cliente == 4862) OR
      ($cliente == 4863) OR
      ($cliente == 4864) OR
      ($cliente == 4865) OR
      ($cliente == 4866) OR
      ($cliente == 4867) OR
      ($cliente == 4868) OR
      ($cliente == 4869) OR
      ($cliente == 4870) OR
      ($cliente == 4871) OR
      ($cliente == 4872) OR
      ($cliente == 4873) OR
      ($cliente == 4874) OR
      ($cliente == 4875) OR
      ($cliente == 4876) OR
      ($cliente == 4877) OR
      ($cliente == 4878) OR
      ($cliente == 4879) OR
      ($cliente == 4880) OR
      ($cliente == 4881) OR
      ($cliente == 4882) OR
      ($cliente == 4883) OR
      ($cliente == 4884) OR
      ($cliente == 4885) OR
      ($cliente == 4886) OR
      ($cliente == 4887) OR
      ($cliente == 4888) OR
      ($cliente == 4889) OR
      ($cliente == 4890) OR
      ($cliente == 4891) OR
      ($cliente == 4892) OR
      ($cliente == 4893) OR
      ($cliente == 4894) OR
      ($cliente == 4895) OR
      ($cliente == 4896) OR
      ($cliente == 4897) OR
      ($cliente == 4898) OR
      ($cliente == 4899) OR
      ($cliente == 4900) OR
      ($cliente == 4901) OR
      ($cliente == 4902) OR
      ($cliente == 4903) OR
      ($cliente == 4904) OR
      ($cliente == 4905) OR
      ($cliente == 4906) OR
      ($cliente == 4907) OR
      ($cliente == 4908) OR
      ($cliente == 4909) OR
      ($cliente == 4910) OR
      ($cliente == 4911) OR
      ($cliente == 4912) OR
      ($cliente == 4913) OR
      ($cliente == 4914) OR
      ($cliente == 5089))
    {
        copy($xml.$array[$i], $greenflex.$array[$i]);
    }
}
echo "************************************************************************************************************<br>";
*/

copiar();
function copiar () {
    global $array;
    global $xml;
    global $greenflex;
    
    for ($i=0;$i<sizeof($array);$i++) {
        copy($xml.$array[$i], $greenflex.$array[$i]);
    }
}

function ARCHIVAR() {
    
    global $array;
    global $logs;
    global $creado;
    
    $zip = new ZipArchive();
    $filename = date('Ymd-Hi').".zip";
    
    if($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
        exit ("No se puede abrir el fichero ".$filename);
    }
    
    for($i=0;$i<sizeof($array);$i++) {
        $zip->addFile("xml/".$array[$i]);
        //echo ($i+1)." - Nombre fichero: ".$array[$i]."<br>";
    }
    
    if($zip->status != 0) {
        echo "Error en la creación del fichero";
    } else {
        echo "Fichero creado: ".date("Y-m-d_h-i-sa")."-".$filename;
        return $creado = 1;
    };
    $zip->close();
    
}

function BORRAR() {
    global $array;
    global $logs;
    
    for($i=0;$i<sizeof($array);$i++) {
        if(unlink("xml/".$array[$i])) {
            $logs = "El fichero ".$array[$i]." ha sido eliminado \n";
            LOGS($logs);
        };
    }
}

function LOGS($logs) {
    global $logs;
    global $historico;
    
    
    $FicheroLog = fopen("log/log-".date('Ymd-Hi').".txt", "a") or die("No se ha podido abrir el archivo");
    $historico = date("Ymd-Hi")." \n".$logs;
    fwrite($FicheroLog, $historico);
    fclose($FicheroLog);
    
}
