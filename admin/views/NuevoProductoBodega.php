<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Agregar Producto en Bodega";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nuevoProducto" role="tab"><i class="fa fa-plus" aria-hidden="true"></i><label class="d-none d-sm-block">Nuevo Producto en Bodega</label></a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">
              <div class="tab-pane fade" id="nuevoProducto" role="tabpanel">
                  <!-- Material form contact -->
                   <form>
                       <p class="h4 text-center mb-4">Nuevo Producto en Bodega</p>

                       <!-- Material input text -->
                       <div class="md-form">
                           <i class="fa fa-vcard prefix grey-text"></i>
                           <input type="text" id="NombreProducto" name="NombreProducto" class="form-control" pattern="[A-ZÑa-zñ0-9 -]{1,50}" title="Digite solo el  Nombre del Producto" autocomplete="off" required>
                           <label for="NombreProducto">Producto</label>
                       </div>
                       <br>

                       <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <!-- Material input text -->
                             <select class="mdb-select colorful-select dropdown-info">
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
                             <!-- Material input text -->
                             <select class="mdb-select colorful-select dropdown-info">
                                <option value="" disabled selected>Tipo Producto</option>
                                <?php
                                   foreach ($MatrizPresentacion as $value) {
                                     ?>
                                     <option value="<?= $value['Id']; ?>"><?= $value['Presentacion'].' '.$value['Nombre']; ?></option>
                                <?php
                                   }
                                 ?>
                            </select>
                            <label>Tipo Producto</label>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <!-- Material input text -->
                             <select class="mdb-select colorful-select dropdown-info">
                                <option value="" disabled selected>Categoria</option>
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
                         <input type="text" id="ComponentesProducto" name="ComponentesProducto" class="form-control" pattern="[A-ZÑa-zñ0-9 ,]{1,50}" title="Cada Componente debe ir separado por comas(,)" autocomplete="off" required>
                         <label for="ComponentesProducto">Componentes</label>
                      </div>

                      <!-- Material input text -->
                      <div class="md-form">
                         <i class="fa fa-hashtag prefix grey-text"></i>
                         <input type="number" id="CantidadProducto" name="CantidadProducto" class="form-control" autocomplete="off" required>
                         <label for="CantidadProducto">Cant/Uni</label>
                      </div>

                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                          <!-- Material input text -->
                          <div class="md-form">
                             <i class="fa fa-usd prefix grey-text"></i>
                             <input type="text" id="CostoProducto" name="CostoProducto" class="form-control"pattern="[0-9.]{1,11}" title="Solo Números. NO utilizar coma(,)." autocomplete="off" required>
                             <label for="CostoProducto">Costo</label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                          <!-- Material input text -->
                             <div class="md-form">
                                <i class="fa fa-usd prefix grey-text"></i>
                                <input type="text" id="PrecioProducto" name="PrecioProducto" class="form-control" pattern="[0-9.]{1,11}" title="Solo Números. NO utilizar coma(,)." autocomplete="off" required>
                                <label for="PrecioProducto">Precio</label>
                             </div>
                        </div>
                      </div>

                       <div class="text-center mt-4">
                           <button class="btn btn-outline-info" type="button">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
                       </div>
                   </form>
                   <!-- Material form contact -->
              </div>
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
   </body>
</html>
