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
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/tether.js"></script>
    <script src="assets/js/vue.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">
                    Ingresar</p>
                <form class="login" method="post">
                    <input type="text" id="username" name="username" placeholder="Usuario" />
                    <input type="password" id="password" name="password" placeholder="Contraseña" />
                    <input type="submit" id="submit" name="submit" value="Sign In" class="btn btn-success btn-sm" />
                </form>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/main.js"></script>
</body>
</html>