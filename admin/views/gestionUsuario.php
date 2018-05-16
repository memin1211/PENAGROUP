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
                                      <th>NOMBRE</th>
                                      <th>CORREO</th>
                                      <th>SUCURSAL</th>
                                      <th>CARGO</th>
                                      <th>DEPARTAMENTO</th>
                                      <th>ESTADO</th>
                                      <th></th>
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
                                    <td><i class="fa fa-key" aria-hidden="true" data-toggle="modal" data-target="#ModalClave" title="Modificar Clave"></i></td>
                                    <td><i class="fa fa-gear" aria-hidden="true" data-toggle="modal" data-target="#ModalPermisos" title="Modificar Permisos"></i></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>DARWIN BERMUDES</td>
                                    <td>DARWIM.BERMUDEZ@GMAIL.COM</td>
                                    <td>SAGRADA FAMILIA</td>
                                    <td>ADMINISTRADOR</td>
                                    <td>ADMINISTRACIÓN</td>
                                    <td>ACTIVO</td>
                                    <td><i class="fa fa-key" aria-hidden="true" data-toggle="modal" data-target="#ModalClave" title="Modificar Clave"></i></td>
                                    <td><i class="fa fa-gear" aria-hidden="true" data-toggle="modal" data-target="#ModalPermisos" title="Modificar Permisos"></i></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>CHRISTIAM PEÑA</td>
                                    <td>CHRISTIA.PENA@HOTMAIL.COM</td>
                                    <td>SANTA MARIA</td>
                                    <td>VENDEDOR</td>
                                    <td>VENTAS</td>
                                    <td>ACTIVO</td>
                                    <td><i class="fa fa-key" aria-hidden="true" data-toggle="modal" data-target="#ModalClave" title="Modificar Clave"></i></td>
                                    <td><i class="fa fa-gear" aria-hidden="true" data-toggle="modal" data-target="#ModalPermisos" title="Modificar Permisos"></i></td>
                                  </tr>
                              </tbody>
                              <!--Table body-->
                          </table>
                          <!--Table-->
                      </div>
                  </div>

                  <div class="row">
                    <!-- Modal Modificar Clave-->
                      <?php include_once("../include/Modificar_Clave_Usuario.php");?>
                    <!-- Fin Modal Modificar Clave-->
                  </div>

                  <div class="row">
                    <!-- Modal Modificar Permisos-->
                      <?php include_once("../include/Modificar_Permiso_Usuario.php");?>
                    <!-- Fin Modal Modificar Permisos-->
                  </div>
                </div>
                <!--/.Panel 1-->

                <!--Panel 2-->
                <div class="tab-pane fade" id="panel6" role="tabpanel">
                    <!-- Material form contact -->
                     <form>
                         <p class="h4 text-center mb-4">Nuevo Usuario</p>

                         <select class="mdb-select colorful-select dropdown-info">
                             <option value="" disabled selected>Seleccione Persona a Crear Usuario</option>
                             <option value="1">MARIA DEL CARMEN</option>
                             <option value="2">ROSA MARIA AVALOS</option>
                             <option value="3">ALLAN BRITO</option>
                             <option value="4">KRISNA MELISETH</option>
                         </select>
                         <label>Persona a Crear Usuario</label>

                         <!-- Material input email -->
                         <div class="md-form">
                             <i class="fa fa-envelope prefix grey-text"></i>
                             <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control" disabled>
                             <label for="CorreoUsuario">Correo</label>
                         </div>

                         <div class="row">
                            <div class="col-4">
                              <select class="mdb-select colorful-select dropdown-info">
                                  <option value="" disabled selected>Seleccione</option>
                                  <option value="1">ADMINISTRADOR</option>
                                  <option value="2">VENDEDOR</option>
                                  <option value="3">CONTADOR</option>
                                  <option value="4">CLIENTE</option>
                              </select>
                              <label>Cargo</label>
                            </div>
                            <div class="col-4">
                              <select class="mdb-select colorful-select dropdown-info">
                                  <option value="" disabled selected>Seleccione</option>
                                  <option value="1">ADMINISTRACIÓN</option>
                                  <option value="2">VENTAS</option>
                                  <option value="3">CONTABILIDAD</option>
                              </select>
                              <label>Departamento</label>
                            </div>
                            <div class="col-4">
                              <select class="mdb-select colorful-select dropdown-info">
                                  <option value="" disabled selected>Seleccione</option>
                                  <option value="1">SANTA MARIA</option>
                                  <option value="2">SAGRADA FAMILIA</option>
                              </select>
                              <label>Sucursal</label>
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
                      <p class="h4 text-center mb-4">Modificar Información Usuario</p>

                      <select class="mdb-select colorful-select dropdown-info">
                          <option value="" disabled selected>Seleccione Persona a Modificar Usuario</option>
                          <option value="1">MARIA DEL CARMEN</option>
                          <option value="2">ROSA MARIA AVALOS</option>
                          <option value="3">ALLAN BRITO</option>
                          <option value="4">KRISNA MELISETH</option>
                      </select>
                      <label>Persona a Modificar Usuario</label>

                      <!-- Material input email -->
                      <div class="md-form">
                          <i class="fa fa-envelope prefix grey-text"></i>
                          <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control" disabled>
                          <label for="CorreoUsuario">Correo</label>
                      </div>

                      <div class="row">
                         <div class="col-4">
                           <select class="mdb-select colorful-select dropdown-info">
                               <option value="" disabled selected>Seleccione</option>
                               <option value="1">ADMINISTRADOR</option>
                               <option value="2">VENDEDOR</option>
                               <option value="3">CONTADOR</option>
                               <option value="4">CLIENTE</option>
                           </select>
                           <label>Cargo</label>
                         </div>
                         <div class="col-4">
                           <select class="mdb-select colorful-select dropdown-info">
                               <option value="" disabled selected>Seleccione</option>
                               <option value="1">ADMINISTRACIÓN</option>
                               <option value="2">VENTAS</option>
                               <option value="3">CONTABILIDAD</option>
                           </select>
                           <label>Departamento</label>
                         </div>
                         <div class="col-4">
                           <select class="mdb-select colorful-select dropdown-info">
                               <option value="" disabled selected>Seleccione</option>
                               <option value="1">SANTA MARIA</option>
                               <option value="2">SAGRADA FAMILIA</option>
                           </select>
                           <label>Sucursal</label>
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
      <script type="text/javascript">
      function activar(){
        for(i=0;i<document.Form_Mod_Permiso_Usu.elements.length; i++){
         if((document.Form_Mod_Permiso_Usu[i].type == 'checkbox') && (document.Form_Mod_Permiso_Usu[i].checked == true)){
           while (document.Form_Mod_Permiso_Usu[i].checked != false) {
             for (var a = 0; a < document.Form_Mod_Permiso_Usu.elements.length; a++) {
               if (document.getElementById('Modulos'+a+'').checked == true) {
                 document.getElementById('Select_Modulo'+a+'').disabled=false;
               }else {
                document.getElementById('Select_Modulo'+a+'').disabled=true;
               }
             }
             }
         }
       }
       }
      </script>
      <script type="text/javascript">
      $(document).ready(function() {
        $('.mdb-select').material_select();
      });
      </script>
   </body>
</html>
