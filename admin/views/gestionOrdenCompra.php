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
                    <a class="nav-link active" data-toggle="tab" href="#verOrdenCompra" role="tab"><i class="fa fa-cubes" aria-hidden="true"></i>Ordenes de Compra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nuevoOrdenCompra" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Generar Orden de Compra</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <?php include_once("verOrdenCompra.php"); ?>
                <!--/.Panel 1-->
                <!--Panel 2-->
                <?php include_once("nuevoOrdenCompra.php"); ?>
                <!--/.Panel 2-->
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
