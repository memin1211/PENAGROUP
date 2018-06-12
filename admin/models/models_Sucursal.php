<?php
/**
 *
 */
 class models_Sucursal
   {

      private $db;
      private $Sucursales;

      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Sucursales=array();
      }

      public function get_Sucursales(){
       $consulta=$this->db->query("SELECT A.Id, A.Nombre, A.Direccion, A.Telefono, B.Nombre AS Municipio FROM erp_sucursal A INNER JOIN erp_municipio B ON (B.Id=A.Id_Municipio)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Sucursales[]=$a;
       }
       return $this->Sucursales;
     }

   }

 ?>
