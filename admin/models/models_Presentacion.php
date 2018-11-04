<?php
/**
 *
 */
 class models_Presentacion
   {

     //Creamos las Variables a utilizar para retornar valores o resultados
      private $db;
      private $IdPresentacion;
      private $Presentacion;
      private $Abreviatura;
      private $Id_Unidad_Medida;

      //Creeamos el Contrusctor de la Clase, Incluimos la Conexino e Instanciamos la Conexion y luego Inicializamos las Variables como Array
      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Presentacion=array();
        $this->Abreviatura=array();
        $this->Id_Unidad_Medida=array();
      }

      //Funcion que Retornara todos las Presentaciones de la Base de Datos
      public function get_Presentacion(){
       $consulta=$this->db->query("SELECT A.Id, CONCAT(A.Presentacion , ' ', B.Nombre) AS Presentacion, A.Abreviatura, B.Nombre AS Unidad_Medida, B.Unidad FROM erp_presentacion A INNER JOIN erp_unidad_medida B ON (A.Id_Unidad_Medida = B.Id)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Presentacion[]=$a;
       }
       return $this->Presentacion;
     }

    //Funcion que Insertara los datos de un nuevo Presentacion
     public function set_InsertPresentacion($NombrePresentacion, $AbreviaturaPresentacion, $IdUnidadMedida){
       $consulta=$this->db->query("INSERT INTO erp_presentacion(Presentacion,Abreviatura,Id_Unidad_Medida) VALUES('$NombrePresentacion', '$AbreviaturaPresentacion', '$IdUnidadMedida')");
     }

     //Funcion que Actualizara los datos de un Presentacion
     public function set_UpdatePresentacion($NombrePresentacion, $AbreviaturaPresentacion, $IdUnidadMedida, $IdPresentacion){
       $consulta=$this->db->query("UPDATE erp_presentacion SET Presentacion='$NombrePresentacion',Abreviatura='$AbreviaturaPresentacion', Id_Unidad_Medida='$IdUnidadMedida' WHERE Id=$IdPresentacion");
     }

   }

 ?>
