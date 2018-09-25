<?php
/**
 *
 */
 class models_Departamento
   {

      private $db;
      private $Departamento;
      private $Municipio;


      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Departamento=array();
        $this->Municipio=array();
      }

      public function get_Departamento(){
       $consulta=$this->db->query("SELECT Id, Nombre, Iso_Codigo FROM erp_departamento");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Departamento[]=$a;
       }
       return $this->Departamento;
     }

     public function get_Municipio(){
      $consulta=$this->db->query("SELECT Id, Nombre, Id_Departamento FROM erp_municipio");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->Municipio[]=$a;
      }
      return $this->Municipio;
    }

   }

 ?>
