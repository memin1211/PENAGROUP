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
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nuevo Cliente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Cliente</a>
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
                              <thead class="blue-grey white-text">
                                  <tr>
                                      <th>CODIGO</th>
                                      <th>CLIENTE</th>
                                      <th>DIRECCION</th>
                                      <th>NIT</th>
                                      <th>NRC</th>
                                      <th>TELEFONO</th>
                                      <th>ESTADO</th>
                                  </tr>
                              </thead>
                              <!--Table head-->

                              <!--Table body-->
                              <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td>JOSE LUIS LOPEZ</td>
                                      <td>CUSCATANCINGO, SAN SALVADOR</td>
                                      <td>1234-123456-123-4</td>
                                      <td>12345-1</td>
                                      <td>25225576</td>
                                      <td>ACTIVO</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>KATHERINE MICHELLE CHINCHILLA</td>
                                    <td>SAN SALVADOR, SAN SALVADOR</td>
                                    <td>1234-123456-123-5</td>
                                    <td>12345-2</td>
                                    <td>25225577</td>
                                    <td>ACTIVO</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>ALLAN BRITO</td>
                                    <td>POR AHI, SAN SALVADOR</td>
                                    <td>1234-123456-123-6</td>
                                    <td>12345-3</td>
                                    <td>25225445</td>
                                    <td>ACTIVO</td>
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
                         <p class="h4 text-center mb-4">Nuevo Cliente</p>

                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-user prefix grey-text"></i>
                             <input type="text" id="NombreCliente" name="NombreCliente" class="form-control" required>
                             <label for="NombreCliente">Nombres</label>
                         </div>

                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-user prefix grey-text"></i>
                             <input type="text" id="ApellidoCliente" name="ApellidoCliente" class="form-control" required>
                             <label for="ApellidoCliente">Apellidos</label>
                         </div>

                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-address-card prefix grey-text"></i>
                             <input type="text" id="DireccionCliente" name="DireccionCliente" class="form-control" required>
                             <label for="DireccionCliente">Dirección</label>
                         </div>

                         <div class="row">
                            <div class="col-4">
                               <!-- Material input text -->
                               <div class="md-form">
                                   <i class="fa fa-phone prefix grey-text"></i>
                                   <input type="text" id="TelefonoCliente" name="TelefonoCliente" class="form-control">
                                   <label for="TelefonoCliente">Teléfono</label>
                               </div>
                            </div>
                            <div class="col-4">
                               <!-- Material input text -->
                               <div class="md-form">
                                   <i class="fa fa-address-card-o prefix grey-text"></i>
                                   <input type="text" id="NitCliente" name="NitCliente" class="form-control">
                                   <label for="NitCliente">NIT</label>
                               </div>
                            </div>
                            <div class="col-4">
                               <!-- Material input text -->
                               <div class="md-form">
                                   <i class="fa fa-indent prefix grey-text"></i>
                                   <input type="text" id="NrcCliente" name="NrcCliente" class="form-control">
                                   <label for="NrcCliente">NRC</label>
                               </div>
                            </div>
                        </div>
                        <br>

                        <!-- Material input text -->
                        <div class="md-form">
                           <i class="fa fa-adjust prefix grey-text"></i>
                           <input type="email" id="GiroCliente" name="GiroCliente" class="form-control">
                           <label for="GiroCliente">Giro</label>
                        </div>

                        <!-- Material input text -->
                        <div class="md-form">
                           <i class="fa fa-envelope prefix grey-text"></i>
                           <input type="email" id="CorreoCliente" name="CorreoCliente" class="form-control">
                           <label for="CorreoCliente">Correo</label>
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
                       <p class="h4 text-center mb-4">Modificar Cliente</p>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-user prefix grey-text"></i>
                           <input type="text" id="NombreCliente" name="NombreCliente" class="form-control" required>
                           <label for="NombreCliente">Nombres</label>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-user prefix grey-text"></i>
                           <input type="text" id="ApellidoCliente" name="ApellidoCliente" class="form-control" required>
                           <label for="ApellidoCliente">Apellidos</label>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-address-card prefix grey-text"></i>
                           <input type="text" id="DireccionCliente" name="DireccionCliente" class="form-control" required>
                           <label for="DireccionCliente">Dirección</label>
                       </div>

                       <div class="row">
                          <div class="col-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-phone prefix grey-text"></i>
                                 <input type="text" id="TelefonoCliente" name="TelefonoCliente" class="form-control">
                                 <label for="TelefonoCliente">Teléfono</label>
                             </div>
                          </div>
                          <div class="col-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-address-card-o prefix grey-text"></i>
                                 <input type="text" id="NitCliente" name="NitCliente" class="form-control">
                                 <label for="NitCliente">NIT</label>
                             </div>
                          </div>
                          <div class="col-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-indent prefix grey-text"></i>
                                 <input type="text" id="NrcCliente" name="NrcCliente" class="form-control">
                                 <label for="NrcCliente">NRC</label>
                             </div>
                          </div>
                      </div>
                      <br>

                      <!-- Material input text -->
                      <div class="md-form">
                        <i class="fa fa-adjust prefix grey-text"></i>
                        <input type="email" id="GiroCliente" name="GiroCliente" class="form-control">
                        <label for="GiroCliente">Giro</label>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="CorreoCliente" name="CorreoCliente" class="form-control">
                        <label for="CorreoCliente">Correo</label>
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

   </body>
</html>
