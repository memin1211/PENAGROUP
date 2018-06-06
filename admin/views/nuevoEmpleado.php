<div class="tab-pane fade" id="nuevoEmpleado" role="tabpanel">
    <!-- Material form contact -->
    <form>
        <p class="h4 text-center mb-4">Registrar Nuevo Empleado</p>

        <div class="row">
          <div class="col-4">
            <!-- Material input text -->
            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="PrimerNombreEmpleado" name="PrimerNombreEmpleado" class="form-control" pattern="[A-ZÑa-zñ]{1,50}" title="Solo Letras" autocomplete="off" required>
                <label for="PrimerNombreEmpleado">Primer Nombre</label>
            </div>
          </div>
          <div class="col-4">
            <!-- Material input text -->
            <div class="md-form">
                <i class="prefix grey-text"></i>
                <input type="text" id="SegundoNombreEmpleado" name="SegundoNombreEmpleado" class="form-control" pattern="[A-ZÑa-zñ]{0,50}" title="Solo Letras" autocomplete="off">
                <label for="SegundoNombreEmpleado">Segundo Nombre</label>
            </div>
          </div>
          <div class="col-4">
            <!-- Material input text -->
            <div class="md-form">
                <i class="prefix grey-text"></i>
                <input type="text" id="TercerNombreEmpleado" name="TercerNombreEmpleado" class="form-control" pattern="[A-ZÑa-zñ]{0,50}" title="Solo Letras" autocomplete="off">
                <label for="TercerNombreEmpleado">Tercer Nombre</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <!-- Material input text -->
            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="PrimerApellidoEmpleado" name="PrimerApellidoEmpleado" class="form-control" pattern="[A-ZÑa-zñ]{1,50}" title="Solo Letras" autocomplete="off" required>
                <label for="PrimerApellidoEmpleado">Primer Apellido</label>
            </div>
          </div>
          <div class="col-6">
            <!-- Material input text -->
            <div class="md-form">
                <i class="prefix grey-text"></i>
                <input type="text" id="SegundoApellidoEmpleado" name="SegundoApellidoEmpleado" class="form-control" pattern="[A-ZÑa-zñ]{1,50}" title="Solo Letras" autocomplete="off" required>
                <label for="SegundoApellidoEmpleado">Segundo Apellido</label>
            </div>
          </div>
        </div>

        <!-- Material input text -->
        <div class="md-form">
            <i class="fa fa-address-card prefix grey-text"></i>
            <input type="text" id="DireccionEmpleado" name="DireccionEmpleado" class="form-control" pattern="[A-ZÑa-zñ0-9#_-,. ]{0,150}" autocomplete="off">
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
                  <input type="text" id="DuiEmpleado" name="DuiEmpleado" class="form-control" pattern="[0-9-]{10,12}" title="00000000-0" autocomplete="off" required>
                  <label for="DuiEmpleado">DUI</label>
              </div>
           </div>
           <div class="col-4">
              <!-- Material input text -->
              <div class="md-form">
                  <i class="fa fa-address-card-o prefix grey-text"></i>
                  <input type="text" id="NitEmpleado" name="NitEmpleado" class="form-control" pattern="[0-9-]{17,20}" title="0000-000000-000-0" autocomplete="off">
                  <label for="NitEmpleado">NIT</label>
              </div>
           </div>
       </div>

       <div class="row">
         <div class="col-6">
           <!-- Material input text -->
           <div class="md-form">
               <i class="fa fa-phone prefix grey-text"></i>
               <input type="text" id="TelefonoFijoEmpleado" name="TelefonoFijoEmpleado" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
               <label for="TelefonoFijoEmpleado">Teléfono Fijo</label>
           </div>
         </div>
         <div class="col-6">
           <!-- Material input text -->
           <div class="md-form">
               <i class="fa fa-mobile-phone prefix grey-text"></i>
               <input type="text" id="CelularEmpleado" name="CelularEmpleado" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
               <label for="CelularEmpleado">Célular</label>
           </div>
         </div>
       </div>

       <!-- Material input text -->
       <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="CorreoEmpleado" name="CorreoEmpleado" class="form-control" pattern="[A-Za-z@_-.]{0,100}" title="alguien@dominio.com" autocomplete="off">
          <label for="CorreoEmpleado">Correo</label>
       </div>

       <div class="row">
         <div class="col-6">
           <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" required>
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
           <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" required>
               <option value="" disabled selected>Seleccione</option>
               <option value="1">FEMENINO</option>
               <option value="2">MASCULINO</option>
           </select>
           <label>Genero</label>
         </div>
       </div>

        <div class="text-center mt-4">
            <button class="btn btn-outline-info" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
        </div>
    </form>
     <!-- Material form contact -->
</div>
