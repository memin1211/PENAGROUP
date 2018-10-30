<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Gestión de Productos";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Producto.php");
?>
<body onload = "document.FormNuevoProducto.NombreProducto.focus()">
  <div class="container Title-Margin">
    <div class="row info-color  text-center" style="border-radius: 10px;">
            <label class="h3 font-italic white-text" style="margin-left:15px;">Nuevo Producto</label>
    </div>
  </div>
     <div class="container">
         <!-- Tab panels -->
                    <div class="row card Card-Bottom">
                  <!-- Material form contact -->
                   <form id="FormNuevoProducto" name="FormNuevoProducto" class="Margin-Frm">
                      <input type="hidden" name="Formulario" value="nuevo">
                      <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-vcard prefix grey-text"></i>
                                <input type="text" id="NombreProducto" name="NombreProducto" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñáÁéÉíÍóÓúÚ,.- ]{1,50}" title="Digite solo el  Nombre del Producto" autocomplete="off" required>
                                <label for="NombreProducto">Producto</label>
                            </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <!-- Material input text -->
                            <div class="md-form">
                                <i class="fa fa-terminal prefix grey-text"></i>
                                <input type="text" id="CodBarraProducto" name="CodBarraProducto" style="width:75%;" class="form-control" pattern="[0-9]{1,20}" title="Código de Barra del Producto" autocomplete="off">
                                <label for="CodBarraProducto">Código De Barra</label>
                            </div>
                         </div>
                      </div>
                      <br>

                       <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <!-- Material input text -->
                             <select class="mdb-select colorful-select dropdown-info" name="IdLaboratorio">
                                <option value="" disabled selected>-Seleccione-</option>
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
                             <!-- Material input text -->
                             <select class="mdb-select colorful-select dropdown-info" name="IdPresentacion">
                                <option value="" disabled selected>-Seleccione-</option>
                                <?php
                                   foreach ($MatrizPresentacion as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Presentacion'].' '.$value['Nombre']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Presentación</label>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <!-- Material input text -->
                             <select class="mdb-select colorful-select dropdown-info" name="IdCategoria">
                                <option value="" disabled selected>-Seleccione-</option>
                                <?php
                                   foreach ($MatrizCategoria as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Nombre']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Categoria</label>
                          </div>
                      </div>
                      <br>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-clone prefix grey-text"></i>
                         <input type="text" id="ComponentesProducto" name="ComponentesProducto" style="width:75%;" class="form-control text-capitalize" pattern="[A-ZÑa-zñ0-9 ,]{1,50}" title="Cada Componente debe ir separado por comas(,)" autocomplete="off" required>
                         <label for="ComponentesProducto">Componentes</label>
                      </div>

                      <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <!-- Material input text -->
                            <div class="md-form">
                               <i class="fa fa-hashtag prefix grey-text"></i>
                               <input type="number" id="CantidadProducto" name="CantidadProducto" style="width:75%;" class="form-control" autocomplete="off" required>
                               <label for="CantidadProducto">Cánt/Uni</label>
                            </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <!-- Material input text -->
                            <div class="md-form">
                               <i class="fa fa-usd prefix grey-text"></i>
                               <input type="text" id="CostoProducto" name="CostoProducto" style="width:75%;" class="form-control"pattern="[0-9.]{1,11}" title="Solo Números. NO utilizar coma(,)." autocomplete="off" required>
                               <label for="CostoProducto">Costo Unidad</label>
                            </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <!-- Material input text -->
                               <div class="md-form">
                                  <i class="fa fa-usd prefix grey-text"></i>
                                  <input type="text" id="PrecioProducto" name="PrecioProducto" style="width:75%;" class="form-control" pattern="[0-9.]{1,11}" title="Solo Números. NO utilizar coma(,)." autocomplete="off" required>
                                  <label for="PrecioProducto">Precio Unidad</label>
                               </div>
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
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionSucursal.js"></script>
      <script type="text/javascript" src="../assets/js/jQuery/Nuevo_Producto.js"></script>
   </body>
</html>
