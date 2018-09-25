<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Agregar Cliente";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Cliente.php");
?>
   <body onload = "document.FormNuevoCliente.PrimerNombreCliente.focus()">
     <div class="container Title-Margin">
       <div class="row info-color  text-center" style="border-radius: 10px;">
               <label class="h3 font-italic white-text" style="margin-left:15px;">Nuevo Cliente</label>
       </div>
     </div>
        <div class="container">
            <!-- Tab panels -->
                       <div class="row card Card-Bottom">

                  <!-- Material form contact -->
                   <form id="FormNuevoCliente" name="FormNuevoCliente" class="Margin-Frm">
                      <input type="hidden" name="Formulario" value="nuevo">
                      <input type="hidden" name="F_Creacion" value="<?= $fecha;?>">

                       <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="fa fa-user prefix grey-text"></i>
                               <input type="text" id="PrimerNombreCliente" name="PrimerNombreCliente" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{1,30}" title="Solo Letras" autocomplete="off" required>
                               <label for="PrimerNombreCliente">Primer Nombre</label>
                           </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="prefix grey-text"></i>
                               <input type="text" id="SegundoNombreCliente" name="SegundoNombreCliente" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{0,30}" title="Solo Letras" autocomplete="off">
                               <label for="SegundoNombreCliente">Segundo Nombre</label>
                           </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="prefix grey-text"></i>
                               <input type="text" id="TercerNombreCliente" name="TercerNombreCliente" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{0,30}" title="Solo Letras" autocomplete="off">
                               <label for="TercerNombreCliente">Tercer Nombre</label>
                           </div>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="fa fa-user prefix grey-text"></i>
                               <input type="text" id="PrimerApellidoCliente" name="PrimerApellidoCliente" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{1,30}" title="Solo Letras" autocomplete="off" required>
                               <label for="PrimerApellidoCliente">Primer Apellido</label>
                           </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                           <!-- Material input text -->
                           <div class="md-form">
                               <i class="prefix grey-text"></i>
                               <input type="text" id="SegundoApellidoCliente" name="SegundoApellidoCliente" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ ]{1,30}" title="Solo Letras" autocomplete="off" required>
                               <label for="SegundoApellidoCliente">Segundo Apellido</label>
                           </div>
                         </div>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-address-card prefix grey-text"></i>
                           <input type="text" id="DireccionCliente" name="DireccionCliente" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ0-9#_-,. áÁéÉíÍóÓúÚ]{0,150}" autocomplete="off">
                           <label for="DireccionCliente">Dirección</label>
                       </div>

                       <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-phone prefix grey-text"></i>
                                 <input type="text" id="TelefonoCliente" name="TelefonoCliente" style="width:75%;" class="form-control" pattern="[0-9-]{9,10}" title="0000-0000" autocomplete="off">
                                 <label for="TelefonoCliente">Teléfono</label>
                             </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-address-card-o prefix grey-text"></i>
                                 <input type="text" id="NitCliente" name="NitCliente" style="width:75%;" class="form-control" pattern="[0-9-]{17,20}" title="0000-000000-000-0" autocomplete="off">
                                 <label for="NitCliente">NIT</label>
                             </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-indent prefix grey-text"></i>
                                 <input type="text" id="NrcCliente" name="NrcCliente" style="width:75%;" class="form-control" pattern="[0-9-]{2,15}" title="00-0, 000-0, 0000-0, 00000-0" autocomplete="off">
                                 <label for="NrcCliente">NRC</label>
                             </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                             <!-- Material input datepicker -->
                             <div class="md-form">
                                <input type="text" name="FechaNacimientoCliente" id="FechaNacimientoCliente" value="" autocomplete="off" required>
                                <label for="FechaNacimientoCliente">Fecha de Nacimiento</label>
                           </div>
                          </div>
                      </div>
                      <br>

                      <!-- Material input text -->
                      <div class="md-form">
                          <i class="fa fa-suitcase prefix grey-text"></i>
                          <input type="text" id="EmpresaCliente" name="EmpresaCliente" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ0-9#_-,. áÁéÉíÍóÓúÚ]{0,100}" title="Solo Letras" autocomplete="off">
                          <label for="EmpresaCliente">Empresa</label>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-adjust prefix grey-text"></i>
                         <input type="text" id="GiroCliente" name="GiroCliente" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ0-9#_-,. áÁéÉíÍóÓúÚ]{0,150}" title="Solo Letras" autocomplete="off">
                         <label for="GiroCliente">Giro</label>
                      </div>

                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                           <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" id="EstadoCivilCliente" name="EstadoCivilCliente" required>
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
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                           <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" id="GeneroCliente" name="GeneroCliente" required>
                              <option value="" disabled selected>Seleccione</option>
                              <option value="Femenino">Femenino</option>
                              <option value="Masculino">Masculino</option>
                          </select>
                          <label>Genero</label>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opción. Obligatorio" id="IdTipoCliente" name="IdTipoCliente" required>
                              <option value="" disabled selected>Seleccione</option>
                              <?php
                                 foreach ($MatrizTipoCliente as $value) {
                                   ?>
                                   <option value="<?= $value['Id']; ?>"><?= $value['Nombre']; ?></option>
                              <?php
                                 }
                               ?>
                          </select>
                          <label>Tipo de Cliente</label>
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
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionCliente.js"></script>
      <script type="text/javascript" src="../assets/js/jQuery/Nuevo_Cliente.js"></script>
   </body>
</html>
