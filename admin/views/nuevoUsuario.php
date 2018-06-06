<div class="tab-pane fade" id="nuevoUsuario" role="tabpanel">
    <!-- Material form contact -->
     <form>
         <p class="h4 text-center mb-4">Nuevo Usuario</p>

         <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" required>
             <option value="" disabled selected>Seleccione Persona a Crear Usuario</option>
             <option value="1">MARIA DEL CARMEN</option>
             <option value="2">ROSA MARIA AVALOS</option>
             <option value="3">ALLAN BRITO</option>
             <option value="4">KRISNA MELISETH</option>
         </select>
         <label>Persona a Crear Usuario</label>

         <!-- Material input email -->
         <div class="md-form">
             <i class="fa fa-envelope prefix grey-text"></i>
             <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control" pattern="[A-Za-z@_-.]{0,100}" title="alguien@dominio.com" autocomplete="off" required>
             <label for="CorreoUsuario">Correo</label>
         </div>

         <div class="row">
            <div class="col-4">
              <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" required>
                  <option value="" disabled selected>Seleccione</option>
                  <option value="1">ADMINISTRADOR</option>
                  <option value="2">VENDEDOR</option>
                  <option value="3">CONTADOR</option>
                  <option value="4">CLIENTE</option>
              </select>
              <label>Cargo</label>
            </div>
            <div class="col-4">
              <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" required>
                  <option value="" disabled selected>Seleccione</option>
                  <option value="1">ADMINISTRACIÓN</option>
                  <option value="2">VENTAS</option>
                  <option value="3">CONTABILIDAD</option>
              </select>
              <label>Departamento</label>
            </div>
            <div class="col-4">
              <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" required>
                  <option value="" disabled selected>Seleccione</option>
                  <option value="1">SANTA MARIA</option>
                  <option value="2">SAGRADA FAMILIA</option>
              </select>
              <label>Sucursal</label>
            </div>
        </div>
        <br>

         <!-- Material input subject -->
         <div class="md-form">
             <i class="fa fa-user-circle prefix grey-text" aria-hidden="true"></i>
             <input type="text" id="UsuarioSesion" name="UsuarioSesion" class="form-control" pattern="[A-ZÑa-zñ0-9]{1,50}" autocomplete="off" required>
             <label for="UsuarioSesion">Usuario</label>
         </div>

         <!-- Material input subject -->
         <div class="md-form">
             <i class="fa fa-user-secret prefix grey-text" aria-hidden="true"></i>
             <input type="password" id="ClaveUsuario" name="ClaveUsuario" class="form-control" min="8" title="Debe contener 8 Caracteres Minimo" autocomplete="off" required>
             <label for="ClaveUsuario">Clave</label>
         </div>

         <!-- Material input subject -->
         <div class="md-form">
             <i class="fa fa-user-secret prefix grey-text" aria-hidden="true"></i>
             <input type="password" id="ValidarClaveUsuario" name="ValidarClaveUsuario" class="form-control" min="8" title="Debe contener 8 Caracteres Minimo" autocomplete="off" required>
             <label for="ValidarClaveUsuario">Validar Clave</label>
         </div>

         <div class="text-center mt-4">
             <button class="btn btn-outline-info" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
         </div>
     </form>
     <!-- Material form contact -->
</div>
