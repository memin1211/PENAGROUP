<?php
session_start();
  if (isset($_SESSION['actual'])) {
    if ($_SESSION['actual']['NombreNivel']!="USUARIO") {
      header('Location: ../../admin/views/');
    }
    include_once("../include/panel.php");
  }else {
    header('Location: ../../');
  }
?>
