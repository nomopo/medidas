<?php

if (isset($_POST['submit'])) {
    include_once('assets/config/db.php');
    include_once('assets/config/funciones.php');
    validarUsuario($_POST['username'],$_POST['password']);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/tether.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/listado.css">
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/tether.js"></script>
    <script src="assets/js/vue.min.js"></script>

</head>
<body>
  
<?php
include_once('header.php');
include_once('./assets/config/db.php');
include_once('./assets/config/funciones.php');

$sql = "SELECT * FROM material WHERE borrado = 1";

$result = $conexion->query($sql);
 
while($row = $result->fetch_array())
  {
  echo '<div class="row">
        <div class="col-md-12">  
            <table border=1>
                <tr>
                    <td width="25px">'.$row['id'].'</td>
                    <td width="180px">'.$row['familia'].'</td>
                    <td width="200px">'.$row['codigo'].'</td>
                    <td width="150px">'.$row['modelo'].'</td>
                    <td width="10px">'.$row['version'].'</td>
                    <td width="250px">'.$row['numero_serie'].'</td>
                    <td width="100px">'.$row['fecha_compra'].'</td>
                    <td width="260px">'.$row['ruta_factura'].'</td>
                    <td width="10px">'.$row['activo'].'</td>
                    <td width="150px">'.$row['empresa'].'</td>
                    <td width="150px">'.$row['departamento'].'</td>
                    <td width="120px">'.$row['usuario'].'</td>
                    <td width="auto">'.$row['observaciones'].'</td>
                </tr>
            </table>
        </div>
  </div>';
  }
/* cerrar el resultset */
$result->close();


?>

</body>
</html>