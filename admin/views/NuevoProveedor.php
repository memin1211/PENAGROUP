<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Agregar Proveedor";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Proveedor.php");
?>
   <body onload = "document.FormNuevoProveedor.NombreProveedor.focus()">
      <div class="container Title-Margin">
       <div class="row info-color  text-center" style="border-radius: 10px;">
               <label class="h3 font-italic white-text" style="margin-left:15px;">Nuevo Proveedor</label>
       </div>
     </div>
        <div class="container">
            <!-- Tab panels -->
                       <div class="row card Card-Bottom">
                  <!-- Material form contact -->
                   <form id="FormNuevoProveedor" name="FormNuevoProveedor" class="Margin-Frm">
                       <input type="hidden" name="Formulario" value="nuevo">
                       <input type="hidden" name="F_Creacion" value="<?= $fecha;?>">

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-user prefix grey-text"></i>
                           <input type="text" id="NombreProveedor" name="NombreProveedor" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ,. ]{1,100}" title="Digite el  Nombre del Proveedor" autocomplete="off" required>
                           <label for="NombreProveedor">Nombre Proveedor</label>
                       </div>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-address-card prefix grey-text"></i>
                           <input type="text" id="DireccionProveedor" name="DireccionProveedor" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ0-9#_-,. áÁéÉíÍóÓúÚ]{0,150}" title="Digite la Dirección del Proveedor" autocomplete="off" required>
                           <label for="DireccionProveedor">Dirección</label>
                       </div>
                       <br>

                       <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-phone prefix grey-text"></i>
                                 <input type="text" id="TelefonoProveedor" name="TelefonoProveedor" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off" required>
                                 <label for="TelefonoProveedor">Teléfono Fijo</label>
                             </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <!-- Material input text -->
                             <div class="md-form">
                                 <i class="fa fa-mobile-phone prefix grey-text"></i>
                                 <input type="text" id="CelularProveedor" name="CelularProveedor" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
                                 <label for="CelularProveedor">Celular</label>
                             </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <select class="mdb-select" id="IdMunicipio" name="IdMunicipio">
                                <?php
                                   foreach ($MatrizDepartamento as $valor) {
                                      ?>
                                      <optgroup label="<?= $valor['Nombre']; ?>">
                                      <?php
                                          foreach ($MatrizMunicipio as $values) {
                                             if ($values['Id_Departamento']==$valor['Id']) {
                                          ?>
                                         <option value="<?= $values['Id']; ?>"><?= $values['Nombre']; ?></option>
                                         <?php
                                      }
                                   }
                                   ?>
                                   </optgroup>
                                  <?php
                                }
                                 ?>
                              </select>
                              <label>Municipio</label>
                          </div>
                      </div>
                      <br>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-adjust prefix grey-text"></i>
                         <input type="text" id="GiroProveedor" name="GiroProveedor" class="form-control" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ. ]{0,100}" title="Digite el Giro del Proveedor" autocomplete="off" required>
                         <label for="GiroProveedor">Giro</label>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-envelope prefix grey-text"></i>
                         <input type="email" id="CorreoProveedor" name="CorreoProveedor" style="width:75%;" class="form-control" pattern="[A-Za-z@_-.]{0,100}" title="alguien@dominio.com" autocomplete="off">
                         <label for="CorreoProveedor">Correo</label>
                      </div>

                       <div class="text-center mt-4">
                           <button class="btn btn-outline-info" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
                       </div>
                   </form>
                   <!-- Material form contact -->
              </div>
            </div>

      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionProveedor.js"></script>
      <script type="text/javascript" src="../assets/js/jQuery/Nuevo_Proveedor.js"></script>
      <script language="javascript">
         $(document).ready(function(){
          $("#Departamento").change(function () {
         		 $("#Departamento option:selected").each(function () {
         		  IdDepto = $(this).val();
         		  $.post("../include/municipios.php", { IdDepto: IdDepto }, function(data){
         			  $("#Municipio").html(data);
         		  });
         	  });
          })
         });
         </script>
   </body>
</html>
