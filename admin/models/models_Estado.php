<?php
/**
 *
 */
 class models_Estado
{
     //Creamos las Variables a utilizar para retornar valores o resultados
      private $db;
      private $IdEstado;
      private $NombreEstado;
      private $DescripcionEstado;
      
      //Creeamos el Contrusctor de la Clase, Incluimos la Conexino e Instanciamos la Conexion y luego Inicializamos las Variables como Array
      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->IdEstado=array();
        $this->NombreEstado=array();
        $this->DescripcionEstado=array();
      }

      //Funcion que Retornara todos los Estado de la Base de Datos
      public function get_Estado(){
       $consulta=$this->db->query("SELECT Id, Nombre AS Estado, Descripcion FROM erp_estado");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Estado[]=$a;
       }
       return $this->Estado;
     }

    //Funcion que Insertara los datos de un nuevo Estado
     public function set_InsertEstado($NombreEstado, $DescripcionEstado){
       $consulta=$this->db->query("INSERT INTO erp_estado (Nombre, Descripcion) VALUES('$NombreEstado', '$DescripcionEstado')");
     }

     //Funcion que Actualizara los datos de un Estado
     public function set_UpdateEstado($NombreEstado, $DescripcionEstado, $IdEstado){
       $consulta=$this->db->query("UPDATE erp_estado SET Nombre='$NombreEstado', Descripcion='$DescripcionEstado' WHERE Id=$IdEstado");
     }

   }

 ?>
