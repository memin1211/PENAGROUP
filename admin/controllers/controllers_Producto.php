<?php
  require_once("../models/models_Laboratorio.php");
  require_once("../models/models_Producto.php");
  $VerLaboratorio=new models_Laboratorio();
  $MatrizLaboratorio=$VerLaboratorio->get_Laboratorio();
  $Producto=new models_Producto();
  $MatrizPresentacion=$Producto->get_Presentacion();
  $MatrizCategoria=$Producto->get_Categoria();
  $MatrizProducto=$Producto->get_Producto();
?>
