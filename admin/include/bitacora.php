<?php
  date_default_timezone_set('America/El_Salvador');
  function ObtenerIP()
    {
      if (isset($_SERVER["HTTP_CLIENT_IP"]))
      {
      	return $_SERVER["HTTP_CLIENT_IP"];
      }
      elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
      {
      	return $_SERVER["HTTP_X_FORWARDED_FOR"];
      }
      elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
      {
        return $_SERVER["HTTP_X_FORWARDED"];
      }
      elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
      {
        return $_SERVER["HTTP_FORWARDED_FOR"];
      }
      elseif (isset($_SERVER["HTTP_FORWARDED"]))
      {
        return $_SERVER["HTTP_FORWARDED"];
      }
      else
      {
        return $_SERVER["REMOTE_ADDR"];
      }
  }

  $Fecha_Registro = date("Y/m/d");
  $Hora_Registro = date("H:i:s");
  $Id_Usuario = $_SESSION['usuario_actual']['Id'];
  $Accion1 = $Accion;
  $Ip_Ingreso = ObtenerIP();

	$sql_Bitacora="INSERT INTO erp_bitacora(Id_Usuario,Descripcion,Hora_Registro,Fecha_Registro,Ip_Ingreso) VALUES ($Id_Usuario,'$Accion1','$Hora_Registro','$Fecha_Registro','$Ip_Ingreso')";
	$rs=mysqli_query($mysqli, $sql_Bitacora) or die(mysqli_error($mysqli));

?>
