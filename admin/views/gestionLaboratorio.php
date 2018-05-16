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
    header('Location: ../');
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
      <link href="../assets/css/compiled.min.css" rel="stylesheet" type="text/css">
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
      <link rel="icon" type="image/ico" href="../assets/img/logo.png" />
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
                                      <th>LABORATORIO</th>
                                      <th>ABREVIATURA</th>
                                      <th>DIRECCIÓN</th>
                                      <th>TÉLEFONO FIJO</th>
                                      <th>CÉLULAR</th>
                                      <th>CORREO</th>
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
                                      <td>SAN SALVADOR, SAN SALVADOR.</td>
                                      <td>2225-6352</td>
                                      <td></td>
                                      <td>RECEPCION@SAIMED.COM</td>
                                      <td>ACTIVO</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>LABORATORIOS PAIL</td>
                                    <td>PAIL</td>
                                    <td>SAN SALVADOR, SAN SALVADOR.</td>
                                    <td>2225-6352</td>
                                    <td></td>
                                    <td>RECEPCION@PAIL.COM</td>
                                    <td>ACTIVO</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>LABORATORIOS GENOMMA LAB</td>
                                    <td>GENOMMA LAB</td>
                                    <td>SAN SALVADOR, SAN SALVADOR.</td>
                                    <td>2225-6352</td>
                                    <td></td>
                                    <td>RECEPCION@GENOMMALAB.COM</td>
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
                        <p class="h4 text-center mb-4">Registrar Nuevo Laboratorio</p>

                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="NombreProveedor" name="NombreProveedor" class="form-control" required>
                            <label for="NombreProveedor">Nombre Laboratorio</label>
                        </div>

                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input type="text" id="DireccionProveedor" name="DireccionProveedor" class="form-control">
                            <label for="DireccionProveedor">Dirección</label>
                        </div>

                        <div class="row">
                           <div class="col-4">
                              <!-- Material input text -->
                              <div class="md-form">
                                  <i class="fa fa-phone prefix grey-text"></i>
                                  <input type="text" id="TelefonoProveedor" name="TelefonoProveedor" class="form-control" required>
                                  <label for="TelefonoProveedor">Teléfono Fijo</label>
                              </div>
                           </div>
                           <div class="col-4">
                              <!-- Material input text -->
                              <div class="md-form">
                                  <i class="fa fa-mobile-phone prefix grey-text"></i>
                                  <input type="text" id="CelularProveedor" name="CelularProveedor" class="form-control">
                                  <label for="CelularProveedor">Célular</label>
                              </div>
                           </div>
                           <div class="col-4">
                              <!-- Material input text -->
                              <div class="md-form">
                                  <i class="fa fa-trademark prefix grey-text"></i>
                                  <input type="text" id="AbreviaturaProveedor" name="AbreviaturaProveedor" class="form-control" required>
                                  <label for="AbreviaturaProveedor">Abreviatura</label>
                              </div>
                           </div>
                       </div>
                       <br>

                       <!-- Material input text -->
                       <div class="md-form">
                          <i class="fa fa-envelope prefix grey-text"></i>
                          <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control">
                          <label for="CorreoUsuario">Correo</label>
                       </div>

                         <div class="text-center mt-4">
                             <button class="btn btn-outline-info" type="button">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
                         </div>
                     </form>
                     <!-- Material form contact -->
               </div>
                <!--/.Panel 2-->
                <!--Panel 3-->
                <div class="tab-pane fade" id="panel7" role="tabpanel">
                   <!-- Material form contact -->
                   <form>
                       <p class="h4 text-center mb-4">Modificar Información Laboratorio</p>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-user prefix grey-text"></i>
                           <input type="text" id="NombreProveedor" name="NombreProveedor" class="form-control" required>
                           <label for="NombreProveedor">Nombre Laboratorio</label>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-address-card prefix grey-text"></i>
                           <input type="text" id="DireccionProveedor" name="DireccionProveedor" class="form-control">
                           <label for="DireccionProveedor">Dirección</label>
                       </div>

                       <div class="row">
                          <div class="col-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-phone prefix grey-text"></i>
                                 <input type="text" id="TelefonoProveedor" name="TelefonoProveedor" class="form-control" required>
                                 <label for="TelefonoProveedor">Teléfono Fijo</label>
                             </div>
                          </div>
                          <div class="col-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-mobile-phone prefix grey-text"></i>
                                 <input type="text" id="CelularProveedor" name="CelularProveedor" class="form-control">
                                 <label for="CelularProveedor">Célular</label>
                             </div>
                          </div>
                          <div class="col-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-trademark prefix grey-text"></i>
                                 <input type="text" id="AbreviaturaProveedor" name="AbreviaturaProveedor" class="form-control" required>
                                 <label for="AbreviaturaProveedor">Abreviatura</label>
                             </div>
                          </div>
                      </div>
                      <br>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-envelope prefix grey-text"></i>
                         <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control">
                         <label for="CorreoUsuario">Correo</label>
                      </div>

                       <div class="text-center mt-4">
                           <button class="btn btn-outline-info" type="button">Modificar<i class="fa fa-refresh ml-2"></i></button>
                       </div>
                   </form>
                </div>
                <!--/.Panel 3-->
            </div>
         </div>
      </div>
   </body>
</html>
