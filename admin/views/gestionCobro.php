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
                 <a class="nav-link active" data-toggle="tab" href="#verCreditoPendiente" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Creditos Pendientes</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#verCatalogoCobro" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Catalogo de Cobros</a>
             </li>
         </ul>
         <!-- Tab panels -->
         <div class="tab-content">

             <!--Panel 1-->
             <?php include_once("verCreditoPendiente.php"); ?>
             <!--/.Panel 1-->
             <!--Panel 2-->
             <?php include_once("verCatalogoCobro.php"); ?>
             <!--/.Panel 2-->
         </div>
      </div>
   </div>
   <?php include_once("../include/footer.php"); ?>
</body>
</html>
