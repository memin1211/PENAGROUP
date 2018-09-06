<?php
   require_once("../../db/config.php");
   $NitBusqueda= $_REQUEST['Nit'];
   $sqlcli = "SELECT A.Id, A.Primer_Nombre, A.Segundo_Nombre, A.Tercer_Nombre, A.Primer_Apellido, A.Segundo_Apellido, A.Fecha_Nacimiento, A.Genero, A.Telefono_Fijo, A.Telefono_Celular, A.Direccion, A.Nit, A.Dui, B.Nombre AS EstadoCivil, D.Nombre AS Estado FROM erp_empleado A INNER JOIN erp_estado_civil B ON (A.Id_Estado_Civil=B.Id) INNER JOIN erp_entidad C ON (A.Id_Entidad=C.Id) INNER JOIN erp_estado D ON (A.Id_Estado=D.Id) WHERE A.Nit='$NitBusqueda'";
   $db=mysqli_connect(host,user,pass,dbname);
   $rcli=mysqli_query($db, $sqlcli) or die(mysqli_error($db));
   $cant=mysqli_num_rows($rcli);
   if ($cant>0) {
      while ($a=mysqli_fetch_array($rcli))
      {
       $Id=$a['Id'];
       $Primer_Nombre=$a['Primer_Nombre'];
       $Segundo_Nombre=$a['Segundo_Nombre'];
       $Tercer_Nombre=$a['Tercer_Nombre'];
       $Primer_Apellido=$a['Primer_Apellido'];
       $Segundo_Apellido=$a['Segundo_Apellido'];
       $Fecha_Nacimiento=date('d-m-Y',strtotime($a['Fecha_Nacimiento']));
       $Genero=$a['Genero'];
       $Telefono_Fijo=$a['Telefono_Fijo'];
       $Telefono_Celular=$a['Telefono_Celular'];
       $Direccion=$a['Direccion'];
       $Nit=$a['Nit'];
       $Dui=$a['Dui'];
       $EstadoCivil=$a['EstadoCivil'];
       $Estado=$a['Estado'];
       $cadena = $Id."|".$Primer_Nombre."|".$Segundo_Nombre."|".$Tercer_Nombre."|".$Primer_Apellido."|".$Segundo_Apellido."|".$Direccion."|".$Fecha_Nacimiento."|".$Dui."|".$Nit."|".$Telefono_Fijo."|".$Telefono_Celular."|".$Genero."|".$EstadoCivil."|".$Estado;
      }
   }else{
      $cadena='';
   }

   mysqli_free_result($rcli);
   mysqli_close($db);

   echo $cadena;
?>
