<?php
  require_once("../models/models_Laboratorio.php");
  require_once("../models/models_Producto.php");
  $VerLaboratorio=new models_Laboratorio();
  $MatrizLaboratorio=$VerLaboratorio->get_Laboratorio();
  $Producto=new models_Producto();
  $MatrizPresentacion=$Producto->get_Presentacion();
  $MatrizCategoria=$Producto->get_Categoria();
  $MatrizProducto=$Producto->get_Producto();



  //Evalusmos que los Datos ha recibir sean enviado mediante jquery
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //Variable que contiene la accion a realizar Nuevo o Modificar
    $Formulario=isset($_POST['Formulario']) ? $_POST['Formulario']:NULL;

    //Recibimos los Valores de los Formulario de Cliente
    $NombreProducto=ucwords(strtolower($_POST['NombreProducto']));
    $CodBarraProducto=isset($_POST['CodBarraProducto']) ? $_POST['CodBarraProducto']:NULL;
    $IdLaboratorio=isset($_POST['IdLaboratorio']) ? $_POST['IdLaboratorio']:NULL;
    $IdPresentacion=isset($_POST['IdPresentacion']) ? $_POST['IdPresentacion']:NULL;
    $IdCategoria=isset($_POST['IdCategoria']) ? $_POST['IdCategoria']:NULL;
    $ComponentesProducto=isset($_POST['ComponentesProducto']) ? $_POST['ComponentesProducto']:NULL;
    $CantidadProducto=isset($_POST['CantidadProducto']) ? $_POST['CantidadProducto']:NULL;
    $CostoProducto=isset($_POST['CostoProducto']) ? $_POST['CostoProducto']:NULL;
    $PrecioProducto=isset($_POST['PrecioProducto']) ? $_POST['PrecioProducto']:NULL;

    echo "Formulario";

    //Evalusmos accion a realizar
    if ($Formulario=='nuevo') {


      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($NombreProducto!='' && $CodBarraProducto!='' && $IdLaboratorio!='' && $IdPresentacion!='' && $IdCategoria!='' && $CantidadProducto!='') {

      //  $Producto->set_InsertProducto();
      echo "Nombre: " . $NombreProducto ;
      echo "CodBarra: " . $CodBarraProducto ;
      echo "Lab: " . $IdLaboratorio ;
      echo "Present: " . $IdPresentacion ;
      echo "Cat: " . $IdCategoria ;
      echo "Cant: " . $CantidadProducto ;


      }

    }elseif ($Formulario=='modificar') {


    }

}
?>
