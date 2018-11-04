<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Agregar Producto";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Producto.php");
?>
   <body onload = "document.FrmNvoProd.CodigoBarraProducto.focus()">
      <div class="container Title-Margin">
       <div class="row info-color  text-center" style="border-radius: 10px;">
               <label class="h3 font-italic white-text" style="margin-left:15px;">Nuevo Producto</label>
       </div>
     </div>
        <div class="container">
            <!-- Tab panels -->
                       <div class="row card Card-Bottom">
                  <!-- Material form contact -->
                  <form id="FrmNvoProd" name="FrmNvoProd" class="Margin-Frm">
                    <input type="hidden" name="Formulario" value="nuevo">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">

                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="fa fa-user prefix grey-text"></i>
                              <input type="text" id="CodigoBarraProducto" name="CodigoBarraProducto" style="width:75%;" class="form-control text-capitalize" pattern="[0-9]{8,20}" title="Digite el Codigo de Barra de Producto." autocomplete="off" required>
                              <label for="CodigoBarraProducto">Codigo de Barra Producto</label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                          <!-- Material input text -->
                          <div class="md-form">
                              <i class="fa fa-trademark prefix grey-text"></i>
                              <input type="text" id="NombreProducto" name="NombreProducto" style="width:75%;" class="form-control" pattern="[A-ZÑa-zñ ,.áÁéÉíÍóÓúÚ]{1,75}" title="Digite el Nombre del Producto." autocomplete="off" required>
                              <label for="NombreProducto">Nombre de Producto</label>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <select class="mdb-select colorful-select dropdown-info" id="Id_Laboratorio" name="Id_Laboratorio">
                                <option value="" disabled selected>Laboratorio</option>
                                <?php
                                   foreach ($MatrizLaboratorio as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Nombre']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Laboratorio</label>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <select class="mdb-select colorful-select dropdown-info" id="Id_Presentacion" name="Id_Presentacion">
                                <option value="" disabled selected>Presentacion</option>
                                <?php
                                   foreach ($MatrizPresentacion as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Presentacion']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Presentacion</label>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <select class="mdb-select colorful-select dropdown-info" id="Id_Categoria" name="Id_Categoria">
                                <option value="" disabled selected>Categoria</option>
                                <?php
                                   foreach ($MatrizCategoria as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Categoria']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Categoria</label>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <select class="mdb-select colorful-select dropdown-info" id="Id_Entidad" name="Id_Entidad">
                                <option value="" disabled selected>Entidad</option>
                                <?php
                                   foreach ($MatrizEntidad as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Entidad']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Entidad</label>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <select class="mdb-select colorful-select dropdown-info" id="Id_Estado" name="Id_Estado">
                                <option value="" disabled selected>Estado</option>
                                <?php
                                   foreach ($MatrizEstado as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Estado']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Estado</label>
                          </div>

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
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionProducto.js"></script>
      <script type="text/javascript" src="../assets/js/jQuery/Nuevo_Producto.js"></script>
   </body>
</html>
