<?php
/**
 *
 */
 class models_Sucursal
   {

      private $db;
      private $Sucursales;
      private $Buscar;

      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Sucursales=array();
        $this->Buscar=array();
      }

      public function get_Sucursales(){
       $consulta=$this->db->query("SELECT A.Id, A.Nombre, A.Nombre_Corto, A.Direccion, A.Telefono, B.Nombre AS Municipio, C.Nombre AS Estado FROM erp_sucursal A
         INNER JOIN erp_municipio B ON (B.Id=A.Id_Municipio)
         INNER JOIN erp_estado C ON (C.Id=A.Id_Estado)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Sucursales[]=$a;
       }
       return $this->Sucursales;
     }

     public function get_BuscarSucursal($BuscarId){
      $consulta=$this->db->query("SELECT Nombre, Nombre_Corto, Direccion, Telefono FROM erp_sucursal WHERE Id=$BuscarId");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->Buscar[]=$a;
      }
      return $this->Buscar;
    }

     public function set_InsertSucursal($Nombre, $NombreCorto, $Telefono, $Direccion, $Id_Municipio, $Id_Encargado){
      $consulta=$this->db->query("INSERT INTO erp_sucursal(Nombre, Nombre_Corto, Telefono, Direccion, Logo, Id_Municipio, Id_Empleado_Encargado, Id_Entidad, Id_Estado) VALUES ('$Nombre','$NombreCorto','$Telefono','$Direccion','$Nombre_Imagen',$Id_Municipio,$Id_Encargado,13,1)");
    }

    public function set_UpdateSucursal($Nombre, $NombreCorto, $Telefono, $Direccion, $IdSucursal){
     $consulta=$this->db->query("UPDATE erp_sucursal SET Nombre='$Nombre', Nombre_Corto='$NombreCorto', Telefono='$Telefono', Direccion='$Direccion' WHERE Id=$IdSucursal");
   }
}
