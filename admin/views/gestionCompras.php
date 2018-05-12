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
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i>Nueva Orden de Compra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i>Modificar Orden de Compra</a>
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
                                      <th>CÓDIGO</th>
                                      <th>NOMBRE</th>
                                      <th>FECHA EMISIÓN</th>
                                      <th>MONTO</th>
                                      <th>ESTADO</th>
                                  </tr>
                              </thead>
                              <!--Table head-->

                              <!--Table body-->
                              <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td>ROBLES S.A DE C.V</td>
                                      <td>17/05/2018</td>
                                      <td>$250.35</td>
                                      <td>PENDIENTE APROBACIÓN</td>
                                      <td>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                                          <div class="modal-dialog modal-side modal-centered " role="document">
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
                                      </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>BIOKEMICAL S.A DE C.V</td>
                                    <td>16/05/2018</td>
                                    <td>$75.50</td>
                                    <td>APROBADA</td>
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
                             <select class="mdb-select colorful-select dropdown-info">
                                 <option value="" disabled selected>Seleccione</option>
                                 <option value="1">BIOKEMICAL S.A DE C.V</option>
                                 <option value="2">JOMI S.A DE C.V</option>
                                 <option value="3">ROBLES S.A DE C.V</option>
                             </select>
                             <label>Proveedor</label>
                           </div>
                           <div class="col-6">
                             <!-- Material input datepicker -->
                             <div class="md-form">
                                  <input placeholder="Seleccione Fecha de Compra" name="FechaCompra" id="FechaCompra" type="text" id="date-picker-example" class="form-control datepicker" style="width:100%; background: white;" required>
                                  <label for="date-picker-example">Fecha de Compra</label>
                             </div>
                           </div>
                         </div>

                         <div class="row">
                           <div class="col-6">
                             <select class="mdb-select colorful-select dropdown-info">
                                 <option value="" disabled selected>Seleccione</option>
                                 <option value="1">ALLAN BRITO</option>
                                 <option value="2">WILBER DURAN</option>
                                 <option value="3">MICHELLE VEGA</option>
                             </select>
                             <label>Solicita Compra</label>
                           </div>
                           <div class="col-6">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-dollar prefix grey-text"></i>
                                 <input type="text" id="TelefonoSucursal" name="TelefonoSucursal" class="form-control">
                                 <label for="TelefonoSucursal">Monto a Pagar</label>
                             </div>
                           </div>
                         </div>

                         <div class="text-center mt-4">
                             <button class="btn btn-outline-info" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
                         </div>
                     </form>
                     <!-- Material form contact -->
               </div>
                <!--/.Panel 2-->
                <!--Panel 3-->
                <div class="tab-pane fade" id="panel7" role="tabpanel">
                   <!-- Material form contact -->
                   <form>
                       <p class="h4 text-center mb-4">Modificar Informacion Orden de Compra</p>

                       <div class="row">
                         <div class="col-6">
                           <select class="mdb-select colorful-select dropdown-info">
                               <option value="" disabled selected>Seleccione</option>
                               <option value="1">BIOKEMICAL S.A DE C.V</option>
                               <option value="2">JOMI S.A DE C.V</option>
                               <option value="3">ROBLES S.A DE C.V</option>
                           </select>
                           <label>Proveedor</label>
                         </div>
                         <div class="col-6">
                           <!-- Material input datepicker -->
                           <div class="md-form">
                                <input placeholder="Seleccione Fecha de Compra" name="FechaCompra" id="FechaCompra" type="text" id="date-picker-example" class="form-control datepicker" style="width:100%; background: white;" required>
                                <label for="date-picker-example">Fecha de Compra</label>
                           </div>
                         </div>
                       </div>

                       <div class="row">
                         <div class="col-6">
                           <select class="mdb-select colorful-select dropdown-info">
                               <option value="" disabled selected>Seleccione</option>
                               <option value="1">ALLAN BRITO</option>
                               <option value="2">WILBER DURAN</option>
                               <option value="3">MICHELLE VEGA</option>
                           </select>
                           <label>Solicita Compra</label>
                         </div>
                         <div class="col-6">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="fa fa-dollar prefix grey-text"></i>
                               <input type="text" id="TelefonoSucursal" name="TelefonoSucursal" class="form-control">
                               <label for="TelefonoSucursal">Monto a Pagar</label>
                           </div>
                         </div>
                       </div>

                        <div class="text-center mt-4">
                           <button class="btn btn-outline-info" type="submit">Modificar<i class="fa fa-refresh ml-2"></i></button>
                        </div>
                    </form>
                    <!-- Material form contact -->
                </div>
                <!--/.Panel 3-->
            </div>
         </div>
      </div>
      <script type="text/javascript" src="../../assets/js/SelectorFecha.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
        $('.mdb-select').material_select();
      });
      </script>
   </body>
</html>
