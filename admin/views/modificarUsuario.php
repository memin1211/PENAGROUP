<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Modificar Usuario";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modificarUsuario" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Usuario</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">
              <div class="tab-pane fade" id="modificarUsuario" role="tabpanel">
                <!-- Material form contact -->
                <form>
                    <p class="h4 text-center mb-4">Modificar Información Usuario</p>

                    <select class="mdb-select colorful-select dropdown-info">
                        <option value="" disabled selected>Seleccione Persona a Modificar Usuario</option>
                        <option value="1">MARIA DEL CARMEN</option>
                        <option value="2">ROSA MARIA AVALOS</option>
                        <option value="3">ALLAN BRITO</option>
                        <option value="4">KRISNA MELISETH</option>
                    </select>
                    <label>Persona a Modificar Usuario</label>

                    <!-- Material input email -->
                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="CorreoUsuario" name="CorreoUsuario" class="form-control" disabled>
                        <label for="CorreoUsuario">Correo</label>
                    </div>

                    <div class="row">
                       <div class="col-4">
                         <select class="mdb-select colorful-select dropdown-info">
                             <option value="" disabled selected>Seleccione</option>
                             <option value="1">ADMINISTRADOR</option>
                             <option value="2">VENDEDOR</option>
                             <option value="3">CONTADOR</option>
                             <option value="4">CLIENTE</option>
                         </select>
                         <label>Cargo</label>
                       </div>

                       <div class="col-4">
                         <select class="mdb-select colorful-select dropdown-info">
                             <option value="" disabled selected>Seleccione</option>
                             <option value="1">ADMINISTRACIÓN</option>
                             <option value="2">VENTAS</option>
                             <option value="3">CONTABILIDAD</option>
                         </select>
                         <label>Departamento</label>
                       </div>
                       <div class="col-4">
                         <select class="mdb-select colorful-select dropdown-info">
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
                        <input type="text" id="UsuarioSesion" name="UsuarioSesion" class="form-control" required>
                        <label for="UsuarioSesion">Usuario</label>
                    </div>

                     <div class="text-center mt-4">
                         <button class="btn btn-outline-info" type="submit">Modificar<i class="fa fa-refresh ml-2"></i></button>
                     </div>
                 </form>
                 <!-- Material form contact -->
              </div>
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionUsuario.js"></script>
   </body>
</html>
