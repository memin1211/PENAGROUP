<?php
/**
 *
 */
 class models_Empleado
   {

      private $db;
      private $Empleado;

      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Empleado=array();
      }

      public function get_Empleado(){
       $consulta=$this->db->query("SELECT A.Id, A.Primer_Nombre, A.Segundo_Nombre, A.Tercer_Nombre, A.Primer_Apellido, A.Segundo_Apellido,A.Genero, B.Nombre, D.Valor FROM erp_empleado A INNER JOIN erp_estado_civil B ON (B.Id=A.Id_Estado_Civil) INNER JOIN erp_usuario C ON (C.Id_Usuario=A.Id AND C.Tipo_Usuario='Empleado') INNER JOIN erp_detalle_contacto D ON (D.Id_Usuario=C.Id) WHERE D.Id_Contacto=7");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Empleado[]=$a;
       }
       return $this->Empleado;
     }

   }

 ?>
