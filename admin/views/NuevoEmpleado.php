<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Agregar Empleado";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Empleado.php");
?>
   <body onload = "document.FormNuevoEmpleado.PrimerNombreEmpleado.focus()">
     <div class="container Title-Margin">
       <div class="row info-color  text-center" style="border-radius: 10px;">
               <label class="h3 font-italic white-text" style="margin-left:15px;">Nuevo Empleado</label>
       </div>
     </div>
        <div class="container">
            <!-- Tab panels -->
                       <div class="row card Card-Bottom">
                  <!-- Material form contact -->
                  <form id="FormNuevoEmpleado" name="FormNuevoEmpleado" class="Margin-Frm">
                    <input type="hidden" name="Formulario" value="Nuevo">

                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="fa fa-user prefix grey-text"></i>
                              <input type="text" id="PrimerNombreEmpleado" name="PrimerNombreEmpleado" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{1,50}" title="Solo Letras" autocomplete="off" required>
                              <label for="PrimerNombreEmpleado">Primer Nombre</label>
                          </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="prefix grey-text"></i>
                              <input type="text" id="SegundoNombreEmpleado" name="SegundoNombreEmpleado" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{0,50}" title="Solo Letras" autocomplete="off">
                              <label for="SegundoNombreEmpleado">Segundo Nombre</label>
                          </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="prefix grey-text"></i>
                              <input type="text" id="TercerNombreEmpleado" name="TercerNombreEmpleado" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{0,50}" title="Solo Letras" autocomplete="off">
                              <label for="TercerNombreEmpleado">Tercer Nombre</label>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="fa fa-user prefix grey-text"></i>
                              <input type="text" id="PrimerApellidoEmpleado" name="PrimerApellidoEmpleado" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{1,50}" title="Solo Letras" autocomplete="off" required>
                              <label for="PrimerApellidoEmpleado">Primer Apellido</label>
                          </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="prefix grey-text"></i>
                              <input type="text" id="SegundoApellidoEmpleado" name="SegundoApellidoEmpleado" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{1,50}" title="Solo Letras" autocomplete="off" required>
                              <label for="SegundoApellidoEmpleado">Segundo Apellido</label>
                          </div>
                        </div>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                          <i class="fa fa-address-card prefix grey-text"></i>
                          <input type="text" id="DireccionEmpleado" name="DireccionEmpleado" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ0-9#_-,. áÁéÉíÍóÓúÚ]{0,150}" autocomplete="off" required>
                          <label for="DireccionEmpleado">Dirección</label>
                      </div>

                      <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                           <!-- Material input datepicker -->
                           <div class="md-form">
                                <input type="text" name="FechaNacimientoEmpleado" id="FechaNacimientoEmpleado" value="" autocomplete="off" required>
                                <label for="FechaNacimientoEmpleado">Fecha de Nacimiento</label>
                           </div>
                         </div>

                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-indent prefix grey-text"></i>
                                <input type="text" id="DuiEmpleado" name="DuiEmpleado" style="width:75%;" class="form-control" pattern="[0-9-]{10,12}" title="00000000-0" autocomplete="off" required>
                                <label for="DuiEmpleado">DUI</label>
                            </div>
                         </div>

                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-address-card-o prefix grey-text"></i>
                                <input type="text" id="NitEmpleado" name="NitEmpleado" style="width:75%;" class="form-control" pattern="[0-9-]{17,20}" title="0000-000000-000-0" autocomplete="off">
                                <label for="NitEmpleado">NIT</label>
                            </div>
                         </div>
                     </div>

                     <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-phone prefix grey-text"></i>
                             <input type="text" id="TelefonoFijoEmpleado" name="TelefonoFijoEmpleado" style="width:75%;" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
                             <label for="TelefonoFijoEmpleado">Teléfono Fijo</label>
                         </div>
                       </div>
                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-mobile-phone prefix grey-text"></i>
                             <input type="text" id="CelularEmpleado" name="CelularEmpleado" style="width:75%;" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
                             <label for="CelularEmpleado">Celular</label>
                         </div>
                       </div>
                     </div>
                     <br>

                     <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                         <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" id="EstadoCivilEmpleado" name="EstadoCivilEmpleado" required>
                             <option value="" disabled selected>Seleccione</option>
                             <?php
                                foreach ($MatrizEstadoCivil as $value) {
                                  ?>
                                  <option value="<?= $value['Id']; ?>"><?= $value['Nombre']; ?></option>
                             <?php
                                }
                              ?>
                         </select>
                         <label>Estado Civil</label>
                       </div>
                       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                         <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" id="GeneroEmpleado" name="GeneroEmpleado" required>
                             <option value="" disabled selected>Seleccione</option>
                             <option value="Femenino">FEMENINO</option>
                             <option value="Masculino">MASCULINO</option>
                         </select>
                         <label>Genero</label>
                       </div>
                     </div>

                      <div class="text-center mt-4">
                          <button class="btn btn-outline-info" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
                      </div>
                  </form>
                   <!-- Material form contact -->
              </div>
            </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionEmpleado.js"></script>
      <script type="text/javascript" src="../assets/js/jQuery/Nuevo_Empleado.js"></script>
   </body>
</html>
