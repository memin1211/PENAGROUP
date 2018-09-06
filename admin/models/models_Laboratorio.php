<?php
/**
 *
 */
 class models_Laboratorio
   {

     //Creamos las Variables a utilizar para retornar valores o resultados
      private $db;
      private $Laboratorio;
      private $EstadoLaboratorio;

      //Creeamos el Contrusctor de la Clase, Incluimos la Conexino e Instanciamos la Conexion y luego Inicializamos las Variables como Array
      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Laboratorio=array();
        $this->EstadoLaboratorio=array();
      }

      //Funcion que Retornara todos los Laboratorios de la Base de Datos
      public function get_Laboratorio(){
       $consulta=$this->db->query("SELECT A.Id,A.Nombre,A.Nombre_Legal,A.Abreviatura,B.Nombre AS Estado FROM erp_laboratorio A INNER JOIN erp_estado B ON (B.Id=A.Id_Estado)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Laboratorio[]=$a;
       }
       return $this->Laboratorio;
     }

     //Funcion que Retornara todos los Estados que esten asignados a la Entidad Laboratorio
     public function get_EstadoLaboratorio(){
      $consulta=$this->db->query("SELECT DISTINCT A.Id, A.Nombre FROM erp_estado A INNER JOIN erp_tipo_entidad B ON (B.Id_Estado=A.Id) INNER JOIN erp_entidad C ON (C.Id=B.Id_Entidad) INNER JOIN erp_laboratorio D ON (D.Id_Entidad=C.Id)");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->EstadoLaboratorio[]=$a;
      }
      return $this->EstadoLaboratorio;
    }

    //Funcion que Insertara los datos de un nuevo Laboratorio
     public function set_InsertLaboratorio($Nombre_Laboratorio, $AbreviaturaLaboratorio, $NombreLegalLaboratorio){
       $consulta=$this->db->query("INSERT INTO erp_laboratorio(Nombre,Nombre_Legal,Abreviatura,Id_Entidad, Id_Estado) VALUES('$Nombre_Laboratorio', '$NombreLegalLaboratorio', '$AbreviaturaLaboratorio', 4, 1)");
     }

     //Funcion que Actualizara los datos de un Laboratorio
     public function set_UpdateLaboratorio($Nombre_Laboratorio, $NombreLegalLaboratorio, $AbreviaturaLaboratorio, $Id_Estado, $IdLaboratorio){
       $consulta=$this->db->query("UPDATE erp_laboratorio SET Nombre='$Nombre_Laboratorio',Nombre_Legal='$NombreLegalLaboratorio',Abreviatura='$AbreviaturaLaboratorio', Id_Estado=$Id_Estado WHERE Id=$IdLaboratorio");
     }

   }

 ?>
