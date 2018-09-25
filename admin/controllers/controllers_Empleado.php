<?php
  require_once("../models/models_Empleado.php");
  require_once("../models/models_EstadoCivil.php");
  $Empleado=new models_Empleado();
  $EstadoCicilEmpleado=new models_EstadoCivil();
  $MatrizEmpleado=$Empleado->get_Empleado();
  $MatrizEstadoEmpleado=$Empleado->get_Estado();
  $MatrizEstadoCivil=$EstadoCicilEmpleado->get_EstadoCivil();

  //Evalusmos que los Datos ha recibir sean enviado mediante jquery
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    //Variable que contiene la accion a realizar Nuevo o Modificar
    $Formulario=isset($_POST['Formulario']) ? $_POST['Formulario']:NULL;

    //Recibimos los Valores de los Formulario de Nuevo Laboratorio
    $Primer_Nombre=ucwords(strtolower($_POST['PrimerNombreEmpleado']));
    $Segundo_Nombre=ucwords(strtolower($_POST['SegundoNombreEmpleado']));
    $Tercer_Nombre=ucwords(strtolower($_POST['TercerNombreEmpleado']));
    $Primer_Apellido=ucwords(strtolower($_POST['PrimerApellidoEmpleado']));
    $Segundo_Apellido=ucwords(strtolower($_POST['SegundoApellidoEmpleado']));
    $Fecha_Nacimiento=$_POST['FechaNacimientoEmpleado'];
    $Id_Estado_Civil=isset($_POST['EstadoCivilEmpleado']) ? $_POST['EstadoCivilEmpleado']:NULL;
    $Genero=ucwords(strtolower($_POST['GeneroEmpleado']));
    $Telefono_Fijo=isset($_POST['TelefonoFijoEmpleado']) ? $_POST['TelefonoFijoEmpleado']:NULL;
    $Telefono_Celular=isset($_POST['CelularEmpleado']) ? $_POST['CelularEmpleado']:NULL;
    $Direccion=ucwords(strtolower($_POST['DireccionEmpleado']));
    $Nit=isset($_POST['NitEmpleado']) ? $_POST['NitEmpleado']:NULL;
    $Dui=isset($_POST['DuiEmpleado']) ? $_POST['DuiEmpleado']:NULL;

    $Id_Estado=isset($_POST['IdEstado']) ? $_POST['IdEstado']:NULL;
    $Id_Empleado=isset($_POST['IdEmpleado']) ? $_POST['IdEmpleado']:NULL;

    //Evalusmos accion a realizar
    if ($Formulario=='Nuevo') {

      //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
      if ($Primer_Nombre!='' && $Primer_Apellido!='' && $Segundo_Apellido!='' && $Id_Estado_Civil!='' && $Direccion!='') {

            //Ejecutamos la Funcion
            $Empleado->set_InsertEmpleado($Primer_Nombre, $Segundo_Nombre, $Tercer_Nombre, $Primer_Apellido, $Segundo_Apellido, $Fecha_Nacimiento, $Id_Estado_Civil, $Genero, $Telefono_Fijo, $Telefono_Celular, $Direccion, $Nit, $Dui);

      }
    }elseif ($Formulario=='Modificar') {

            //Evalusmoa que los valores a ser enviados no esten Vacios o Nulos
            if ($Primer_Nombre!='' && $Primer_Apellido!='' && $Segundo_Apellido!='' && $Id_Estado_Civil!='' && $Direccion!=''  && $Id_Estado!=''  && $Id_Empleado!='') {

                  //Ejecutamos la Funcion
                  $Empleado->set_UpdateEmpleado($Primer_Nombre, $Segundo_Nombre, $Tercer_Nombre, $Primer_Apellido, $Segundo_Apellido, $Fecha_Nacimiento, $Id_Estado_Civil, $Genero, $Telefono_Fijo, $Telefono_Celular, $Direccion, $Nit, $Dui, $Id_Estado, $Id_Empleado);

            }else {
               echo "Datos Nulos";
            }
    }
}
?>
