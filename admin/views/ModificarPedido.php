<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Modificar Pedido";
require_once("../include/bitacora.php");
?>
<body>
   <br><br><br>
   <div class="container" id="gestion">
      <div class="container">
         <!-- Nav tabs -->
         <ul class="nav nav-tabs nav-justified info-color" role="tablist">
             <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#verCatalogoCobro" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Modificar Pedido</a>
             </li>
         </ul>
         <!-- Tab panels -->
         <div class="tab-content">

             <!--Panel 1-->
             <?php echo "AQUI IRA EL FORMULARIO DE MODIFICAR PEDIDOS"; ?>
             <!--/.Panel 1-->
         </div>
      </div>
   </div>
   <?php include_once("../include/footer.php"); ?>
</body>
</html>
