<?php
/**
 *
 */
 class models_Empleado
   {

      private $db;
      private $Empleado;
      private $EstadoEmpleado;

      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Empleado=array();
        $this->EstadoEmpleado=array();
      }

      public function get_Empleado(){
       $consulta=$this->db->query("SELECT A.Id, A.Primer_Nombre, A.Segundo_Nombre, A.Primer_Apellido, A.Segundo_Apellido, A.Genero, A.Telefono_Celular, A.Direccion, A.Nit, D.Nombre AS Estado FROM erp_empleado A INNER JOIN erp_estado D ON (D.Id=A.Id_Estado)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Empleado[]=$a;
       }
       return $this->Empleado;
     }

     public function get_Estado(){
      $consulta=$this->db->query("SELECT DISTINCT A.Id, A.Nombre FROM erp_estado A INNER JOIN erp_tipo_entidad B ON (B.Id_Estado=A.Id) INNER JOIN erp_entidad C ON (C.Id=B.Id_Entidad) INNER JOIN erp_empleado D ON (D.Id_Entidad=C.Id)");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->EstadoEmpleado[]=$a;
      }
      return $this->EstadoEmpleado;
    }

     public function set_InsertEmpleado($Primer_Nombre, $Segundo_Nombre, $Tercer_Nombre, $Primer_Apellido, $Segundo_Apellido, $Fecha_Nacimiento, $Id_Estado_Civil, $Genero, $Telefono_Fijo, $Telefono_Celular, $Direccion, $Nit, $Dui){
        $Fecha=date('Y-m-d', strtotime($Fecha_Nacimiento));
        $consulta=$this->db->query("INSERT INTO `erp_empleado`(`Primer_Nombre`, `Segundo_Nombre`, `Tercer_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Fecha_Nacimiento`, `Id_Estado_Civil`, `Genero`, `Telefono_Fijo`, `Telefono_Celular`, `Direccion`, `Nit`, `Dui`, `Id_Entidad`, `Id_Estado`) VALUES ('$Primer_Nombre','$Segundo_Nombre','$Tercer_Nombre','$Primer_Apellido','$Segundo_Apellido','$Fecha', $Id_Estado_Civil,'$Genero','$Telefono_Fijo','$Telefono_Celular','$Direccion','$Nit','$Dui',1,1)");
    }

    public function set_UpdateEmpleado($Primer_Nombre, $Segundo_Nombre, $Tercer_Nombre, $Primer_Apellido, $Segundo_Apellido, $Fecha_Nacimiento, $Id_Estado_Civil, $Genero, $Telefono_Fijo, $Telefono_Celular, $Direccion, $Nit, $Dui, $Id_Estado, $Id_Empleado){
      $Fecha=date('Y-m-d', strtotime($Fecha_Nacimiento));
      $consulta=$this->db->query("UPDATE `erp_empleado` SET `Primer_Nombre`='$Primer_Nombre',`Segundo_Nombre`='$Segundo_Nombre',`Tercer_Nombre`='$Tercer_Nombre',`Primer_Apellido`='$Primer_Apellido',`Segundo_Apellido`='$Segundo_Apellido',`Fecha_Nacimiento`='$Fecha',`Id_Estado_Civil`=$Id_Estado_Civil,`Genero`='$Genero',`Telefono_Fijo`='$Telefono_Fijo',`Telefono_Celular`='$Telefono_Celular',`Direccion`='$Direccion',`Nit`='$Nit',`Dui`='$Dui',`Id_Estado`=$Id_Estado WHERE `Id`=$Id_Empleado");
   }

   }

 ?>
