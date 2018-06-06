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
                 <a class="nav-link active" data-toggle="tab" href="#verCatalogoProducto.php" role="tab" style="margin-left:10px;"><i class="fa fa-cart-plus" aria-hidden="true"></i> FACTURACIÓN</a>
             </li>
         </ul>
         <!-- Tab panels -->
         <div class="tab-content">
             <!--Inicion Modal para Ver el Catalogo de Producto en Venta-->
             <?php include_once("verCatalogoProducto.php"); ?>
             <!--/.FinModal para Ver el Catalogo de Producto en Venta-->
             <!--Inicion Modal para Agregar Informacion del Cliente a la Venta-->
             <?php include_once("InformacionCliente.php"); ?>
             <!--/.Fin Modal para Agregar Informacion del Cliente a la Venta-->
             <!--Inicion Modal para Agregar Producto a Venta-->
             <?php include_once("../include/Agregar_Producto_Venta.php"); ?>
             <!--/.Fin Modal para Agregar Producto a Venta-->
             <!--Inicion Modal para Agregar Producto a Venta-->
             <?php include_once("../include/Ver_Detalle_Venta.php"); ?>
             <!--/.Fin Modal para Agregar Producto a Venta-->
         </div>
      </div>
   </div>
   <?php include_once("../include/footer.php"); ?>
</body>
</html>
