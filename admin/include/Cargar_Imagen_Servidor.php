<?php
  //Recibimos los datos de la Imagen
  $Nombre_Imagen=$_FILES['imagen']['name'];
  $Tipo_Imagen=$_FILES['imagen']['type'];
  $Tamaño_Imagen=$_FILES['imagen']['size'];

  //Evaluando Tamaño del Archivo
  if ($Tamaño_Imagen<=1000000) {

    //Evaluando el Tipo del Archivo sea PNG
    if ($Tipo_Imagen=="image/png") {

      //Ruta de la Carpeta de Destino en el Servidor
      $Carpeta_Destino=$_SERVER['DOCUMENT_ROOT'].'PENAGROUP/admin/assets/img/';

      //Movemos la Imagen del Directorio temporal al Directorio Escogido
      move_uploaded_file($_FILES['imagen']['tmp_name'],$Carpeta_Destino.$Nombre_Imagen);

    }else {

      echo "El Tipo de Imagen tiene que ser PNG.";

    }

  }else {

    echo "Archivo Demasiado Grande. Se recomienda 1Mb";

  }

  //Insertando Nombre de la Imagen en la Base de Datos
  //$sql="UPDATE erp_sucursal SET Logo='$Nombre_Imagen' WHERE Id=// XXX: ";
?>
