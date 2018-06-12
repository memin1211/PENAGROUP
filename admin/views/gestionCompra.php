<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Gestión de Compras";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#verCompra" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nuevoCompra" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i>Nueva Orden de Compra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modificarCompra" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i>Modificar Orden de Compra</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <?php include_once("verCompra.php"); ?>
                <!--/.Panel 1-->
                <?php include_once("nuevoCompra.php"); ?>
                <!--Panel 2-->

                <!--/.Panel 2-->
                <!--Panel 3-->
                <?php include_once("modificarCompra.php"); ?>
                <!--/.Panel 3-->
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
