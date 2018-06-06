<?php
require_once("../include/validarSesion.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#verProveedor" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nuevoProveedor" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nuevo Proveedor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modificarProveedor" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Proveedor</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <?php include_once("verProveedor.php"); ?>
                <!--/.Panel 1-->
                <!--Panel 2-->
                <?php include_once("nuevoProveedor.php"); ?>
                <!--/.Panel 2-->
                <!--Panel 3-->
                <?php include_once("modificarProveedor.php"); ?>
                <!--/.Panel 3-->
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
