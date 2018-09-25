<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Agregar Laboratorio";
require_once("../include/bitacora.php");
?>
   <body onload = "document.FrmNvoLab.NombreLaboratorio.focus()">
      <div class="container Title-Margin">
       <div class="row info-color  text-center" style="border-radius: 10px;">
               <label class="h3 font-italic white-text" style="margin-left:15px;">Nueva Laboratorio</label>
       </div>
     </div>
        <div class="container">
            <!-- Tab panels -->
                       <div class="row card Card-Bottom">
                  <!-- Material form contact -->
                  <form id="FrmNvoLab" name="FrmNvoLab" class="Margin-Frm">
                    <input type="hidden" name="Formulario" value="nuevo">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">

                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="fa fa-user prefix grey-text"></i>
                              <input type="text" id="NombreLaboratorio" name="NombreLaboratorio" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ ,.áÁéÉíÍóÓúÚ]{1,75}" title="Digite el Nombre del Laboratorio." autocomplete="off" required>
                              <label for="NombreLaboratorio">Nombre Laboratorio</label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="fa fa-trademark prefix grey-text"></i>
                              <input type="text" id="AbreviaturaLaboratorio" name="AbreviaturaLaboratorio" style="width:75%;" class="form-control" pattern="[A-ZÑa-zñ ,.]{1,10}" title="Digite el Nombre del Laboratorio." autocomplete="off" required>
                              <label for="AbreviaturaLaboratorio">Abreviatura</label>
                          </div>
                        </div>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                          <i class="fa fa-address-card prefix grey-text"></i>
                          <input type="text" id="NombreLegalLaboratorio" name="NombreLegalLaboratorio" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ ,.áÁéÉíÍóÓúÚ]{1,100}" title="Digite el Nombre del Laboratorio Según DNM." autocomplete="off" required>
                          <label for="NombreLegalLaboratorio">Nombre Legal</label>
                      </div>
                     <br>

                       <div class="text-center mt-4">
                           <button class="btn btn-outline-info" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
                       </div>
                   </form>
                   <!-- Material form contact -->
              </div>
            </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionLaboratorio.js"></script>
      <script type="text/javascript" src="../assets/js/jQuery/Nuevo_Laboratorio.js"></script>
   </body>
</html>
