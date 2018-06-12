<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Gestión de Empleados";
require_once("../include/bitacora.php");
?>
   <body>
      <br><br><br>
      <div class="container" id="gestion">
         <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified info-color" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#verEmpleado" role="tab"><i class="fa fa-address-book" aria-hidden="true"></i> Catálogo de Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nuevoEmpleado" role="tab"><i class="fa fa-plus" aria-hidden="true"></i></i> Nuevo Empleado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#modificarEmpleado" role="tab"><i class="fa fa-refresh" aria-hidden="true"></i> Modificar Empleado</a>
                </li>
            </ul>
            <!-- Tab panels -->
            <div class="tab-content">

                <!--Panel 1-->
                <?php include_once("verEmpleado.php"); ?>
                <!--/.Panel 1-->

                <!--Panel 2-->
                <?php include_once("nuevoEmpleado.php"); ?>
                <!--/.Panel 2-->

                <!--Panel 3-->
                <?php include_once("modificarEmpleado.php"); ?>
                <!--/.Panel 3-->
            </div>
         </div>
      </div>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="ValidacionesJS/ValidacionesNuevoEmpleado.js"></script>
   </body>
</html>
