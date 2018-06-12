<?php
  require_once("../models/models_Empleado.php");
  $VerEmpleado=new models_Empleado();
  $MatrizEmpleado=$VerEmpleado->get_Empleado();
  require_once("../views/gestionEmpleado.php");
?>
