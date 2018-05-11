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
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nuevo Empleado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Empleado</a>
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
                                      <th>NOMBRE</th>
                                      <th>DIRECCION</th>
                                      <th>DUI</th>
                                      <th>TELEFONO</th>
                                      <th>SUCURSAL</th>
                                      <th>ESTADO</th>
                                  </tr>
                              </thead>
                              <!--Table head-->

                              <!--Table body-->
                              <tbody>
                                  <tr>
                                      <th scope="row">1</th>
                                      <td>MARIA DEL CARMEN</td>
                                      <td>MEJICANOS, SAN SALVADOR</td>
                                      <td>1234567-8</td>
                                      <td>74893355</td>
                                      <td>SANTA MARIA</td>
                                      <td>ACTIVO</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>YESSENIA PEREZ</td>
                                    <td>SANTA TECLA, SAN SALVADOR</td>
                                    <td>1234567-9</td>
                                    <td>74893343</td>
                                    <td>SAGRADA FAMILIA</td>
                                    <td>INACTIVO</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>ROSA MARIA AVALOS</td>
                                    <td>SANTA TECLA, SAN SALVADOR</td>
                                    <td>1234567-5</td>
                                    <td>74896335</td>
                                    <td>SAGRADA FAMILIA</td>
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
                        <p class="h4 text-center mb-4">Registrar Nuevo Empleado</p>

                        <div class="row">
                          <div class="col-4">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="PrimerNombreEmpleado" name="PrimerNombreEmpleado" class="form-control" required>
                                <label for="PrimerNombreEmpleado">Primer Nombre</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="prefix grey-text"></i>
                                <input type="text" id="SegundoNombreEmpleado" name="SegundoNombreEmpleado" class="form-control" required>
                                <label for="SegundoNombreEmpleado">Segundo Nombre</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="prefix grey-text"></i>
                                <input type="text" id="TercerNombreEmpleado" name="TercerNombreEmpleado" class="form-control">
                                <label for="TercerNombreEmpleado">Tercer Nombre</label>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-6">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="PrimerApellidoEmpleado" name="PrimerApellidoEmpleado" class="form-control" required>
                                <label for="PrimerApellidoEmpleado">Primer Apellido</label>
                            </div>
                          </div>
                          <div class="col-6">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="prefix grey-text"></i>
                                <input type="text" id="SegundoApellidoEmpleado" name="SegundoApellidoEmpleado" class="form-control" required>
                                <label for="SegundoApellidoEmpleado">Segundo Apellido</label>
                            </div>
                          </div>
                        </div>

                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input type="text" id="DireccionEmpleado" name="DireccionEmpleado" class="form-control">
                            <label for="DireccionEmpleado">Dirección</label>
                        </div>

                        <div class="row">
                           <div class="col-4">
                             <!-- Material input datepicker -->
                             <div class="md-form">
                                  <input placeholder="Seleccione Fecha de Nacimiento" name="FechaNacimientoEmpleado" id="FechaNacimientoEmpleado" type="text" id="date-picker-example" class="form-control datepicker" style="width:100%; background: white;" required>
                                  <label for="date-picker-example">Fecha de Nacimiento</label>
                             </div>
                           </div>
                           <div class="col-4">
                              <!-- Material input text -->
                              <div class="md-form">
                                  <i class="fa fa-indent prefix grey-text"></i>
                                  <input type="text" id="DuiEmpleado" name="DuiEmpleado" class="form-control">
                                  <label for="DuiEmpleado">DUI</label>
                              </div>
                           </div>
                           <div class="col-4">
                              <!-- Material input text -->
                              <div class="md-form">
                                  <i class="fa fa-address-card-o prefix grey-text"></i>
                                  <input type="text" id="NitEmpleado" name="NitEmpleado" class="form-control">
                                  <label for="NitEmpleado">NIT</label>
                              </div>
                           </div>
                       </div>

                       <div class="row">
                         <div class="col-6">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="fa fa-phone prefix grey-text"></i>
                               <input type="text" id="TelefonoFijoEmpleado" name="TelefonoFijoEmpleado" class="form-control">
                               <label for="TelefonoFijoEmpleado">Teléfono Fijo</label>
                           </div>
                         </div>
                         <div class="col-6">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="fa fa-mobile-phone prefix grey-text"></i>
                               <input type="text" id="CelularEmpleado" name="CelularEmpleado" class="form-control">
                               <label for="CelularEmpleado">Célular</label>
                           </div>
                         </div>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                          <i class="fa fa-envelope prefix grey-text"></i>
                          <input type="email" id="CorreoEmpleado" name="CorreoEmpleado" class="form-control">
                          <label for="CorreoEmpleado">Correo</label>
                       </div>

                       <div class="row">
                         <div class="col-6">
                           <!--Dropdown primary-->
                           <div class="dropdown text-center">
                             <!--Trigger-->
                             <button class="btn btn-info dropdown-toggle colorful-select dropdown-primary"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estado Civil</button>
                             <!--Menu-->
                             <div class="dropdown-menu"  style="width: 100%;">
                                 <a class="dropdown-item" href="#">SOLTERO/A</a>
                                 <a class="dropdown-item" href="#">CASADO/A</a>
                                 <a class="dropdown-item" href="#">ACOMPAÑADO/A</a>
                                 <a class="dropdown-item" href="#">DIVORSIADO/A</a>
                                 <a class="dropdown-item" href="#">VIUDO/A</a>
                             </div>
                           </div>
                            <!--/Dropdown primary-->
                         </div>
                         <div class="col-6">
                           <!--Dropdown primary-->
                           <div class="dropdown text-center">
                             <!--Trigger-->
                             <button class="btn btn-info dropdown-toggle colorful-select dropdown-primary"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Género</button>
                             <!--Menu-->
                             <div class="dropdown-menu"  style="width: 100%;">
                                 <a class="dropdown-item" href="#">MASCULINO</a>
                                 <a class="dropdown-item" href="#">FEMENINO</a>
                             </div>
                           </div>
                            <!--/Dropdown primary-->
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
                       <p class="h4 text-center mb-4">Modificar Información Empleado</p>

                       <div class="row">
                         <div class="col-4">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="fa fa-user prefix grey-text"></i>
                               <input type="text" id="PrimerNombreEmpleado" name="PrimerNombreEmpleado" class="form-control" required>
                               <label for="PrimerNombreEmpleado">Primer Nombre</label>
                           </div>
                         </div>
                         <div class="col-4">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="prefix grey-text"></i>
                               <input type="text" id="SegundoNombreEmpleado" name="SegundoNombreEmpleado" class="form-control" required>
                               <label for="SegundoNombreEmpleado">Segundo Nombre</label>
                           </div>
                         </div>
                         <div class="col-4">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="prefix grey-text"></i>
                               <input type="text" id="TercerNombreEmpleado" name="TercerNombreEmpleado" class="form-control">
                               <label for="TercerNombreEmpleado">Tercer Nombre</label>
                           </div>
                         </div>
                       </div>

                       <div class="row">
                         <div class="col-6">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="fa fa-user prefix grey-text"></i>
                               <input type="text" id="PrimerApellidoEmpleado" name="PrimerApellidoEmpleado" class="form-control" required>
                               <label for="PrimerApellidoEmpleado">Primer Apellido</label>
                           </div>
                         </div>
                         <div class="col-6">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="prefix grey-text"></i>
                               <input type="text" id="SegundoApellidoEmpleado" name="SegundoApellidoEmpleado" class="form-control" required>
                               <label for="SegundoApellidoEmpleado">Segundo Apellido</label>
                           </div>
                         </div>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-address-card prefix grey-text"></i>
                           <input type="text" id="DireccionEmpleado" name="DireccionEmpleado" class="form-control">
                           <label for="DireccionEmpleado">Dirección</label>
                       </div>

                       <div class="row">
                          <div class="col-4">
                            <!-- Material input datepicker -->
                            <div class="md-form">
                                 <input placeholder="Seleccione Fecha de Nacimiento" name="FechaNacimientoEmpleado" id="FechaNacimientoEmpleado" type="text" id="date-picker-example" class="form-control datepicker" style="width:100%; background: white;" required>
                                 <label for="date-picker-example">Fecha de Nacimiento</label>
                            </div>
                          </div>
                          <div class="col-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-indent prefix grey-text"></i>
                                 <input type="text" id="DuiEmpleado" name="DuiEmpleado" class="form-control">
                                 <label for="DuiEmpleado">DUI</label>
                             </div>
                          </div>
                          <div class="col-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-address-card-o prefix grey-text"></i>
                                 <input type="text" id="NitEmpleado" name="NitEmpleado" class="form-control">
                                 <label for="NitEmpleado">NIT</label>
                             </div>
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-6">
                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="fa fa-phone prefix grey-text"></i>
                              <input type="text" id="TelefonoFijoEmpleado" name="TelefonoFijoEmpleado" class="form-control">
                              <label for="TelefonoFijoEmpleado">Teléfono Fijo</label>
                          </div>
                        </div>
                        <div class="col-6">
                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="fa fa-mobile-phone prefix grey-text"></i>
                              <input type="text" id="CelularEmpleado" name="CelularEmpleado" class="form-control">
                              <label for="CelularEmpleado">Célular</label>
                          </div>
                        </div>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-envelope prefix grey-text"></i>
                         <input type="email" id="CorreoEmpleado" name="CorreoEmpleado" class="form-control">
                         <label for="CorreoEmpleado">Correo</label>
                      </div>

                      <div class="row">
                        <div class="col-6">
                          <!--Dropdown primary-->
                          <div class="dropdown text-center">
                            <!--Trigger-->
                            <button class="btn btn-info dropdown-toggle colorful-select dropdown-primary"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estado Civil</button>
                            <!--Menu-->
                            <div class="dropdown-menu"  style="width: 100%;">
                                <a class="dropdown-item" href="#">SOLTERO/A</a>
                                <a class="dropdown-item" href="#">CASADO/A</a>
                                <a class="dropdown-item" href="#">ACOMPAÑADO/A</a>
                                <a class="dropdown-item" href="#">DIVORSIADO/A</a>
                                <a class="dropdown-item" href="#">VIUDO/A</a>
                            </div>
                          </div>
                           <!--/Dropdown primary-->
                        </div>
                        <div class="col-6">
                          <!--Dropdown primary-->
                          <div class="dropdown text-center">
                            <!--Trigger-->
                            <button class="btn btn-info dropdown-toggle colorful-select dropdown-primary"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Género</button>
                            <!--Menu-->
                            <div class="dropdown-menu"  style="width: 100%;">
                                <a class="dropdown-item" href="#">MASCULINO</a>
                                <a class="dropdown-item" href="#">FEMENINO</a>
                            </div>
                          </div>
                           <!--/Dropdown primary-->
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
   </body>
</html>
