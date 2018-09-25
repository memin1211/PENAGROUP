<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Pedidos";
require_once("../include/bitacora.php");
?>
<body>
   <br><br><br>
   <div class="container" id="gestion">
      <div class="container">
         <!-- Nav tabs -->
         <ul class="nav nav-tabs nav-justified info-color" role="tablist">
             <li class="nav-item">
                 <a class="nav-link active" data-toggle="tab" href="#verPedidosPendientes" role="tab" style="margin-left:10px;"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Pedidos Pendientes</a>
             </li>
         </ul>
         <!-- Tab panels -->
         <div class="tab-content">
           <div class="tab-pane fade in show active" id="verPedidosPendientes" role="tabpanel">
               <br>
               <div class="card">
                 <div class="card-body">
                    <div class="row">
                       <table id="example" class="display" cellspacing="0" width="100%">
                          <thead>
                             <tr>
                                <th>CANTIDAD</th>
                                <th>PRODUCTO</th>
                                <th>PRECIO UNIDAD</th>
                                <th>PRECIO TOTAL</th>
                                <th></th>
                             </tr>
                          </thead>
                          <tbody>
                             <?php
                             for ($i=1; $i < 31; $i++) {
                                ?>
                                <tr>
                                   <td><?= $i;?></td>
                                  <td>Acetaminofen MK Jbe. 120ml</td>
                                  <td>$3.75</td>
                                  <td>$3.25</td>
                                  <td><i class="fa fa-plus puntero" aria-hidden="true" data-toggle="modal" data-target="#ModalClave" title="<?= $i;?>"></i></td>
                               </tr>
                                <?php
                             }
                             ?>
                         </tbody>
                          <tfoot>
                             <tr>
                                <th>CANTIDAD</th>
                                <th>PRODUCTO</th>
                                <th>PRECIO UNIDAD</th>
                                <th>PRECIO TOTAL</th>
                                <th></th>
                             </tr>
                          </tfoot>
                       </table>
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
