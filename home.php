<?php
session_start();
if(isset($_SESSION['loggedin'])){
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Panel de Administrador</title>
        <link rel="stylesheet" href="assets/css/tether.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/menu.css">
        <link rel="stylesheet" href="assets/css/admin.css">
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/tether.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php include_once('header.php'); ?>
    </body>
    </html>
    <?php
}else{
    header('Location:logout.php');
}
?>