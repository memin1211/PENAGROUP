<?php
   require_once("../../db/config.php");
   $name= strtoupper($_REQUEST['nombre']);
   $sqlcli = "SELECT A.Id, A.Nombre,A.Nombre_Legal,A.Abreviatura,B.Nombre AS Estado FROM erp_laboratorio A INNER JOIN erp_estado B ON (B.Id=A.Id_Estado) WHERE A.Nombre like '%$name%'";
   $db=mysqli_connect(host,user,pass,dbname);
   $rcli=mysqli_query($db, $sqlcli) or die(mysqli_error($db));
   $cant=mysqli_num_rows($rcli);
   if ($cant>0) {
      while ($a=mysqli_fetch_array($rcli))
      {
       $Id=$a['Id'];
       $Nombre=$a['Nombre'];
       $Nombre_Legal=$a['Nombre_Legal'];
       $Abreviatura=$a['Abreviatura'];
       $Estado=$a['Estado'];
       $cadena = $Id."|".$Nombre."|".$Abreviatura."|".$Nombre_Legal."|".$Estado;
      }
   }else{
      $cadena='';
   }

   mysqli_free_result($rcli);
   mysqli_close($db);

   echo $cadena;
?>
