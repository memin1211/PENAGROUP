<?php
  session_start();
  if (isset($_SESSION['actual'])) {
    if ($_SESSION['actual']['NombreNivel']=="USUARIO") {
      header('Location: ../../usuario/views/');
    }
    $Sucursal=$_REQUEST['sucursal'];
    include_once("../include/panel.php");
    include_once("../include/menu.php");
  }else {
    header('Location: ../../');
  }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>.::PENAGROUP::.</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="../../assets/css/compiled.min.css" rel="stylesheet" type="text/css">
      <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="../../assets/css/style.css" rel="stylesheet" type="text/css">
      <link rel="icon" type="image/ico" href="../../assets/img/logo.png" />
      <style media="screen">
        a{
         color: white;
        }
        a:hover{
         color: white;
        }
      </style>
   </head>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified blue-gradient" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-cubes" aria-hidden="true"></i>Ordenes de Compra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Generar Orden de Compra</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                  <!--Pagination -->
                    <nav aria-label="pagination example">
                        <ul class="pagination pagination-circle pg-blue mb-0 pagination-sm">

                            <!--First-->
                            <li class="page-item disabled"><a class="page-link">Primer</a></li>

                            <!--Arrow left-->
                            <li class="page-item disabled">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Anterior</span>
                                </a>
                            </li>

                            <!--Numbers-->
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">4</a></li>
                            <li class="page-item"><a class="page-link">5</a></li>

                            <!--Arrow right-->
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Siguiente</span>
                                </a>
                            </li>

                            <!--Last-->
                            <li class="page-item"><a class="page-link">Último</a></li>

                        </ul>
                    </nav>
                    <!--Fin Pagination -->
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
                <!--/.Panel 1-->

                <!--Panel 2-->
                <div class="tab-pane fade" id="panel6" role="tabpanel">
                    <!-- Material form contact -->
                     <form>
                         <p class="h4 text-center mb-4">Generar Orden de Compra</p>

                         <div class="row">
                           <div class="col-6">
                             <!-- Material input text -->
                             <div class="md-form">
                               <i class="fa fa-user prefix grey-text"></i>
                                 <input type="text" id="SolicitanteOrdenCompra" name="SolicitanteOrdenCompra" class="form-control" value="MARIA DEL CARMEN AMAYA" style="width:80%;" disabled>
                                 <label for="SolicitanteOrdenCompra">Solicitante</label>
                             </div>
                           </div>
                           <div class="col-6">
                             <!-- Material input datepicker -->
                             <div class="md-form">
                               <i class="fa fa-calendar prefix grey-text"></i>
                                  <input placeholder="Seleccione Fecha de Orden de Compra" name="FechaOrdenServicio" id="FechaOrdenServicio" type="text" id="date-picker-example" class="form-control datepicker" style="width:80%; background: white;" required>
                                  <label for="date-picker-example">Fecha de Orden de Compra</label>
                             </div>
                           </div>
                         </div>
                         <!--Table-->
                         <table class="table table-hover table-responsive-md table-fixed">
                             <!--Table head-->
                             <thead class="special-color white-text">
                                 <tr>
                                     <th>CANTIDAD</th>
                                     <th>PRODUCTO</th>
                                     <th>LABORATORIO</th>
                                     <th>PRESENTACIÓN</th>
                                 </tr>
                             </thead>
                             <!--Table head-->

                             <!--Table body-->
                             <tbody>
                                 <tr>
                                     <th scope="row">1000</th>
                                     <td>ACETAMINOFEN</td>
                                     <td>MK</td>
                                     <td>TABLETA</td>
                                 </tr>
                                 <tr>
                                   <th scope="row">10</th>
                                   <td>ACETAMINOFEN 120 ml</td>
                                   <td>MK</td>
                                   <td>JARABE</td>
                                 </tr>
                                 <tr>
                                   <th scope="row">1500</th>
                                   <td>RANITIDINA 150</td>
                                   <td>SAIMED</td>
                                   <td>CAPSULA</td>
                                 </tr>
                                 <tr>
                                   <th scope="row">1200</th>
                                   <td>RANITIDINA 300</td>
                                   <td>SAIMED</td>
                                   <td>CAPSULA</td>
                                 </tr>
                             </tbody>
                             <!--Table body-->
                         </table>
                         <!--Table-->
                         <div class="text-center mt-4">
                             <button class="btn btn-outline-info" type="button">Generar Orden<i class="fa fa-paper-plane-o ml-2"></i></button>
                         </div>
                     </form>
                     <!-- Material form contact -->
               </div>
                <!--/.Panel 2-->
            </div>
         </div>
      </div>
      <script type="text/javascript" src="../../assets/js/SelectorFecha.js"></script>
      <script type="text/javascript">
      // Material Select Initialization
      $(document).ready(function() {
        $('.mdb-select').material_select();
      });
      </script>
   </body>
</html>
