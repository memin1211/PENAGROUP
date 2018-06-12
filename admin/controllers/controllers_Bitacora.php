<?php
  require_once("../models/models_Bitacora.php");
  $VerBitacora=new models_Bitacora();
  $MatrizBitacora=$VerBitacora->get_Bitacora();
  require_once("../views/gestionBitacora.php");
?>
