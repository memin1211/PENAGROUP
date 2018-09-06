<?php
  require_once("../models/models_Proveedor.php");
  require_once("../models/models_Departamento.php");
  $Departamento=new models_Departamento();
  $Proveedor=new models_Proveedor();
  $MatrizDepartamento=$Departamento->get_Departamento();
  $MatrizMunicipio=$Departamento->get_Municipio();
  $MatrizProveedor=$Proveedor->get_Proveedor();

  //Evalusmos que los Datos ha recibir sean enviado mediante jquery
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //Variable que contiene la accion a realizar Nuevo o Modificar
    $Formulario=isset($_POST['Formulario']) ? $_POST['Formulario']:NULL;

    //Recibimos los Valores de los Formulario de Nuevo Proveedor
    $IdProveedor=isset($_POST['IdProveedor']) ? $_POST['IdProveedor']:NULL;
    $F_Creacion=isset($_POST['F_Creacion']) ? $_POST['F_Creacion']:NULL;
    $NombreProveedor=ucwords(strtolower($_POST['NombreProveedor']));
    $DireccionProveedor=ucwords(strtolower($_POST['DireccionProveedor']));
    $TelefonoProveedor=ucwords(strtolower($_POST['TelefonoProveedor']));
    $GiroProveedor=ucwords(strtolower($_POST['GiroProveedor']));
    $CorreoProveedor=isset($_POST['CorreoProveedor']) ? $_POST['CorreoProveedor']:NULL;
    $CelularProveedor=isset($_POST['CelularProveedor']) ? $_POST['CelularProveedor']:NULL;
    $IdMunicipio=isset($_POST['IdMunicipio']) ? $_POST['IdMunicipio']:NULL;

    $Id_Estado=isset($_POST['IdEstado']) ? $_POST['IdEstado']:NULL;

    //Evalusmos accion a realizar
    if ($Formulario=='nuevo') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($NombreProveedor!='' && $DireccionProveedor!='' && $GiroProveedor!='' && $IdMunicipio!='') {

        $Proveedor->set_InsertProveedor($NombreProveedor, $DireccionProveedor, $TelefonoProveedor, $CelularProveedor, $CorreoProveedor, $GiroProveedor, $IdMunicipio, $F_Creacion);

      }

    }elseif ($Formulario=='modificar') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos

    }

}
?>
