<?php
  //Incluimos el Modelos correspondiente
  require_once("../models/models_Laboratorio.php");

  //Instanciamos la Clase del Modelos
  $VerLaboratorio=new models_Laboratorio();

  //Ejecutamos y Asignamos el Resultado de la Funcion get_Laboratorio
  $MatrizLaboratorio=$VerLaboratorio->get_Laboratorio();

  //Ejecutamos y Asignamos el Resultado de la Funcion get_EstadoLaboratorio
  $MatrizEstadoLaboratorio=$VerLaboratorio->get_EstadoLaboratorio();

  //Evalusmos que los Datos ha recibir sean enviado mediante jquery
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //Variable que contiene la accion a realizar Nuevo o Modificar
    $Formulario=isset($_POST['Formulario']) ? $_POST['Formulario']:NULL;

    //Recibimos los Valores de los Formulario de Nuevo Laboratorio
    $IdLaboratorio=isset($_POST['IdLaboratorio']) ? $_POST['IdLaboratorio']:NULL;
    $Nombre_Laboratorio=ucwords(strtolower($_POST['NombreLaboratorio']));
    $AbreviaturaLaboratorio=isset($_POST['AbreviaturaLaboratorio']) ? $_POST['AbreviaturaLaboratorio']:NULL;
    $NombreLegalLaboratorio=ucwords(strtolower($_POST['NombreLegalLaboratorio']));
    $Id_Estado=isset($_POST['IdEstado']) ? $_POST['IdEstado']:NULL;

    //Evalusmos accion a realizar
    if ($Formulario=='nuevo') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($Nombre_Laboratorio!='' && $AbreviaturaLaboratorio!='') {
        $VerLaboratorio->set_InsertLaboratorio($Nombre_Laboratorio, $AbreviaturaLaboratorio, $NombreLegalLaboratorio);
      }

    }elseif ($Formulario=='modificar') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($Nombre_Laboratorio!='' && $NombreLegalLaboratorio!='' && $AbreviaturaLaboratorio!='' && $Id_Estado!='' && $IdLaboratorio) {
        $VerLaboratorio->set_UpdateLaboratorio($Nombre_Laboratorio, $NombreLegalLaboratorio, $AbreviaturaLaboratorio, $Id_Estado, $IdLaboratorio);
     }else {
        echo "Datos Nulos <br>";
        echo "Nombre: ".$Nombre_Laboratorio;
        echo "Abreviatura: ".$AbreviaturaLaboratorio;
        echo "Nombre Legal: ".$NombreLegalLaboratorio;
        echo "Id Estado: ".$Id_Estado;
        echo "Id Laboratorio: ".$IdLaboratorio;
     }

    }



}
?>
