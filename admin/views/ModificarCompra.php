<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Modificar Compra";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modificarCompra" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i>Modificar Orden de Compra</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">
              <div class="tab-pane fade" id="modificarCompra" role="tabpanel">
                 <!-- Material form contact -->
                 <form>
                     <p class="h4 text-center mb-4">Modificar Orden de Compra</p>

                     <div class="row">
                       <div class="col-6">
                         <select class="mdb-select colorful-select dropdown-info">
                             <option value="" disabled selected>Seleccione</option>
                             <option value="1">BIOKEMICAL S.A DE C.V</option>
                             <option value="2">JOMI S.A DE C.V</option>
                             <option value="3">ROBLES S.A DE C.V</option>
                         </select>
                         <label>Proveedor</label>
                       </div>

                       <div class="col-6">
                         <!-- Material input datepicker -->
                         <div class="md-form">
                              <input placeholder="Seleccione Fecha de Compra" name="FechaCompra" id="FechaCompra" type="text" id="date-picker-example" class="form-control datepicker" style="width:100%; background: white;" required>
                              <label for="date-picker-example">Fecha de Compra</label>
                         </div>
                       </div>
                     </div>

                     <div class="row">
                       <div class="col-6">
                         <select class="mdb-select colorful-select dropdown-info">
                             <option value="" disabled selected>Seleccione</option>
                             <option value="1">ALLAN BRITO</option>
                             <option value="2">WILBER DURAN</option>
                             <option value="3">MICHELLE VEGA</option>
                         </select>
                         <label>Solicita Compra</label>
                       </div>

                       <div class="col-6">
                         <!-- Material input text -->
                         <div class="md-form">
                             <i class="fa fa-dollar prefix grey-text"></i>
                             <input type="text" id="TelefonoSucursal" name="TelefonoSucursal" class="form-control">
                             <label for="TelefonoSucursal">Monto a Pagar</label>
                         </div>
                       </div>
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
   </body>
</html>
