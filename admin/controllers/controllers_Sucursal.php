<?php
  require_once("../models/models_Sucursal.php");
  $Sucursal=new models_Sucursal();
  $MatrizSucursal=$Sucursal->get_Sucursales();
  require_once("../views/gestionSucursal.php");
?>
