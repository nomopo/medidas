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
        <link rel="stylesheet" href="assets/css/listado.css">
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/tether.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php include_once('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="insertarDatos.php" method="post" enctype="multipart/form-data">
                    <h1>INSERTAR MATERIAL</h1>
                    <div class="form-group">
                        <label for="familia">Familia</label>
                        <select name="familia" id="familia" class="form-control" required>
                            <option value="">Seleccione la familia</option>
                            <option value="sai">SAI</option>
                            <option value="pc sobremesa">PC Sobremesa</option>
                            <option value="pc portatil">PC Portátil</option>
                            <option value="monitor">Monitor</option>
                            <option value="tv">TV</option>
                            <option value="tablet">Tablet</option>
                            <option value="telefono">Teléfono</option>
                            <option value="movil">Móvil</option>
                            <option value="teclado">Teclado</option>
                            <option value="raton">Ratón</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="codigo">Código</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del equipo" required>
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo del equipo" required>
                    </div>
                    <div class="form-group">
                        <label for="version">Modelo</label>
                        <input type="text" class="form-control" id="version" name="version" placeholder="Versión del equipo">
                    </div>
                    <div class="form-group">
                        <label for="numero_serie">Núm. Serie</label>
                        <input type="text" class="form-control" id="numero_serie" name="numero_serie" placeholder="Número de serie del equipo" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_compra">Fecha Compra</label>
                        <input type="date" class="form-control" id="fecha_compra" name="fecha_compra" placeholder="Fecha de compra">
                    </div>
                    <div class="form-group">
                        <label for="garantia">Garantía</label>
                        <select name="garantia" id="garantia" class="form-control">
                            <option value="0">NO LO SE</option>
                            <option value="6">6 meses</option>
                            <option value="12">12 meses</option>
                            <option value="18">18 meses</option>
                            <option value="24">24 meses</option>
                            <option value="30">30 meses</option>
                            <option value="36">36 meses</option>
                            <option value="42">42 meses</option>
                            <option value="48">48 meses</option>
                            <option value="54">54 meses</option>
                            <option value="60">60 meses</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numero_factura">Número Factura</label>
                        <input type="text" class="form-control" id="numero_factura" name="numero_factura" placeholder="Número de factura">
                    </div>
                    <div class="form-group">
                        <label for="activo">En activo</label>
                        <select name="activo" id="activo" class="form-control">
                            <option value=1>Si</option>
                            <option value=0>No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="archivo_factura">Archivo Factura</label>
                        <input type="file" class="form-control" id="archivo_factura" name="archivo_factura" placeholder="Seleccione una factura">
                    </div>
                    <div class="form-group">
                        <label for="empresa">Empresa</label>
                        <select name="empresa" id="empresa" class="form-control" required>
                            <option value="">Seleccione una empresa</option>
                            <option value="SunAir One Energy">SunAir One Energy</option>
                            <option value="SunAir One Home">SunAir One Home</option>
                            <option value="SunAir Evolution">SunAir Evolution</option>
                            <option value="Megastradis">Megastradis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <select name="departamento" id="departamento" class="form-control" required>
                            <option value="">Seleccione un departamento</option>
                            <option value="presidencia">Presidencia</option>
                            <option value="direccion">Dirección</option>
                            <option value="traders">Traders</option>
                            <option value="procesos">Procesos</option>
                            <option value="contabilidad">Procesos</option>
                            <option value="coordinación">Coordinación</option>
                            <option value="medidas">Medidas</option>
                            <option value="juridico">Jurídico</option>
                            <option value="tecnico">Técnico</option>
                            <option value="propuestas">Propuestas</option>
                            <option value="gestion_suministro">Gestión Suministro</option>
                            <option value="comercial">Comercial</option>
                            <option value="recepcion">Recepción</option>
                            <option value="contratos">Contratos</option>
                            <option value="callcenter">Callcenter</option>
                            <option value="externos">Externos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <select name="usuario" id="usuario" class="form-control" required>
                            <option value="">Seleccione un usuario</option>
                            <option value="Antonio Sánchez">Antonio Sánchez</option>
                            <option value="Eva Bibian">Eva Bibian</option>
                            <option value="Noé Moreno">Noé Moreno</option>
                            <option value="Alexis Sánchez">Alexis Sánchez</option>
                            <option value="Andres Canal">Andres Canal</option>
                            <option value="Daniel Hung">Daniel Hung</option>
                            <option value="Cesc Bonet">Cesc Bonet</option>
                            <option value="Celine Sánchez">Celine Sánchez</option>
                            <option value="Mari Carmen Cabello">Mari Carmen Cabello</option>
                            <option value="Raquel De Madre">Raquel De Madre</option>
                            <option value="Domingo Ferré">Domingo Ferré</option>
                            <option value="Josep Iglesias">Josep Iglesias</option>
                            <option value="Elena Rodriguez">Elena Rodriguez</option>
                            <option value="Toni Balague">Toni Balague</option>
                            <option value="Joan Fernandez">Joan Fernandez</option>
                            <option value="Manuel Cuenca">Manuel Cuenca</option>
                            <option value="María José Salvadó">María José Salvadó</option>
                            <option value="Silvia Palomino">Silvia Palomino</option>
                            <option value="Loli Cárdenas">Loli Cárdenas</option>
                            <option value="Núria Agustench">Núria Agustench</option>
                            <option value="Yolanda Albandea">Yolanda Albandea</option>
                            <option value="Edu Cárdenas">Edu Cárdenas</option>                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="observaciones">Observaciones</label>
                        <input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones">
                    </div>
                    <input type="submit" value="Enviar" >
                    <input type="reset" value="Cancelar">
                </form>
                <br><br>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
}else{
    header('Location:logout.php');
}
?>