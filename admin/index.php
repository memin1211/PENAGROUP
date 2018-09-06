<?php
  session_start();
  if (isset($_SESSION['usuario_actual'])) {
    if ($_SESSION['usuario_actual']['Tipo_Usuario']=="Empleado") {
      header('Location: views/');
    }else{
      header('Location: ../index.php');
    }
  }else{
    header('Location: ../index.php');
  }
?>
