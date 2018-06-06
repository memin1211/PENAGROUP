<div class="tab-pane fade" id="nuevoCliente" role="tabpanel">
    <!-- Material form contact -->
     <form id="FormNuevoCliente" name="FormNuevoCliente">
         <p class="h4 text-center mb-4">Registrar Nuevo Cliente</p>
         <div class="row">
           <div class="col-4">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="fa fa-user prefix grey-text"></i>
                 <input type="text" id="PrimerNombreCliente" name="PrimerNombreCliente" class="form-control" pattern="[A-ZÑa-zñ]{1,50}" title="Solo Letras" autocomplete="off" required>
                 <label for="PrimerNombreCliente">Primer Nombre</label>
             </div>
           </div>
           <div class="col-4">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="prefix grey-text"></i>
                 <input type="text" id="SegundoNombreCliente" name="SegundoNombreCliente" class="form-control" pattern="[A-ZÑa-zñ]{0,50}" title="Solo Letras" autocomplete="off">
                 <label for="SegundoNombreCliente">Segundo Nombre</label>
             </div>
           </div>
           <div class="col-4">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="prefix grey-text"></i>
                 <input type="text" id="TercerNombreCliente" name="TercerNombreCliente" class="form-control" pattern="[A-ZÑa-zñ]{0,50}" title="Solo Letras" autocomplete="off">
                 <label for="TercerNombreCliente">Tercer Nombre</label>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-6">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="fa fa-user prefix grey-text"></i>
                 <input type="text" id="PrimerApellidoCliente" name="PrimerApellidoCliente" class="form-control" pattern="[A-ZÑa-zñ]{1,50}" title="Solo Letras" autocomplete="off" required>
                 <label for="PrimerApellidoCliente">Primer Apellido</label>
             </div>
           </div>
           <div class="col-6">
             <!-- Material input text -->
             <div class="md-form">
                 <i class="prefix grey-text"></i>
                 <input type="text" id="SegundoApellidoCliente" name="SegundoApellidoCliente" class="form-control" pattern="[A-ZÑa-zñ]{1,50}" title="Solo Letras" autocomplete="off" required>
                 <label for="SegundoApellidoCliente">Segundo Apellido</label>
             </div>
           </div>
         </div>

         <!-- Material input text -->
         <div class="md-form">
             <i class="fa fa-address-card prefix grey-text"></i>
             <input type="text" id="DireccionCliente" name="DireccionCliente" class="form-control" pattern="[A-ZÑa-zñ0-9#_-,. ]{0,150}" autocomplete="off">
             <label for="DireccionCliente">Dirección</label>
         </div>

         <div class="row">
            <div class="col-4">
               <!-- Material input text -->
               <div class="md-form">
                   <i class="fa fa-phone prefix grey-text"></i>
                   <input type="text" id="TelefonoCliente" name="TelefonoCliente" class="form-control" pattern="[0-9-]{9,12}" title="0000-0000" autocomplete="off">
                   <label for="TelefonoCliente">Teléfono</label>
               </div>
            </div>
            <div class="col-4">
               <!-- Material input text -->
               <div class="md-form">
                   <i class="fa fa-address-card-o prefix grey-text"></i>
                   <input type="text" id="NitCliente" name="NitCliente" class="form-control" pattern="[0-9-]{17,20}" title="0000-000000-000-0" autocomplete="off">
                   <label for="NitCliente">NIT</label>
               </div>
            </div>
            <div class="col-4">

               <!-- Material input text -->
               <div class="md-form">
                   <i class="fa fa-indent prefix grey-text"></i>
                   <input type="text" id="NrcCliente" name="NrcCliente" class="form-control" pattern="[0-9-]{2,10}" title="00-0, 000-0, 0000-0, 00000-0" autocomplete="off">
                   <label for="NrcCliente">NRC</label>
               </div>
            </div>
        </div>
        <br>

        <!-- Material input text -->
        <div class="md-form">
            <i class="fa fa-suitcase prefix grey-text"></i>
            <input type="text" id="EmpresaCliente" name="EmpresaCliente" class="form-control" pattern="[A-ZÑa-zñ. ]{0,75}" title="Solo Letras" autocomplete="off">
            <label for="EmpresaCliente">Empresa</label>
        </div>

        <!-- Material input text -->
        <div class="md-form">
           <i class="fa fa-adjust prefix grey-text"></i>
           <input type="text" id="GiroCliente" name="GiroCliente" class="form-control" pattern="[A-ZÑa-zñ. ]{0,75}" title="Solo Letras" autocomplete="off">
           <label for="GiroCliente">Giro</label>
        </div>

        <!-- Material input text -->
        <div class="md-form">
           <i class="fa fa-envelope prefix grey-text"></i>
           <input type="email" id="CorreoCliente" name="CorreoCliente" class="form-control" pattern="[A-Za-z@_-.]{0,100}" title="alguien@dominio.com" autocomplete="off">
           <label for="CorreoCliente">Correo</label>
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
                <option value="1">COMÚN</option>
                <option value="2">PREFERENTE</option>
            </select>
            <label>Tipo de Cliente</label>
          </div>
        </div>

         <div class="text-center mt-4">
             <button class="btn btn-outline-info" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
         </div>
     </form>
     <!-- Material form contact -->
</div>
