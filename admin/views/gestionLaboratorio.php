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
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Laboratorios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nuevo Laboratorio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Laboratorio</a>
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
                                      <th>LABORATORIO</th>
                                      <th>ABREVIATURA</th>
                                      <th>ESTADO</th>
                                  </tr>
                              </thead>
                              <!--Table head-->

                              <!--Table body-->
                              <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td> LABORATORIOS SAIMED</td>
                                      <td>SAIMED</td>
                                      <td>ACTIVO</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>LABORATORIOS PAIL</td>
                                    <td>PAIL</td>
                                    <td>ACTIVO</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>LABORATORIOS BIOKEMIKAL</td>
                                    <td>BIOKEMIKAL</td>
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
                         <p class="h4 text-center mb-4">Nuevo Laboratorio</p>

                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-user prefix grey-text"></i>
                             <input type="text" id="NombreLaboratorio" name="NombreLaboratorio" class="form-control" required>
                             <label for="NombreLaboratorio">Nombre Laboratorio</label>
                         </div>

                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-address-card prefix grey-text"></i>
                             <input type="text" id="DireccionLaboratorio" name="DireccionLaboratorio" class="form-control">
                             <label for="DireccionLaboratorio">Dirección</label>
                         </div>

                         <div class="row">
                            <div class="col-4">
                               <!-- Material input text -->
                               <div class="md-form">
                                   <i class="fa fa-phone prefix grey-text"></i>
                                   <input type="text" id="TelefonoLaboratorio" name="TelefonoLaboratorio" class="form-control">
                                   <label for="TelefonoLaboratorio">Teléfono</label>
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
                       <p class="h4 text-center mb-4">Modificar Laboratorio</p>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-user prefix grey-text"></i>
                           <input type="text" id="NombreProveedor" name="NombreProveedor" class="form-control" required>
                           <label for="NombreProveedor">Nombre Proveedor</label>
                       </div>

                       <!-- Material input email -->
                       <div class="md-form">
                           <i class="fa fa-address-card prefix grey-text"></i>
                           <input type="text" id="DireccionProveedor" name="DireccionProveedor" class="form-control">
                           <label for="DireccionProveedor">Dirección</label>
                       </div>

                       <div class="row">
                          <div class="col-4">
                             <!-- Material input email -->
                             <div class="md-form">
                                 <i class="fa fa-envelope prefix grey-text"></i>
                                 <input type="text" id="TelefonoProveedor" name="TelefonoProveedor" class="form-control">
                                 <label for="TelefonoProveedor">Teléfono</label>
                             </div>
                          </div>
                          <div class="col-4">
                             <!-- Material input email -->
                             <div class="md-form">
                                 <i class="fa fa-address-card-o prefix grey-text"></i>
                                 <input type="text" id="NitProveedor" name="NitProveedor" class="form-control">
                                 <label for="NitProveedor">NIT</label>
                             </div>
                          </div>
                          <div class="col-4">
                             <!-- Material input email -->
                             <div class="md-form">
                                 <i class="fa fa-indent prefix grey-text"></i>
                                 <input type="text" id="NrcProveedor" name="NrcProveedor" class="form-control">
                                 <label for="NrcProveedor">NRC</label>
                             </div>
                          </div>
                      </div>
                      <br>

                      <!-- Material input email -->
                      <div class="md-form">
                        <i class="fa fa-adjust prefix grey-text"></i>
                        <input type="text" id="GiroProveedor" name="GiroProveedor" class="form-control">
                        <label for="GiroProveedor">Giro</label>
                      </div>

                      <!-- Material input email -->
                      <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control">
                        <label for="CorreoUsuario">Correo</label>
                      </div>

                      <!--Dropdown primary-->
                      <div class="dropdown text-center">
                       <!--Trigger-->
                       <button class="btn btn-info dropdown-toggle"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tipo Servicio</button>
                       <!--Menu-->
                       <div class="dropdown-menu"  style="width: 100%;">
                           <a class="dropdown-item" href="#">SERVICIO FIJO</a>
                           <a class="dropdown-item" href="#">SERVICIO VARIABLE</a>
                           <a class="dropdown-item" href="#">OTRO</a>
                       </div>
                      </div>
                      <!--/Dropdown primary-->

                       <div class="text-center mt-4">
                           <button class="btn btn-outline-info" type="submit">Modificar<i class="fa fa-refresh ml-2"></i></button>
                       </div>
                   </form>
                </div>
                <!--/.Panel 3-->
            </div>
         </div>
      </div>
   </body>
</html>
