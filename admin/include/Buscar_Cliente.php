<?php
   require_once("../../db/config.php");
   $NitBusqueda= $_REQUEST['Nit'];
   $sqlcli = "SELECT A.Id, D.Codigo_Cuenta, A.Primer_Nombre, A.Segundo_Nombre, A.Tercer_Nombre, A.Primer_Apellido, A.Segundo_Apellido, A.Fecha_Nacimiento, B.Nombre AS EstadoCivil, A.Genero, A.Telefono, A.Direccion, A.Nit, A.Nrc, A.Empresa, A.Giro, C.Nombre AS TipoCliente, F.Nombre AS Estado FROM erp_cliente A INNER JOIN erp_estado_civil B ON (A.Id_Estado_Civil=B.Id) INNER JOIN erp_tipo_cliente C ON (A.Id_Tipo_Cliente=C.Id) INNER JOIN erp_cuenta_cliente D ON (A.Id_Cuenta_Cliente=D.Id) INNER JOIN erp_entidad E ON (A.Id_Entidad=E.Id) INNER JOIN erp_estado F ON (A.Id_Estado=F.Id) WHERE A.Nit='$NitBusqueda';";
   $db=mysqli_connect(host,user,pass,dbname);
   $rcli=mysqli_query($db, $sqlcli) or die(mysqli_error($db));
   $cant=mysqli_num_rows($rcli);
   if ($cant>0) {
      while ($a=mysqli_fetch_array($rcli))
      {
       $Id=$a['Id'];
       $Codigo_Cuenta=$a['Codigo_Cuenta'];
       $Primer_Nombre=$a['Primer_Nombre'];
       $Segundo_Nombre=$a['Segundo_Nombre'];
       $Tercer_Nombre=$a['Tercer_Nombre'];
       $Primer_Apellido=$a['Primer_Apellido'];
       $Segundo_Apellido=$a['Segundo_Apellido'];
       $Fecha_Nacimiento=date('d-m-Y',strtotime($a['Fecha_Nacimiento']));
       $EstadoCivil=$a['EstadoCivil'];
       $Genero=$a['Genero'];
       $Telefono=$a['Telefono'];
       $Direccion=$a['Direccion'];
       $Nit=$a['Nit'];
       $Nrc=$a['Nrc'];
       $Empresa=$a['Empresa'];
       $Giro=$a['Giro'];
       $TipoCliente=$a['TipoCliente'];
       $Estado=$a['Estado'];
       $cadena = $Id."|".$Codigo_Cuenta."|".$Primer_Nombre."|".$Segundo_Nombre."|".$Tercer_Nombre."|".$Primer_Apellido."|".$Segundo_Apellido."|".$Direccion."|".$Telefono."|".$Nit."|".$Nrc."|".$Empresa."|".$Giro."|".$Genero."|".$Fecha_Nacimiento."|".$EstadoCivil."|".$TipoCliente."|".$Estado;
      }
   }else{
      $cadena='';
   }

   mysqli_free_result($rcli);
   mysqli_close($db);

   echo $cadena;
?>
