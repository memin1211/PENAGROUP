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
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i>Créditos Emitidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Generar Cobro</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
                    <div class="card">
                      <div class="card-body">
                          <!--Table-->
                          <table class="table table-hover table-responsive-md table-fixed">
                              <!--Table head-->
                              <thead class="special-color white-text">
                                  <tr>
                                      <th>CODIGO</th>
                                      <th>CLIENTE</th>
                                      <th>CORRELATIVO</th>
                                      <th>FECHA EMISION</th>
                                      <th>FECHA VENCIMIENTO</th>
                                      <th>MONTO CREDITO</th>
                                      <th>ESTADO</th>
                                  </tr>
                              </thead>
                              <!--Table head-->

                              <!--Table body-->
                              <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td>MARTA DEL CARMEN MELARA</td>
                                      <td>CCF 101</td>
                                      <td>12/04/2018</td>
                                      <td>27/04/2018</td>
                                      <td>$ 75.50</td>
                                      <td>PENDIENTE</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>FLOR DE MARIA AMAYA</td>
                                    <td>CCF 105</td>
                                    <td>10/04/2018</td>
                                    <td>10/05/2018</td>
                                    <td>$ 90.45</td>
                                    <td>PENDIENTE</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>JOSE ROBERTO BORJAS</td>
                                    <td>CCF 115</td>
                                    <td>13/04/2018</td>
                                    <td>28/04/2018</td>
                                    <td>$ 125.75</td>
                                    <td>PENDIENTE</td>
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
                         <p class="h4 text-center mb-4">Buscar Credito</p>

                         <table style="width:100%;">
                            <tr>
                               <td style="width:20%">
                                  <!--Blue select-->
                                  <select class="mdb-select colorful-select dropdown-primary">
                                     <option value="">Buscar Por</option>
                                      <option value="1">Cliente</option>
                                      <option value="2">CCF</option>
                                      <option value="3">Etc...</option>
                                  </select>
                                  <label>Buscar Por</label>
                                  <!--/Blue select-->
                               </td>
                               <td style="width:5%;"></td>
                               <td style="width:50%">
                                  <!-- Material input text -->
                                  <div class="md-form">
                                      <i class="fa fa-user prefix grey-text"></i>
                                      <input type="text" id="ParametroABuscar" name="ParametroABuscar" class="form-control" required>
                                      <label for="ParametroABuscar"></label>
                                  </div>
                               </td>
                               <td style="width:10%;"></td>
                               <td style="width:15%">
                                  <div class="text-center mt-4">
                                      <button class="btn btn-outline-info" type="submit">Buscar<i class="fa fa-search ml-2"></i></button>
                                  </div>
                               </td>
                            </tr>
                         </table>
                         <tr>
                            <hr>
                         </tr>
                     </form>
                     <!-- Material form contact -->
               </div>
                <!--/.Panel 2-->
            </div>
         </div>
      </div>
<script type="text/javascript">

// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').material_select();
});
</script>
   </body>
</html>
