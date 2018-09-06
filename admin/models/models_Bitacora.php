<?php
/**
 *
 */
 class models_Bitacora
   {

      private $db;
      private $Bitacora;

      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Bitacora=array();
      }

      public function get_Bitacora(){
       $consulta=$this->db->query("SELECT A.Descripcion,A.Hora_Registro,A.Fecha_Registro,C.Primer_Nombre,C.Primer_Apellido FROM erp_bitacora A INNER JOIN erp_usuario B ON (B.Id=A.Id_Usuario) INNER JOIN erp_empleado C ON (C.Id=B.Id_Usuario)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Bitacora[]=$a;
       }
       return $this->Bitacora;
     }

   }

 ?>
