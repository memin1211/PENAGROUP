<div class="tab-pane fade" id="modificarProveedor" role="tabpanel">
   <!-- Material form contact -->
   <form>
       <p class="h4 text-center mb-4">Modificar Información Proveedor</p>

       <!-- Material input text -->
       <div class="md-form">
           <i class="fa fa-user prefix grey-text"></i>
           <input type="text" id="NombreProveedor" name="NombreProveedor" class="form-control" required>
           <label for="NombreProveedor">Nombre Proveedor</label>
       </div>

       <!-- Material input text -->
       <div class="md-form">
           <i class="fa fa-address-card prefix grey-text"></i>
           <input type="text" id="DireccionProveedor" name="DireccionProveedor" class="form-control">
           <label for="DireccionProveedor">Dirección</label>
       </div>

       <div class="row">
          <div class="col-6">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="fa fa-phone prefix grey-text"></i>
                 <input type="text" id="TelefonoProveedor" name="TelefonoProveedor" class="form-control" required>
                 <label for="TelefonoProveedor">Teléfono Fijo</label>
             </div>
          </div>
          <div class="col-6">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="fa fa-mobile-phone prefix grey-text"></i>
                 <input type="text" id="CelularProveedor" name="CelularProveedor" class="form-control">
                 <label for="CelularProveedor">Célular</label>
             </div>
          </div>
      </div>
      <br>

      <!-- Material input text -->
      <div class="md-form">
         <i class="fa fa-envelope prefix grey-text"></i>
         <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control">
         <label for="CorreoUsuario">Correo</label>
      </div>

       <div class="text-center mt-4">
           <button class="btn btn-outline-info" type="button">Modificar<i class="fa fa-refresh ml-2"></i></button>
       </div>
   </form>
</div>
