<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Compras";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#verCompra" role="tab" style="margin-left:10px;"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Compras</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">
              <div class="tab-pane fade in show active" id="verUsuario" role="tabpanel">
                  <div class="card">
                    <div class="card-body">
                       <div class="row">
                         <table id="example" class="display" cellspacing="0" width="100%">
                             <thead>
                                <tr>
                                   <th>CÓDIGO</th>
                                   <th>NOMBRE</th>
                                   <th>DIRECCIÓN</th>
                                   <th>TELÉFONO FIJO</th>
                                   <th>CELULAR</th>
                                   <th>CORREO</th>
                                   <th>ESTADO</th>
                                </tr>
                             </thead>
                             <tbody>
                                   <tr>
                                      <td>1</td>
                                      <td>Jomi S.A de C.V</td>
                                      <td>Mejicanos, San Salvador</td>
                                      <td>2585-6596</td>
                                      <td></td>
                                      <td>ventas@jomi.com</td>
                                      <td>Activo</td>
                                   </tr>
                             </tbody>
                             <tfoot>
                                <tr>
                                  <th>CÓDIGO</th>
                                  <th>NOMBRE</th>
                                  <th>DIRECCIÓN</th>
                                  <th>TELÉFONO FIJO</th>
                                  <th>CELULAR</th>
                                  <th>CORREO</th>
                                  <th>ESTADO</th>
                                </tr>
                             </tfoot>
                         </table>
                       </div>
                    </div>
                </div>


                <div class="row">
                  <!-- Modal Detalle de Orden-->
                    <?php include_once("../include/Ver_Detalle_Orden.php"); ?>
                  <!-- Fin Modal Detalle de Orden-->
                </div>

              </div>
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
