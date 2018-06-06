<div class="tab-pane fade" id="nuevoSucursal" role="tabpanel">
    <!-- Material form contact -->
     <form  id="FormNuevoSucursal">
         <p class="h4 text-center mb-4">Registrar Nueva Sucursal</p>

         <!-- Material input text -->
         <div class="md-form">
             <i class="fa fa-institution prefix grey-text"></i>
             <input type="text" id="NombreSucursal" name="NombreSucursal" class="form-control" pattern="[A-ZÑa-zñ]{1,50}" title="Solo Letras" autocomplete="off" required>
             <label for="NombreSucursal">Nombre Sucursal</label>
         </div>

         <!-- Material input text -->
         <div class="md-form">
             <i class="fa fa-address-card prefix grey-text"></i>
             <input type="text" id="DireccionSucursal" name="DireccionSucursal" class="form-control" pattern="[A-ZÑa-zñ0-9#_-,. ]{0,150}" autocomplete="off" required>
             <label for="DireccionSucursal">Dirección</label>
         </div>

         <!-- Material input text -->
         <div class="md-form">
             <i class="fa fa-phone prefix grey-text"></i>
             <input type="text" id="TelefonoSucursal" name="TelefonoSucursal" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
             <label for="TelefonoSucursal">Teléfono</label>
         </div>
        <br>

         <div class="text-center mt-4">
             <button class="btn btn-outline-info botonlg" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
         </div>
     </form>
     <!-- Material form contact -->
</div>
