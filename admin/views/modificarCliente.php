<div class="tab-pane fade" id="modificarCliente" role="tabpanel">
   <!-- Material form contact -->
   <form id="FormModificarCliente" name="FormModificarCliente">
       <p class="h4 text-center mb-4">Modificar Información Cliente</p>

       <div class="row">
         <div class="col-4">
           <!-- Material input text -->
           <div class="md-form">
               <i class="fa fa-user prefix grey-text"></i>
               <input type="text" id="PrimerNombreCliente" name="PrimerNombreCliente" class="form-control" required>
               <label for="PrimerNombreCliente">Primer Nombre</label>
           </div>
         </div>
         <div class="col-4">
           <!-- Material input text -->
           <div class="md-form">
               <i class="prefix grey-text"></i>
               <input type="text" id="SegundoNombreCliente" name="SegundoNombreCliente" class="form-control" required>
               <label for="SegundoNombreCliente">Segundo Nombre</label>
           </div>
         </div>
         <div class="col-4">
           <!-- Material input text -->
           <div class="md-form">
               <i class="prefix grey-text"></i>
               <input type="text" id="TercerNombreCliente" name="TercerNombreCliente" class="form-control">
               <label for="TercerNombreCliente">Tercer Nombre</label>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="col-6">
           <!-- Material input text -->
           <div class="md-form">
               <i class="fa fa-user prefix grey-text"></i>
               <input type="text" id="PrimerApellidoCliente" name="PrimerApellidoCliente" class="form-control" required>
               <label for="PrimerApellidoCliente">Primer Apellido</label>
           </div>
         </div>
         <div class="col-6">
           <!-- Material input text -->
           <div class="md-form">
               <i class="prefix grey-text"></i>
               <input type="text" id="SegundoApellidoCliente" name="SegundoApellidoCliente" class="form-control" required>
               <label for="SegundoApellidoCliente">Segundo Apellido</label>
           </div>
         </div>
       </div>

       <!-- Material input text -->
       <div class="md-form">
           <i class="fa fa-address-card prefix grey-text"></i>
           <input type="text" id="DireccionCliente" name="DireccionCliente" class="form-control">
           <label for="DireccionCliente">Dirección</label>
       </div>

       <div class="row">
          <div class="col-4">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="fa fa-phone prefix grey-text"></i>
                 <input type="text" id="TelefonoCliente" name="TelefonoCliente" class="form-control">
                 <label for="TelefonoCliente">Teléfono</label>
             </div>
          </div>
          <div class="col-4">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="fa fa-address-card-o prefix grey-text"></i>
                 <input type="text" id="NitCliente" name="NitCliente" class="form-control">
                 <label for="NitCliente">NIT</label>
             </div>
          </div>
          <div class="col-4">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="fa fa-indent prefix grey-text"></i>
                 <input type="text" id="NrcCliente" name="NrcCliente" class="form-control">
                 <label for="NrcCliente">NRC</label>
             </div>
          </div>
      </div>
      <br>

      <!-- Material input text -->
      <div class="md-form">
          <i class="fa fa-suitcase prefix grey-text"></i>
          <input type="text" id="EmpresaCliente" name="EmpresaCliente" class="form-control">
          <label for="EmpresaCliente">Empresa</label>
      </div>

      <!-- Material input text -->
      <div class="md-form">
         <i class="fa fa-adjust prefix grey-text"></i>
         <input type="email" id="GiroCliente" name="GiroCliente" class="form-control">
         <label for="GiroCliente">Giro</label>
      </div>

      <!-- Material input text -->
      <div class="md-form">
         <i class="fa fa-envelope prefix grey-text"></i>
         <input type="email" id="CorreoCliente" name="CorreoCliente" class="form-control">
         <label for="CorreoCliente">Correo</label>
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
              <option value="1">COMÚN</option>
              <option value="2">PREFERENTE</option>
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
