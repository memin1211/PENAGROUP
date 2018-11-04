<?php
  //Incluimos el Modelos correspondiente
  require_once("../models/models_Producto.php");
  
  $cProducto = new models_Producto();

  require_once("../models/models_Laboratorio.php");
  $Laboratorio=new models_Laboratorio();
  $MatrizLaboratorio=$Laboratorio->get_Laboratorio();
  

  require_once("../models/models_Presentacion.php");
  $Presentacion=new models_Presentacion();
  $MatrizPresentacion=$Presentacion->get_Presentacion();
  

  require_once("../models/models_Categoria.php");
  $Categoria=new models_Categoria();
  $MatrizCategoria=$Categoria->get_Categoria();
  

  require_once("../models/models_Entidad.php");
  $Entidad=new models_Entidad();
  $MatrizEntidad=$Entidad->get_Entidad();
  

  require_once("../models/models_Estado.php");
  $Estado=new models_Estado();
  $MatrizEstado=$Estado->get_Estado();

  //Evalusmos que los Datos ha recibir sean enviado mediante jquery
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //Variable que contiene la accion a realizar Nuevo o Modificar
    $Formulario=isset($_POST['Formulario']) ? $_POST['Formulario']:NULL;

    //Recibimos los Valores de los Formulario de Nuevo Producto
    $CodigoBarraProducto=ucwords(strtolower($_POST['CodigoBarraProducto']));
    $NombreProducto=ucwords(strtolower($_POST['NombreProducto']));
    $Id_Laboratorio=isset($_POST['Id_Laboratorio']) ? $_POST['Id_Laboratorio']:NULL;
    $Id_Presentacion=isset($_POST['Id_Presentacion']) ? $_POST['Id_Presentacion']:NULL;
    $Id_Categoria=isset($_POST['Id_Categoria']) ? $_POST['Id_Categoria']:NULL;
    $Id_Entidad=isset($_POST['Id_Entidad']) ? $_POST['Id_Entidad']:NULL;
    $Id_Estado=isset($_POST['Id_Estado']) ? $_POST['Id_Estado']:NULL;

    //Evalusmos accion a realizar
    if ($Formulario=='nuevo') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($CodigoBarraProducto!='' && $NombreProducto!='' && $Id_Laboratorio!='' && $Id_Presentacion!='' && $Id_Categoria!='' && $Id_Entidad!='' && $Id_Estado!='') {
        $cProducto->set_InsertProducto($CodigoBarraProducto, $NombreProducto, $Id_Laboratorio, $Id_Presentacion, $Id_Categoria, $Id_Entidad, $Id_Estado);
      }

    }elseif ($Formulario=='modificar') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($CodigoBarraProducto!='' && $NombreProducto!='' && $Id_Laboratorio!='' && $Id_Presentacion!='' && $Id_Categoria!='' && $Id_Entidad!='' && $Id_Estado!='') {
        $cProducto->set_UpdateProducto($CodigoBarraProducto, $NombreProducto, $Id_Laboratorio, $Id_Presentacion, $Id_Categoria, $Id_Entidad, $Id_Estado);
      }else {
        echo "Datos Nulos <br>";
        echo "Codigo Barra: ".$CodigoBarraProducto;
        echo "Nombre: ".$NombreProducto;
        echo "Laboratorio: ".$Id_Laboratorio;
        echo "Presentacion: ".$Id_Presentacion;
        echo "Categoria: ".$Id_Categoria;
        echo "Entidad: ".$Id_Entidad;
        echo "Estado: ".$Id_Estado;
     }

    }



}
?>
