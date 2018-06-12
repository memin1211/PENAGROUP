<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Gestión de Bitácora";
require_once("../include/bitacora.php");
?>
<body>
   <br><br><br>
   <div class="container" id="gestion">
      <div class="container">
         <!-- Nav tabs -->
         <ul class="nav nav-tabs nav-justified info-color" role="tablist">
             <li class="nav-item">
                 <a class="nav-link active" data-toggle="tab" href="#verBitacora.php" role="tab" style="margin-left:10px;"><i class="fa fa-cart-plus" aria-hidden="true"></i> BITÁCORA</a>
             </li>
         </ul>
         <!-- Tab panels -->
         <div class="tab-content">
             <!--Inicion Modal para Ver el Catalogo de Producto en Venta-->
             <?php include_once("verBitacora.php"); ?>
             <!--/.FinModal para Ver el Catalogo de Producto en Venta-->
         </div>
      </div>
   </div>
   <?php include_once("../include/footer.php"); ?>
</body>
</html>
