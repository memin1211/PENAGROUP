<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Productos en Bodega";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#verProductoBodega" role="tab" style="margin-left:10px;"><i class="fa fa-address-book" aria-hidden="true"></i><label class="d-none d-sm-block">Catálogo de Productos en Bodega</label></a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">
              <div class="tab-pane fade in show active" id="verProductoBodega" role="tabpanel">
                  <div class="card">
                    <div class="card-body">
                       <div class="row">
                         <table id="example" class="display" cellspacing="0" width="100%">
                             <thead>
                                <tr>
                                   <th>CÓDIGO</th>
                                   <th>NOMBRE</th>
                                   <th>LABORATORIO</th>
                                   <th>PRESENTACIÓN</th>
                                   <th>CÁNT/UNI</th>
                                   <th>COSTO</th>
                                   <th>P/P</th>
                                   <th>VENCIMIENTO</th>
                                   <th>CATEGORÍA</th>
                                   <th>SUCURSAL</th>
                                </tr>
                             </thead>
                             <tbody>
                               <?php
                                  foreach ($MatrizProducto as $value) {
                                    ?>
                                  <tr>
                                     <td><?php echo $value['Codigo_Barra']; ?></td>
                                     <td><?php  echo $value['Producto']; ?></td>
                                     <td><?php echo $value['Laboratorio']; ?></td>
                                     <td><?php  echo $value['Presentacion']; ?></td>
                                     <td><?php  echo $value['Existencia']; ?></td>
                                     <td><?php  echo $value['Costo_Unidad']; ?></td>
                                     <td><?php  echo $value['Precio_Unidad']; ?></td>
                                     <td><?php  echo $value['Fecha_Vencimiento']; ?></td>
                                     <td><?php  echo $value['Categoria']; ?></td>
                                     <td><?php  echo $value['Nombre_Corto']; ?></td>
                                  </tr>
                               <?php
                                  }
                                ?>
                             </tbody>
                             <tfoot>
                                <tr>
                                  <th>CÓDIGO</th>
                                  <th>NOMBRE</th>
                                  <th>LABORATORIO</th>
                                  <th>PRESENTACIÓN</th>
                                  <th>CÁNT/UNI</th>
                                  <th>COSTO</th>
                                  <th>P/P</th>
                                  <th>VENCIMIENTO</th>
                                  <th>CATEGORÍA</th>
                                  <th>SUCURSAL</th>
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
