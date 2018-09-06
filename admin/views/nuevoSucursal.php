<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Agregar Sucursal";
require_once("../include/bitacora.php");
?>
   <body onload = "document.FormNuevoSucursal.NombreSucursal.focus()">
     <div class="container Title-Margin">
       <div class="row info-color  text-center" style="border-radius: 10px;">
               <label class="h3 font-italic white-text" style="margin-left:15px;">Nueva Sucursal</label>
       </div>
     </div>
        <div class="container">
            <!-- Tab panels -->
                       <div class="row card Card-Bottom">
                  <!-- Material form contact -->
                   <form  id="FormNuevoSucursal" name="FormNuevoSucursal" class="Margin-Frm">
                     <input type="hidden" name="Formulario" value="Nuevo">
                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-institution prefix grey-text"></i>
                           <input type="text" id="NombreSucursal" name="NombreSucursal" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ ,.áÁéÉíÍóÓúÚ]{1,50}" title="Solo Letras" autocomplete="off" required>
                           <label for="NombreSucursal">Nombre Sucursal</label>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-institution prefix grey-text"></i>
                           <input type="text" id="NombreCortoSucursal" name="NombreCortoSucursal" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ áÁéÉíÍóÓúÚ,.]{1,50}" title="Solo Letras" autocomplete="off" required>
                           <label for="NombreCortoSucursal">Nombre Corto Sucursal</label>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-address-card prefix grey-text"></i>
                           <input type="text" id="DireccionSucursal" name="DireccionSucursal" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ0-9#_-,. áÁéÉíÍóÓúÚ]{0,150}" autocomplete="off" required>
                           <label for="DireccionSucursal">Dirección</label>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-phone prefix grey-text"></i>
                           <input type="text" id="TelefonoSucursal" name="TelefonoSucursal" style="width:75%;" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
                           <label for="TelefonoSucursal">Teléfono</label>
                       </div>



                       <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-image prefix grey-text"></i>
                                <input type="file" id="Logo" name="Logo" style="width:75%;" class="form-control" disabled>
                            </div>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <!-- Material input text -->
                             <select class="mdb-select colorful-select dropdown-info" id="Id_Municipio" name="Id_Municipio">
                                <option value="" disabled selected>Municipio</option>
                                     <option value=""></option>
                                     <option value="">Santa Tecla</option>
                                     <option value="197">San Salvador</option>
                            </select>
                            <label>Municipio</label>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <!-- Material input text -->
                            <select class="mdb-select colorful-select dropdown-info" id="Id_Encargado" name="Id_Encargado">
                               <option value="" disabled selected>Encargado</option>
                                    <option value=""></option>
                                    <option value="1">Allan Brito</option>
                                    <option value="">Maria del Carmen</option>
                           </select>
                           <label>Encargado</label>
                          </div>
                      </div>
                      <br>

                       <div class="text-center mt-4">
                           <button class="btn btn-outline-info botonlg" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
                       </div>
                   </form>
                   <!-- Material form contact -->
              </div>
            </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionSucursal.js"></script>
      <script type="text/javascript" src="../assets/js/jQuery/Nuevo_Sucursal.js"></script>
   </body>
</html>
