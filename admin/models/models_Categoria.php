<?php
/**
 *
 */
 class models_Categoria 
 {

     //Creamos las Variables a utilizar para retornar valores o resultados
      private $db;
      private $IdCategoria;
      private $NoombreCategoria;
      
      //Creeamos el Contrusctor de la Clase, Incluimos la Conexino e Instanciamos la Conexion y luego Inicializamos las Variables como Array
      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->IdCategoria=array();
        $this->NoombreCategoria=array();
      }

      //Funcion que Retornara todos las Presentaciones de la Base de Datos
      public function get_Categoria(){
       $consulta=$this->db->query("SELECT Id, Nombre AS Categoria FROM erp_categoria");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Categoria[]=$a;
       }
       return $this->Categoria;
     }

    //Funcion que Insertara los datos de un nuevo Laboratorio
     public function set_InsertPresentacion($NoombreCategoria){
       $consulta=$this->db->query("INSERT INTO erp_categoria(Nombre) VALUES('$NoombreCategoria')");
     }

     //Funcion que Actualizara los datos de un Laboratorio
     public function set_UpdatePresentacion($NoombreCategoria, $IdCategoria){
       $consulta=$this->db->query("UPDATE erp_categoria SET Nombre='$NoombreCategoria' WHERE Id=$IdCategoria");
     }

   }

 ?>
