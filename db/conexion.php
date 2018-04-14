<?php
require_once 'config.php';
$mysqli=new mysqli(host,user,pass,dbname);
if ($mysqli->connect_errno) {
  echo "Error al intentar Conectarse al Servidor debido al error".$mysqli->connect_error;
}
 ?>
