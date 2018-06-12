<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Gestión de Ventas";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-book" aria-hidden="true"></i> Gestionar Ventas</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">
                <!--Panel 1-->
                <?php include_once("../include/Ver_Catalogo_Venta.php"); ?>
                <!--/.Panel 1-->
                <!--Inicio Modal Ver Detalle de la Venta-->
                <?php include_once("../include/Ver_Detalle_Venta.php"); ?>
                <!--/.Fin Modal Ver Detalle de la Venta-->
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
