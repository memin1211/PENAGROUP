<?php
session_start();
if (isset($_SESSION['usuario_actual'])) {
  if ($_SESSION['usuario_actual']['Tipo_Usuario']=="Cliente") {
    header('Location: ../../usuario/views/');
  }
  include_once("../include/header.php");
  $Sucursal=$_REQUEST['sucursal'];
  include_once("../include/panel.php");
  include_once("../include/menu.php");
}else {
  header('Location: ../../');
}
?>
