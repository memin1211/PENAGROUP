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
      <link rel="icon" type="image/ico" href="../../assets/img/icono.ico" />
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
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nuevo Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Producto</a>
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
                                      <th>PRODUCTO</th>
                                     <th>LABORATORIO</th>
                                      <th>TIPO PRODUCTO</th>
                                      <th>CANT/UNI</th>
                                      <th>COSTO</th>
                                      <th>P/P</th>
                                      <th>CATEGORIA</th>
                                  </tr>
                              </thead>
                              <!--Table head-->

                              <!--Table body-->
                              <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td>ACETAMINOFEN</td>
                                      <td>MK</td>
                                      <td>TABLETA</td>
                                      <td>700</td>
                                      <td>0.04</td>
                                      <td>0.06</td>
                                      <td>VENTA LIBRE</td>
                                  </tr>
                                  <tr>
                                     <th scope="row">2</th>
                                     <td>ACETAMINOFEN</td>
                                     <td>SYM</td>
                                     <td>BLISTER</td>
                                     <td>1000</td>
                                     <td>0.08</td>
                                     <td>0.25</td>
                                     <td>VENTA LIBRE</td>
                                  </tr>
                                  <tr>
                                     <th scope="row">3</th>
                                     <td>TETRA B 120/10</td>
                                     <td>SAIMED</td>
                                     <td>JARABE</td>
                                     <td>10</td>
                                     <td>3.25</td>
                                     <td>4.50</td>
                                     <td>ETICO</td>
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
                         <p class="h4 text-center mb-4">Nuevo Producto</p>

                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-vcard prefix grey-text"></i>
                             <input type="text" id="NombreProducto" name="NombreProducto" class="form-control" required>
                             <label for="NombreProducto">Producto</label>
                         </div>
                         <br>

                         <div class="row">
                            <div class="col-4">
                               <!-- Material input text -->
                               <select class="mdb-select">
                                  <option value="" disabled selected>Laboratorio</option>
                                  <option value=""></option>
                                  <option value="1">MK</option>
                                  <option value="2">SYM</option>
                                  <option value="3">SAIMED</option>
                              </select>
                              <label>Laboratorio</label>
                            </div>
                            <div class="col-4">
                               <!-- Material input text -->
                               <select class="mdb-select">
                                  <option value="" disabled selected>Tipo Producto</option>
                                  <option value=""></option>
                                  <option value="1">TABLETA</option>
                                  <option value="2">JARABE</option>
                                  <option value="3">BLISTER</option>
                              </select>
                              <label>Tipo Producto</label>
                            </div>
                            <div class="col-4">
                               <!-- Material input text -->
                               <select class="mdb-select">
                                  <option value="" disabled selected>Categoria</option>
                                  <option value=""></option>
                                  <option value="1">ETICO</option>
                                  <option value="2">VENTA LIBRE</option>
                              </select>
                              <label>Categoria</label>
                            </div>
                        </div>
                        <br>

                        <!-- Material input text -->
                        <div class="md-form">
                           <i class="fa fa-hashtag prefix grey-text"></i>
                           <input type="email" id="CantidadProdcuto" name="CantidadProducto" class="form-control">
                           <label for="CantidadProducto">Cant/Uni</label>
                        </div>

                        <!-- Material input text -->
                        <div class="md-form">
                           <i class="fa fa-usd prefix grey-text"></i>
                           <input type="email" id="CostoProducto" name="CostoProducto" class="form-control">
                           <label for="CostoProducto">Costo</label>
                        </div>

                        <!-- Material input text -->
                           <div class="md-form">
                              <i class="fa fa-usd prefix grey-text"></i>
                              <input type="email" id="PrecioProducto" name="PrecioProducto" class="form-control">
                              <label for="PrecioProducto">Precio</label>
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
                       <p class="h4 text-center mb-4">Modificar Producto</p>

                       <!-- Material input text -->
                       <div class="md-form">
                          <i class="fa fa-vcard prefix grey-text"></i>
                          <input type="text" id="NombreProducto" name="NombreProducto" class="form-control" required>
                          <label for="NombreProducto">Producto</label>
                       </div>
                       <br>

                       <div class="row">
                          <div class="col-4">
                             <!-- Material input text -->
                             <select class="mdb-select">
                                <option value="" disabled selected>Laboratorio</option>
                                <option value=""></option>
                                <option value="1">MK</option>
                                <option value="2">SYM</option>
                                <option value="3">SAIMED</option>
                           </select>
                           <label>Laboratorio</label>
                          </div>
                          <div class="col-4">
                             <!-- Material input text -->
                             <select class="mdb-select">
                                <option value="" disabled selected>Tipo Producto</option>
                                <option value=""></option>
                                <option value="1">TABLETA</option>
                                <option value="2">JARABE</option>
                                <option value="3">BLISTER</option>
                           </select>
                           <label>Tipo Producto</label>
                          </div>
                          <div class="col-4">
                             <!-- Material input text -->
                             <select class="mdb-select">
                                <option value="" disabled selected>Categoria</option>
                                <option value=""></option>
                                <option value="1">ETICO</option>
                                <option value="2">VENTA LIBRE</option>
                           </select>
                           <label>Categoria</label>
                          </div>
                      </div>
                      <br>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-hashtag prefix grey-text"></i>
                         <input type="email" id="CantidadProdcuto" name="CantidadProducto" class="form-control">
                         <label for="CantidadProducto">Cant/Uni</label>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-usd prefix grey-text"></i>
                         <input type="email" id="CostoProducto" name="CostoProducto" class="form-control">
                         <label for="CostoProducto">Costo</label>
                      </div>

                      <!-- Material input text -->
                         <div class="md-form">
                           <i class="fa fa-usd prefix grey-text"></i>
                           <input type="email" id="PrecioProducto" name="PrecioProducto" class="form-control">
                           <label for="PrecioProducto">Precio</label>
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
<script type="text/javascript">
// Material Select Initialization
$(document).ready(function() {
   $('.mdb-select').material_select();
 });
</script>
   </body>
</html>
