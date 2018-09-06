<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado al Panel de Reporte en Bodega";
require_once("../include/bitacora.php");
?>
<body>
   <br><br><br>
   <div class="container" id="gestion">
      <div class="container">
         <!-- Nav tabs -->
         <ul class="nav nav-tabs nav-justified info-color" role="tablist">
             <li class="nav-item">
                 <a class="nav-link active" data-toggle="tab" href="#PanelReporteBodega" role="tab" style="margin-left:10px;"><i class="fa fa-cart-plus" aria-hidden="true"></i> PANEL DE REPORTES EN BODEGA</a>
             </li>
         </ul>
         <!-- Tab panels -->
         <div class="tab-content">
           <div class="tab-pane fade in show active" id="PanelReporteBodega" role="tabpanel">
               <div class="card">
                 <div class="card-body">
                    <div class="row">
                      <?php echo  "Panel de Reporteria"?>
                    </div>
                 </div>
             </div>
           </div>
         </div>
      </div>
   </div>
   <?php include_once("../include/footer.php"); ?>
</body>
</html>
