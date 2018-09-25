<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Modificar Proveedor";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modificarProveedor" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i><label class="d-none d-sm-block">Modificar Proveedor</label></a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">
              <div class="tab-pane fade" id="modificarProveedor" role="tabpanel">
                  <!-- Material form contact -->
                   <form>
                       <p class="h4 text-center mb-4">Modificar Proveedor</p>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-user prefix grey-text"></i>
                           <input type="text" id="ModificarNombreProveedor" name="ModificarNombreProveedor" class="form-control" pattern="[A-ZÑa-zñ ,.]{1,100}" title="Digite el  Nombre del Proveedor" autocomplete="off" required>
                           <label for="ModificarNombreProveedor">Nombre Proveedor</label>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-address-card prefix grey-text"></i>
                           <input type="text" id="ModificarDireccionProveedor" name="ModificarDireccionProveedor" class="form-control" pattern="[A-ZÑa-zñ0-9#_-,. ]{1,150}" title="Digite la Dirección del Proveedor" autocomplete="off" required>
                           <label for="ModificarDireccionProveedor">Dirección</label>
                       </div>
                       <br>

                       <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                             <!-- Material input text -->
                             <select class="mdb-select colorful-select dropdown-info" id="ModificarDepartamento" name="ModificarDepartamento" required>
                                <option value="" disabled selected>Departamento</option>
                                <?php
                                   foreach ($MatrizDepartamento as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Nombre']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Departamento</label>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                             <!-- Material input text -->
                             <select class="mdb-select colorful-select dropdown-info" id="ModificarMunicipio" name="ModificarMunicipio" required>
                                <option value="" disabled selected>Municipio</option>
                                <?php
                                   foreach ($MatrizMunicipio as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Nombre']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Municipio</label>
                          </div>
                      </div>
                      <br>

                       <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-phone prefix grey-text"></i>
                                 <input type="text" id="ModificarTelefonoProveedor" name="ModificarTelefonoProveedor" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off" required>
                                 <label for="ModificarTelefonoProveedor">Teléfono Fijo</label>
                             </div>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-mobile-phone prefix grey-text"></i>
                                 <input type="text" id="ModificarCelularProveedor" name="ModificarCelularProveedor" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
                                 <label for="ModificarCelularProveedor">Celular</label>
                             </div>
                          </div>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-adjust prefix grey-text"></i>
                         <input type="text" id="ModificarGiroUsuario" name="ModificarGiroUsuario" class="form-control" pattern="[A-ZÑa-zñ ,.]{1,100}" title="Digite el Giro del Proveedor" autocomplete="off" required>
                         <label for="ModificarGiroUsuario">Giro</label>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-envelope prefix grey-text"></i>
                         <input type="email" id="ModificarCorreoUsuario" name="ModificarCorreoUsuario" class="form-control" pattern="[A-Za-z@_-.]{0,100}" title="alguien@dominio.com" autocomplete="off">
                         <label for="ModificarCorreoUsuario">Correo</label>
                      </div>

                       <div class="text-center mt-4">
                           <button class="btn btn-outline-info" type="button">Modificar<i class="fa fa-refresh ml-2"></i></button>
                       </div>
                   </form>
                   <!-- Material form contact -->
              </div>
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionProveedor.js"></script>
   </body>
</html>
