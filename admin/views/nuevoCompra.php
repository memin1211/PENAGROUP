<div class="tab-pane fade" id="nuevoCompra" role="tabpanel">
    <!-- Material form contact -->
     <form>
         <p class="h4 text-center mb-4">Generar Orden de Compra</p>

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
             <button class="btn btn-outline-info" type="button">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
         </div>
     </form>
     <!-- Material form contact -->
</div>
