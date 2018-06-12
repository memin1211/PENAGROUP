<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Gestión de Clientes";
require_once("../include/bitacora.php");
?>
   <body onload = "document.Form.PrimerNombreCliente.focus()">
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#verCliente" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nuevoCliente" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nuevo Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modificarCliente" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Cliente</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <?php include_once("verCliente.php"); ?>
                <!--/.Panel 1-->

                <!--Panel 2-->
                <?php include_once("nuevoCliente.php"); ?>
                <!--/.Panel 2-->
                <!--Panel 3-->
                <?php include_once("modificarCliente.php"); ?>
                <!--/.Panel 3-->
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="ValidacionesJS/ValidacionesNuevoCliente.js"></script>
   </body>
</html>
