<?php
  require_once("../models/models_Sucursal.php");
  require_once("../models/models_Departamento.php");
  $Sucursal=new models_Sucursal();
  $Departamento=new models_Departamento();
  $MatrizSucursal=$Sucursal->get_Sucursales();
  $MatrizDepartamento=$Departamento->get_Departamento();
  $MatrizMunicipio=$Departamento->get_Municipio();

  //Evalusmos que los Datos ha recibir sean enviado mediante jquery
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //Variable que contiene la accion a realizar Nuevo o Modificar
    $Formulario=isset($_POST['Formulario']) ? $_POST['Formulario']:NULL;

    //Recibimos los Valores de los Formularios
    $IdSucursal=isset($_POST['IdSucursal']) ? $_POST['IdSucursal']:NULL;
    $Nombre=ucwords(strtolower($_POST['NombreSucursal']));
    $NombreCorto=ucwords(strtolower($_POST['NombreCortoSucursal']));
    $Direccion=ucwords(strtolower($_POST['DireccionSucursal']));
    $Telefono=isset($_POST['TelefonoSucursal']) ? $_POST['TelefonoSucursal']:NULL;

    $Id_Municipio=isset($_POST['Id_Municipio']) ? $_POST['Id_Municipio']:NULL;
    $Id_Encargado=isset($_POST['Id_Encargado']) ? $_POST['Id_Encargado']:NULL;

    //Evalusmos accion a realizar
    if ($Formulario=='Nuevo') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($Nombre!='' && $NombreCorto!='' && $Direccion!='' && $Telefono!='' && $Id_Municipio!='') {

            //Ejecutamos la Funcion
            $Sucursal->set_InsertSucursal($Nombre, $NombreCorto, $Telefono, $Direccion, $Id_Municipio, $Id_Encargado);

      }
    }elseif ($Formulario=='Modificar') {

            //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
            if ($IdSucursal !='' && $Nombre!='' && $NombreCorto!='' && $Direccion!='' && $Telefono!='' && $Id_Municipio!='') {

               //Ejecutamos la Funcion
               $Sucursal->set_UpdateSucursal($Nombre, $NombreCorto, $Telefono, $Direccion, $IdSucursal);

               echo "<script language=\"javascript\">setTimeout('window.location.href=\"ModificarSucursal.php?Cod_Accion=2\"')</script>";

          }else {
             echo "<script language=\"javascript\">setTimeout('window.location.href=\"ModificarSucursal.php?Cod_Accion=3\"')</script>";
          }
    }
}else {
   //Variable que contiene la accion a realizar Nuevo o Modificar
   $Formulario=isset($_POST['Formulario']) ? $_POST['Formulario']:NULL;
   $IdSucursal=isset($_POST['IdSucursal']) ? $_POST['IdSucursal']:NULL;

   if ($Formulario=='Modificar') {
      //Recibimos los Valores de los Formularios
      $Nombre=ucwords(strtolower($_POST['NombreSucursal']));
      $NombreCorto=ucwords(strtolower($_POST['NombreCortoSucursal']));
      $Direccion=ucwords(strtolower($_POST['DireccionSucursal']));
      $Telefono=isset($_POST['TelefonoSucursal']) ? $_POST['TelefonoSucursal']:NULL;

           //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
           if ($IdSucursal !='' && $Nombre!='' && $NombreCorto!='' && $Direccion!='' && $Telefono!='') {

              //Ejecutamos la Funcion
              $Sucursal->set_UpdateSucursal($Nombre, $NombreCorto, $Telefono, $Direccion, $IdSucursal);

              echo "<script language=\"javascript\">setTimeout('window.location.href=\"../views/ModificarSucursal.php?Cod_Accion=2\"')</script>";

         }else {
            echo "<script language=\"javascript\">setTimeout('window.location.href=\"../views/ModificarSucursal.php?Cod_Accion=3\"')</script>";
         }
   }
}
?>
