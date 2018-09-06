<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Agregar Usuario";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Usuario.php");
include_once("../controllers/controllers_Sucursal.php");
?>
   <body onload = "document.FormNuevoUsuario.IdUsuario.focus()">
      <div class="container Title-Margin">
       <div class="row info-color  text-center" style="border-radius: 10px;">
               <label class="h3 font-italic white-text" style="margin-left:15px;">Nuevo Usuario</label>
       </div>
     </div>
        <div class="container">
            <!-- Tab panels -->
                       <div class="row card Card-Bottom">
                  <!-- Material form contact -->
                   <form id="FormNuevoUsuario" name="FormNuevoUsuario" class="Margin-Frm">
                       <input type="hidden" name="Formulario" value="Nuevo">

                       <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" id="IdUsuario" name="IdUsuario" required>
                           <option value="" disabled selected>Seleccione Persona a Crear Usuario</option>
                           <?php
                             foreach ($MatrizUsuarioNuevo as $value) {
                               ?>
                            <option value="<?= $value['Id']; ?>"><?= $value['Nombre'].': '.$value['Primer_Nombre'].' '.$value['Segundo_Nombre'].' '.$value['Primer_Apellido'].' '.$value['Segundo_Apellido']; ?></option>
                          <?php
                             }
                           ?>
                       </select>

                       <!-- Material input email -->
                       <div class="md-form">
                           <i class="fa fa-envelope prefix grey-text"></i>
                           <input type="email" id="CorreoUsuario" name="CorreoUsuario" style="width:75%;" class="form-control" pattern="[A-Za-z@_-.]{0,100}" title="alguien@dominio.com" autocomplete="off" required>
                           <label for="CorreoUsuario">Correo</label>
                       </div>

                       <div class="row">
                          <div class="col-4">
                            <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" id="TipoUsuario" name="TipoUsuario" required>
                                <option value="" disabled selected>Seleccione</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Cliente">Cliente</option>
                            </select>
                            <label>Tipo Usuario</label>
                          </div>
                          <div class="col-4">
                            <select class="mdb-select colorful-select dropdown-info" title="Seleccione una Opcion. Obligatorio" id="IdRol" name="IdRol" required>
                                <option value="" disabled selected>Seleccione</option>
                                <?php
                                  foreach ($MatrizRol as $value) {
                                    ?>
                                 <option value="<?= $value['Id']; ?>"><?= $value['Nombre']; ?></option>
                               <?php
                                  }
                                ?>
                            </select>
                            <label>Rol</label>
                          </div>
                          <div class="col-4">
                             <select class="mdb-select colorful-select dropdown-info" multiple title="Seleccione una Opcion. Obligatorio" id="IdSucusalAsig[]" name="IdSucusalAsig[]" required>
                                  <option value="" disabled selected>Seleccione</option>
                                  <?php
                                   foreach ($MatrizSucursal as $value) {
                                     ?>
                                  <option value="<?= $value['Id']; ?>"><?= $value['Nombre_Corto']; ?></option>
                                <?php
                                   }
                                 ?>
                              </select>
                              <label>Sucursal</label>
                          </div>
                      </div>
                      <br>

                       <!-- Material input subject -->
                       <div class="md-form">
                           <i class="fa fa-user-circle prefix grey-text" aria-hidden="true"></i>
                           <input type="text" id="UsuarioSesion" name="UsuarioSesion" style="width:75%;" class="form-control" pattern="[A-Za-z0-9-_]{1,50}" autocomplete="off" required>
                           <label for="UsuarioSesion">Usuario</label>
                       </div>

                       <!-- Material input subject -->
                       <div class="md-form">
                           <i class="fa fa-user-secret prefix grey-text" aria-hidden="true"></i>
                           <input type="password" id="ClaveUsuario" name="ClaveUsuario" style="width:75%;" class="form-control" min="8" max="50" title="Debe contener 8 Caracteres Minimo y 50 Maximo" autocomplete="off" required>
                           <label for="ClaveUsuario">Clave</label>
                       </div>

                       <!-- Material input subject -->
                       <div class="md-form">
                           <i class="fa fa-user-secret prefix grey-text" aria-hidden="true"></i>
                           <input type="password" id="ValidarClaveUsuario" name="ValidarClaveUsuario" style="width:75%;" class="form-control" min="8" max="50" title="Debe contener 8 Caracteres Minimo y 50 Maximo" autocomplete="off" required>
                           <label for="ValidarClaveUsuario">Validar Clave</label>
                       </div>

                       <div class="text-center mt-4">
                           <button class="btn btn-outline-info" type="submit">Crear<i class="fa fa-paper-plane-o ml-2"></i></button>
                       </div>
                   </form>
                   <!-- Material form contact -->
              </div>
            </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionUsuario.js"></script>
      <script type="text/javascript" src="../assets/js/jQuery/Nuevo_Usuario.js"></script>
   </body>
</html>
