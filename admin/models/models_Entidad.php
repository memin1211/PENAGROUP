<?php
/**
 *
 */
 class models_Entidad
{
     //Creamos las Variables a utilizar para retornar valores o resultados
      private $db;
      private $IdEntidad;
      private $NombreEntidad;
      private $DescripcionEntidad;
      
      //Creeamos el Contrusctor de la Clase, Incluimos la Conexino e Instanciamos la Conexion y luego Inicializamos las Variables como Array
      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->IdEntidad=array();
        $this->NombreEntidad=array();
        $this->DescripcionEntidad=array();
      }

      //Funcion que Retornara todos las Entidades de la Base de Datos
      public function get_Entidad(){
       $consulta=$this->db->query("SELECT Id, Nombre AS Entidad, Descripcion FROM erp_entidad");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Entidad[]=$a;
       }
       return $this->Entidad;
     }

    //Funcion que Insertara los datos de un nuevo Entidad
     public function set_InsertEntidad($NombreEntidad, $DescripcionEntidad){
       $consulta=$this->db->query("INSERT INTO erp_entidad(Nombre, Descripcion) VALUES('$NombreEntidad', '$DescripcionEntidad')");
     }

     //Funcion que Actualizara los datos de un Entidad
     public function set_UpdateEntidad($NombreEntidad, $DescripcionEntidad, $IdEntidad){
       $consulta=$this->db->query("UPDATE erp_entidad SET Nombre='$NombreEntidad', Descripcion='$DescripcionEntidad' WHERE Id=$IdEntidad");
     }

   }

 ?>
