<?php
  require_once("../models/models_Cliente.php");
  require_once("../models/models_EstadoCivil.php");
  $Cliente=new models_Cliente();
  $EstadoCivil=new models_EstadoCivil();
  $MatrizCliente=$Cliente->get_Cliente();
  $MatrizTipoCliente=$Cliente->get_TipoCliente();
  $MatrizEstadosCliente=$Cliente->get_EstadosCliente();
  $MatrizEstadoCivil=$EstadoCivil->get_EstadoCivil();

  //Evalusmos que los Datos ha recibir sean enviado mediante jquery
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //Variable que contiene la accion a realizar Nuevo o Modificar
    $Formulario=isset($_POST['Formulario']) ? $_POST['Formulario']:NULL;

    //Recibimos los Valores de los Formulario de Cliente
    $IdCliente=isset($_POST['IdCliente']) ? $_POST['IdCliente']:NULL;
    $F_Creacion=isset($_POST['F_Creacion']) ? $_POST['F_Creacion']:NULL;
    $Primer_Nombre=ucwords(strtolower($_POST['PrimerNombreCliente']));
    $Segundo_Nombre=ucwords(strtolower($_POST['SegundoNombreCliente']));
    $Tercer_Nombre=ucwords(strtolower($_POST['TercerNombreCliente']));
    $Primer_Apellido=ucwords(strtolower($_POST['PrimerApellidoCliente']));
    $Segundo_Apellido=ucwords(strtolower($_POST['SegundoApellidoCliente']));
    $Fecha_Nacimiento=isset($_POST['FechaNacimientoCliente']) ? $_POST['FechaNacimientoCliente']:NULL;
    $Id_Estado_Civil=isset($_POST['EstadoCivilCliente']) ? $_POST['EstadoCivilCliente']:NULL;
    $Genero=isset($_POST['GeneroCliente']) ? $_POST['GeneroCliente']:NULL;
    $Direccion=ucwords(strtolower($_POST['DireccionCliente']));
    $Telefono=isset($_POST['TelefonoCliente']) ? $_POST['TelefonoCliente']:NULL;
    $Empresa=ucwords(strtolower($_POST['EmpresaCliente']));
    $Giro=ucwords(strtolower($_POST['GiroCliente']));
    $Nit=isset($_POST['NitCliente']) ? $_POST['NitCliente']:NULL;
    $Nrc=isset($_POST['NrcCliente']) ? $_POST['NrcCliente']:NULL;
    $Id_Tipo_Cliente=isset($_POST['IdTipoCliente']) ? $_POST['IdTipoCliente']:NULL;

    $Id_Estado=isset($_POST['Estado']) ? $_POST['Estado']:NULL;

    //Evalusmos accion a realizar
    if ($Formulario=='nuevo') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($Primer_Nombre!='' && $Primer_Apellido!='' && $Segundo_Apellido!='' && $Fecha_Nacimiento!='' && $Direccion!='' && $Id_Estado_Civil!='') {

        $Cliente->set_InsertCliente($Primer_Nombre, $Segundo_Nombre, $Tercer_Nombre, $Primer_Apellido, $Segundo_Apellido, $Fecha_Nacimiento, $Id_Estado_Civil, $Genero, $Direccion, $Telefono, $Empresa, $Giro, $Nit, $Nrc, $Id_Tipo_Cliente, $F_Creacion);

      }

    }elseif ($Formulario=='modificar') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($Primer_Nombre!='' && $Primer_Apellido!='' && $Segundo_Apellido!='' && $Fecha_Nacimiento!='' && $Direccion!='' && $Id_Estado_Civil!='' && $Id_Estado!='' && $IdCliente!='') {

        $Cliente->set_UpdateCliente($Primer_Nombre, $Segundo_Nombre, $Tercer_Nombre, $Primer_Apellido, $Segundo_Apellido, $Fecha_Nacimiento, $Id_Estado_Civil, $Genero, $Direccion, $Telefono, $Empresa, $Giro, $Nit, $Nrc, $Id_Tipo_Cliente, $Id_Estado, $IdCliente);

     }else {
        echo "Datos Nulos";
        echo "Primer Nombre: ".$Primer_Nombre;
        echo "Segundo Nombre: ".$Segundo_Nombre;
        echo "Tercer Nombre: ".$Tercer_Nombre;
        echo "Primer Apellido: ".$Primer_Apellido;
        echo "Segundo Nombre: ".$Segundo_Apellido;
        echo "Fecha Nacimiento: ".$Fecha_Nacimiento;
        echo "Id Estado Civil: ".$Id_Estado_Civil;
        echo "Genero: ".$Genero;
        echo "Direccion: ".$Direccion;
        echo "Telefono: ".$Telefono;
        echo "Empresa: ".$Empresa;
        echo "Giro: ".$Giro;
        echo "Nit: ".$Nit;
        echo "Nrc: ".$Nrc;
        echo "Id Tipo Client: ".$Id_Tipo_Cliente;
        echo "Id Estado: ".$Id_Estado;
        echo "Id Cliente: ".$IdCliente;
        }

    }

}
?>
