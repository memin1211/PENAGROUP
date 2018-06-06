<div class="tab-pane fade" id="modificarEmpleado" role="tabpanel">
   <!-- Material form contact -->
   <form>
       <p class="h4 text-center mb-4">Modificar Información Empleado</p>

       <div class="row">
         <div class="col-4">
           <!-- Material input text -->
           <div class="md-form">
               <i class="fa fa-user prefix grey-text"></i>
               <input type="text" id="PrimerNombreEmpleado" name="PrimerNombreEmpleado" class="form-control" required>
               <label for="PrimerNombreEmpleado">Primer Nombre</label>
           </div>
         </div>
         <div class="col-4">
           <!-- Material input text -->
           <div class="md-form">
               <i class="prefix grey-text"></i>
               <input type="text" id="SegundoNombreEmpleado" name="SegundoNombreEmpleado" class="form-control" required>
               <label for="SegundoNombreEmpleado">Segundo Nombre</label>
           </div>
         </div>
         <div class="col-4">
           <!-- Material input text -->
           <div class="md-form">
               <i class="prefix grey-text"></i>
               <input type="text" id="TercerNombreEmpleado" name="TercerNombreEmpleado" class="form-control">
               <label for="TercerNombreEmpleado">Tercer Nombre</label>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="col-6">
           <!-- Material input text -->
           <div class="md-form">
               <i class="fa fa-user prefix grey-text"></i>
               <input type="text" id="PrimerApellidoEmpleado" name="PrimerApellidoEmpleado" class="form-control" required>
               <label for="PrimerApellidoEmpleado">Primer Apellido</label>
           </div>
         </div>
         <div class="col-6">
           <!-- Material input text -->
           <div class="md-form">
               <i class="prefix grey-text"></i>
               <input type="text" id="SegundoApellidoEmpleado" name="SegundoApellidoEmpleado" class="form-control" required>
               <label for="SegundoApellidoEmpleado">Segundo Apellido</label>
           </div>
         </div>
       </div>

       <!-- Material input text -->
       <div class="md-form">
           <i class="fa fa-address-card prefix grey-text"></i>
           <input type="text" id="DireccionEmpleado" name="DireccionEmpleado" class="form-control">
           <label for="DireccionEmpleado">Dirección</label>
       </div>

       <div class="row">
          <div class="col-4">
            <!-- Material input datepicker -->
            <div class="md-form">
                 <input placeholder="Seleccione Fecha de Nacimiento" name="FechaNacimientoEmpleado" id="FechaNacimientoEmpleado" type="text" id="date-picker-example" class="form-control datepicker" style="width:100%; background: white;" required>
                 <label for="date-picker-example">Fecha de Nacimiento</label>
            </div>
          </div>
          <div class="col-4">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="fa fa-indent prefix grey-text"></i>
                 <input type="text" id="DuiEmpleado" name="DuiEmpleado" class="form-control">
                 <label for="DuiEmpleado">DUI</label>
             </div>
          </div>
          <div class="col-4">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="fa fa-address-card-o prefix grey-text"></i>
                 <input type="text" id="NitEmpleado" name="NitEmpleado" class="form-control">
                 <label for="NitEmpleado">NIT</label>
             </div>
          </div>
      </div>

      <div class="row">
        <div class="col-6">
          <!-- Material input text -->
          <div class="md-form">
              <i class="fa fa-phone prefix grey-text"></i>
              <input type="text" id="TelefonoFijoEmpleado" name="TelefonoFijoEmpleado" class="form-control">
              <label for="TelefonoFijoEmpleado">Teléfono Fijo</label>
          </div>
        </div>
        <div class="col-6">
          <!-- Material input text -->
          <div class="md-form">
              <i class="fa fa-mobile-phone prefix grey-text"></i>
              <input type="text" id="CelularEmpleado" name="CelularEmpleado" class="form-control">
              <label for="CelularEmpleado">Célular</label>
          </div>
        </div>
      </div>

      <!-- Material input text -->
      <div class="md-form">
         <i class="fa fa-envelope prefix grey-text"></i>
         <input type="email" id="CorreoEmpleado" name="CorreoEmpleado" class="form-control">
         <label for="CorreoEmpleado">Correo</label>
      </div>

      <div class="row">
        <div class="col-6">
          <select class="mdb-select colorful-select dropdown-info">
              <option value="" disabled selected>Seleccione</option>
              <option value="1">SOLTERO/A</option>
              <option value="2">CASADO/A</option>
              <option value="3">ACOMPAÑADO/A</option>
              <option value="4">DIVORSIADO/A</option>
              <option value="5">VIUDO/A</option>
          </select>
          <label>Estado Civil</label>
        </div>
        <div class="col-6">
          <select class="mdb-select colorful-select dropdown-info">
              <option value="" disabled selected>Seleccione</option>
              <option value="1">FEMENINO</option>
              <option value="2">MASCULINO</option>
          </select>
          <label>Tipo de Cliente</label>
        </div>
      </div>

       <div class="text-center mt-4">
           <button class="btn btn-outline-info" type="button">Modificar<i class="fa fa-refresh ml-2"></i></button>
       </div>
   </form>
   <!-- Material form contact -->
</div>
