<?php
  session_start();
  include_once("../../db/conexion.php");
  //$Accion = "El Usuario ha Cerrado Sesión";
  //require_once("bitacora.php");
  session_destroy();
  header('Location:../../');
?>
