<?php
require_once("../include/validarSesion.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#verUsuario" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nuevoUsuario" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nuevo Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modificarUsuario" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Usuario</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <?php include_once("verUsuario.php"); ?>
                <!--/.Panel 1-->

                <!--Panel 2-->
                <?php include_once("nuevoUsuario.php"); ?>
                <!--/.Panel 2-->

                <!--Panel 3-->
                <?php include_once("modificarUsuario.php"); ?>
                <!--/.Panel 3-->
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="ValidacionesJS/ValidacionesNuevoUsuario.js"></script>
   </body>
</html>
