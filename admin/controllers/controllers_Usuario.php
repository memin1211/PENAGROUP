<?php
  require_once("../models/models_Usuario.php");
  $Usuario=new models_Usuario();
  $MatrizUsuario=$Usuario->get_Usuario();
  $MatrizUsuarioNuevo=$Usuario->get_UsuarioNuevo();
  $MatrizRol=$Usuario->get_Rol();

  //Evalusmos que los Datos ha recibir sean enviado mediante jquery
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //Variable que contiene la accion a realizar Nuevo o Modificar
    $Formulario=isset($_POST['Formulario']) ? $_POST['Formulario']:NULL;

    //Recibimos los Valores de los Formulario de Nuevo Laboratorio
    $Id_Usuario=isset($_POST['IdUsuario']) ? $_POST['IdUsuario']:NULL;
    $Correo=isset($_POST['CorreoUsuario']) ? $_POST['CorreoUsuario']:NULL;
    $Tipo_Usuario=isset($_POST['TipoUsuario']) ? $_POST['TipoUsuario']:NULL;
    $Id_Rol=isset($_POST['IdRol']) ? $_POST['IdRol']:NULL;
    $IdSucusalAsig=isset($_POST['IdSucusalAsig']) ? $_POST['IdSucusalAsig']:NULL;
    $UsuarioSesion=isset($_POST['UsuarioSesion']) ? $_POST['UsuarioSesion']:NULL;
    $Clave=isset($_POST['ValidarClaveUsuario']) ? $_POST['ValidarClaveUsuario']:NULL;


    //Evalusmos accion a realizar
    if ($Formulario=='Nuevo') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($Id_Usuario!='' && $Correo!='' && $Tipo_Usuario!='' && $Id_Rol!='' && $UsuarioSesion!='' && $Clave!=''  && $IdSucusalAsig!='') {

            //Ejecutamos la Funcion
            $Usuario->set_InsertUsuario($Tipo_Usuario, $Id_Usuario, $Id_Rol, $Correo, $UsuarioSesion, $Clave, $fechahoy, $IdSucusalAsig);

      }else {
         echo "ERROR: Evaluacion de Parametros Vacios en Nuevo. Verifique que Todos los Datos sean Digitados Correctamente Por Favor.";
      }
    }elseif ($Formulario=='Modificar') {

            //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
            if ($Nombre!='' && $NombreCorto!='' && $Direccion!='' && $Telefono!='' && $Id_Municipio!='') {

                  //Ejecutamos la Funcion
                  //$Usuario->set_UpdateSucursal($Nombre, $NombreCorto, $Telefono, $Direccion, $Id_Municipio, $Id_Encargado);

          }
    }else {
      echo "ERROR: Evaluacion de Parametros Vacios en Modificar. Verifique que Todos los Datos sean Digitados Correctamente Por Favor.";
   }
}
?>
