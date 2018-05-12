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
                    <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nuevo Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Usuario</a>
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
                                      <th>CORREO</th>
                                      <th>SUCURSAL</th>
                                      <th>CARGO</th>
                                      <th>DEPARTAMENTO</th>
                                      <th>ESTADO</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <!--Table head-->

                              <!--Table body-->
                              <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>MIGUEL PEÑA</td>
                                    <td>MIGUEL.PENA@CLICKNETSYSTEM.COM</td>
                                    <td>SANTA MARIA</td>
                                    <td>ADMINISTRADOR</td>
                                    <td>ADMINISTRACIÓN</td>
                                    <td>ACTIVO</td>
                                    <td><i class="fa fa-gear" aria-hidden="true" data-toggle="modal" data-target="#exampleModal" title="Modificar Clave"></i></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>DARWIN BERMUDES</td>
                                    <td>DARWIM.BERMUDEZ@GMAIL.COM</td>
                                    <td>SAGRADA FAMILIA</td>
                                    <td>ADMINISTRADOR</td>
                                    <td>ADMINISTRACIÓN</td>
                                    <td>ACTIVO</td>
                                    <td><i class="fa fa-gear" aria-hidden="true" data-toggle="modal" data-target="#exampleModal" title="Modificar Clave"></i></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>CHRISTIAM PEÑA</td>
                                    <td>CHRISTIA.PENA@HOTMAIL.COM</td>
                                    <td>SANTA MARIA</td>
                                    <td>VENDEDOR</td>
                                    <td>VENTAS</td>
                                    <td>ACTIVO</td>
                                    <td><i class="fa fa-gear" aria-hidden="true" data-toggle="modal" data-target="#exampleModal" title="Modificar Clave"></i></td>
                                  </tr>
                              </tbody>
                              <!--Table body-->
                          </table>
                          <!--Table-->
                      </div>
                  </div>

                  <div class="row">
                  <!-- Modal Modificar Clave-->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                            <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalLabel">Modificar Clave</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                               </button>
                            </div>
                            <div class="modal-body">
                               <!-- Default form register -->
                                 <form action="#" method="POST">
                                  <!-- Default input name -->
                                   <label for="NombreUsuario" class="grey-text">Usuario</label>
                                   <input type="text" id="NombreUsuario" name="NombreUsuario" class="form-control" required>

                                   <br>

                                   <!-- Default input email -->
                                   <label for="NuevaClaveUsuario" class="grey-text">Nueva Clave</label>
                                   <input type="password" id="NuevaClaveUsuario" name="NuevaClaveUsuario" class="form-control" required>

                                   <br>

                                   <!-- Default input email -->
                                   <label for="VerificarClaveUsuario" class="grey-text">Repita Nueva Clave</label>
                                   <input type="password" id="VerificarClaveUsuario" name="VerificarClaveUsuario" class="form-control" required>

                                   <br>

                                   <div class="text-center mt-4">
                                       <button class="btn btn-outline-info" type="submit">Modificar<i class="fa fa-refresh ml-2"></i></button>
                                   </div>
                                 </form>
                                 <!-- Default form register -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                </div>
                <!--/.Panel 1-->

                <!--Panel 2-->
                <div class="tab-pane fade" id="panel6" role="tabpanel">
                    <!-- Material form contact -->
                     <form>
                         <p class="h4 text-center mb-4">Nuevo Usuario</p>

                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-user prefix grey-text"></i>
                             <input type="text" id="NombreUsuario" name="NombreUsuario" class="form-control" required>
                             <label for="NombreUsuario">Nombre y Apellido</label>
                         </div>

                         <!-- Material input email -->
                         <div class="md-form">
                             <i class="fa fa-envelope prefix grey-text"></i>
                             <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control">
                             <label for="CorreoUsuario">Correo</label>
                         </div>

                         <div class="row">
                            <div class="col-4">
                               <!--Dropdown primary-->
                               <div class="dropdown text-center">
                                 <!--Trigger-->
                                 <button class="btn btn-info dropdown-toggle"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cargo</button>
                                 <!--Menu-->
                                 <div class="dropdown-menu"  style="width: 100%;">
                                     <a class="dropdown-item" href="#">ADMINISTRADOR</a>
                                     <a class="dropdown-item" href="#">VENDEDOR</a>
                                     <a class="dropdown-item" href="#">CONTADOR</a>
                                     <a class="dropdown-item" href="#">USUARIO</a>
                                 </div>
                               </div>
                                <!--/Dropdown primary-->
                            </div>
                            <div class="col-4">
                               <!--Dropdown primary-->
                             <div class="dropdown text-center">
                                <!--Trigger-->
                                <button class="btn btn-info dropdown-toggle"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departamento</button>
                                <!--Menu-->
                                <div class="dropdown-menu"  style="width: 100%;">
                                    <a class="dropdown-item" href="#">ADMINISTRACIÓN</a>
                                    <a class="dropdown-item" href="#">VENTAS</a>
                                    <a class="dropdown-item" href="#">CONTABILIDAD</a>
                                </div>
                             </div>
                               <!--/Dropdown primary-->
                            </div>
                            <div class="col-4">
                               <!--Dropdown primary-->
                             <div class="dropdown text-center">
                                <!--Trigger-->
                                <button class="btn btn-info dropdown-toggle"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sucursal</button>
                                <!--Menu-->
                                <div class="dropdown-menu"  style="width: 100%;">
                                    <a class="dropdown-item" href="#">SANTA MARIA</a>
                                    <a class="dropdown-item" href="#">SAGRADA FAMILIA</a>
                                </div>
                             </div>
                               <!--/Dropdown primary-->
                            </div>
                        </div>
                        <br>

                         <!-- Material input subject -->
                         <div class="md-form">
                             <i class="fa fa-user-circle prefix grey-text" aria-hidden="true"></i>
                             <input type="text" id="UsuarioSesion" name="UsuarioSesion" class="form-control" required>
                             <label for="UsuarioSesion">Usuario</label>
                         </div>

                         <!-- Material input subject -->
                         <div class="md-form">
                             <i class="fa fa-user-secret prefix grey-text" aria-hidden="true"></i>
                             <input type="password" id="ClaveUsuario" name="ClaveUsuario" class="form-control" required>
                             <label for="ClaveUsuario">Clave</label>
                         </div>

                         <!-- Material input subject -->
                         <div class="md-form">
                             <i class="fa fa-user-secret prefix grey-text" aria-hidden="true"></i>
                             <input type="password" id="ValidarClaveUsuario" name="ValidarClaveUsuario" class="form-control" required>
                             <label for="ValidarClaveUsuario">Validar Clave</label>
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
                       <p class="h4 text-center mb-4">Modificar Usuario</p>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-user prefix grey-text"></i>
                           <input type="text" id="NombreUsuario" name="NombreUsuario" class="form-control" required>
                           <label for="NombreUsuario">Nombre y Apellido</label>
                       </div>

                       <!-- Material input email -->
                       <div class="md-form">
                           <i class="fa fa-envelope prefix grey-text"></i>
                           <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control">
                           <label for="CorreoUsuario">Correo</label>
                       </div>

                       <div class="row">
                           <div class="col-4">
                              <!--Dropdown primary-->
                              <div class="dropdown text-center">
                                <!--Trigger-->
                                <button class="btn btn-info dropdown-toggle"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cargo</button>
                                <!--Menu-->
                                <div class="dropdown-menu"  style="width: 100%;">
                                    <a class="dropdown-item" href="#">ADMINISTRADOR</a>
                                    <a class="dropdown-item" href="#">VENDEDOR</a>
                                    <a class="dropdown-item" href="#">CONTADOR</a>
                                    <a class="dropdown-item" href="#">USUARIO</a>
                                </div>
                              </div>
                              <!--/Dropdown primary-->
                           </div>
                           <div class="col-4">
                              <!--Dropdown primary-->
                           <div class="dropdown text-center">
                              <!--Trigger-->
                              <button class="btn btn-info dropdown-toggle"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departamento</button>
                              <!--Menu-->
                              <div class="dropdown-menu"  style="width: 100%;">
                                   <a class="dropdown-item" href="#">ADMINISTRACIÓN</a>
                                   <a class="dropdown-item" href="#">VENTAS</a>
                                   <a class="dropdown-item" href="#">CONTABILIDAD</a>
                              </div>
                           </div>
                              <!--/Dropdown primary-->
                           </div>
                           <div class="col-4">
                              <!--Dropdown primary-->
                           <div class="dropdown text-center">
                              <!--Trigger-->
                              <button class="btn btn-info dropdown-toggle"  style="width: 100%;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sucursal</button>
                              <!--Menu-->
                              <div class="dropdown-menu"  style="width: 100%;">
                                   <a class="dropdown-item" href="#">SANTA MARIA</a>
                                   <a class="dropdown-item" href="#">SAGRADA FAMILIA</a>
                              </div>
                           </div>
                              <!--/Dropdown primary-->
                           </div>
                      </div>
                      <br>

                       <!-- Material input subject -->
                       <div class="md-form">
                           <i class="fa fa-user-circle prefix grey-text" aria-hidden="true"></i>
                           <input type="text" id="UsuarioSesion" name="UsuarioSesion" class="form-control" required>
                           <label for="UsuarioSesion">Usuario</label>
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
