<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Gestión de Sucursales";
require_once("../include/bitacora.php");
//$sqlVerSucursal="SELECT A.Id, A.Nombre, A.Direccion, A.Telefono, B.Nombre AS Municipio FROM erp_sucursal A INNER JOIN erp_municipio B ON (B.Id=A.Id_Municipio)";
//$query=mysqli_query($mysqli, $sqlVerSucursal) or die(mysqli_error($db_handle));
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#verSucursal" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Sucursales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nuevoSucursal" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nueva Sucursal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modificarSucursal" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Sucursal</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <?php include_once("../views/verSucursal.php"); ?>
                <!--/.Panel 1-->

                <!--Panel 2-->
                <?php include_once("../views/nuevoSucursal.php"); ?>
                <!--/.Panel 2-->

                <!--Panel 3-->
                <?php include_once("../views/modificarSucursal.php"); ?>
                <!--/.Panel 3-->
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="ValidacionesJS/ValidacionesNuevoSucursal.js"></script>
      <script type="text/javascript" src="ValidacionesJS/nuevoSucursal.js"></script>
   </body>
</html>
