<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado al Panel de Reporte Administrativo";
require_once("../include/bitacora.php");
?>
<body>
   <br><br><br>
   <div class="container" id="gestion">
      <div class="container">
         <!-- Nav tabs -->
         <ul class="nav nav-tabs nav-justified info-color" role="tablist">
             <li class="nav-item">
                 <a class="nav-link active" data-toggle="tab" href="#verBitacora.php" role="tab" style="margin-left:10px;"><i class="fa fa-cart-plus" aria-hidden="true"></i> PANEL DE REPORTES</a>
             </li>
         </ul>
         <!-- Tab panels -->
         <div class="tab-content">
           <div class="tab-pane fade in show active" id="verBitacora" role="tabpanel">
               <div class="card">
                 <div class="card-body">
                    <div class="row">
                      <?php echo "Panel de Reporteria"; ?>
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
