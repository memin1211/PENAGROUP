<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Ordenes de Compra en Bodega";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#verOrdenCompraBodega" role="tab" style="margin-left:10px;"><i class="fa fa-cubes" aria-hidden="true"></i>Catàlogo de Ordenes de Compra en Bodega</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">
              <div class="tab-pane fade in show active" id="verOrdenCompraBodega" role="tabpanel">

                 <br>
                  <div class="card">
                    <div class="card-body">
                        <!--Table-->

                        <table class="table table-hover table-responsive-md table-fixed">
                            <!--Table head-->
                            <thead class="special-color white-text">
                                <tr>
                                    <th>CODIGO</th>
                                    <th>SOLICITANTE</th>
                                    <th>REVISADO POR</th>
                                    <th>DOCUMENTO</th>
                                    <th>FECHA SOLICITUD</th>
                                    <th>FECHA DE INGRESO</th>
                                    <th>ESTADO</th>
                                </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MARIA DEL CARMEN</td>
                                    <td>ALLAN BRITO</td>
                                    <td>CFF 1001</td>
                                    <td>14/05/2018</td>
                                    <td>17/05/2018</td>
                                    <td>PENDIENTE DE INGRESO</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>FLOR DE MARIA AMAYA</td>
                                  <td>LILIANA ALFARO</td>
                                  <td></td>
                                  <td>11/05/2018</td>
                                  <td></td>
                                  <td>DENEGADA</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>JOSE ROBERTO BORJAS</td>
                                  <td>JUAN PEREZ</td>
                                  <td>CCF 9595</td>
                                  <td>10/04/2018</td>
                                  <td>13/04/2018</td>
                                  <td>RECIBIDO</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MARCOS ANTONIO CHEVES</td>
                                    <td>JOSE MARTINEZ</td>
                                    <td>CCF 201</td>
                                    <td>06/04/2018</td>
                                    <td>09/04/2018</td>
                                    <td>RECIBIDO</td>
                                </tr>
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                </div>
              </div>
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
