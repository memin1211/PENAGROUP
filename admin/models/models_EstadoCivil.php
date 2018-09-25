<?php
/**
 *
 */
 class models_EstadoCivil
   {

      private $db;
      private $EstadoCivil;


      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->EstadoCivil=array();
      }

      public function get_EstadoCivil(){
       $consulta=$this->db->query("SELECT Id, Nombre, Descripcion FROM erp_estado_civil");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->EstadoCivil[]=$a;
       }
       return $this->EstadoCivil;
     }

   }

 ?>
