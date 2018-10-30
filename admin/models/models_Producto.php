<?php
/**
 *
 */
 class models_Producto
   {

      private $db;
      private $Presentacion;
      private $Categoria;
      private $Producto;

      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Presentacion=array();
        $this->Categoria=array();
        $this->Producto=array();
      }

      public function get_Presentacion(){
       $consulta=$this->db->query("SELECT A.Id, A.Presentacion, B.Nombre FROM erp_presentacion A INNER JOIN erp_unidad_medida B ON (A.Id_Unidad_Medida=B.Id)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Presentacion[]=$a;
       }
       return $this->Presentacion;
     }

     public function get_Categoria(){
      $consulta=$this->db->query("SELECT Id, Nombre FROM erp_categoria");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->Categoria[]=$a;
      }
      return $this->Categoria;
    }

    public function get_Producto(){
    //  $Id_Sucursal=$_GET['Id_Sucursal'];
      $Id_Sucursal=1;
     $consulta=$this->db->query("SELECT E.Id, E.Codigo_Barra, E.Nombre AS Producto, H.Abreviatura AS Laboratorio, I.Nombre AS Categoria, F.Presentacion AS Presentacion, D.Fecha_Vencimiento, A.Existencia, A.Costo_Unidad, K.Precio_Unidad, J.Nombre_Corto FROM erp_kardex A
INNER JOIN erp_lote D
INNER JOIN erp_transaccion_kardex B ON (A.Id=B.Id_Kardex)
INNER JOIN erp_lote_kardex C ON (C.Id_Kardex=A.Id AND C.Id_Lote=D.Id)
INNER JOIN erp_producto E ON (E.Id=A.Id_Producto)
INNER JOIN erp_presentacion F ON (F.Id=E.Id_Presentacion)
INNER JOIN erp_unidad_medida G ON (F.Id=G.Id)
INNER JOIN erp_laboratorio H ON (H.Id=E.Id_Laboratorio)
INNER JOIN erp_categoria I ON (I.Id=E.Id_Categoria)
INNER JOIN erp_sucursal J ON (J.Id=A.Id_Sucursal)
INNER JOIN erp_detalle_precio K ON (K.Id_Sucursal=J.Id) WHERE J.Id=$Id_Sucursal");
     while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
       $this->Producto[]=$a;
     }
     return $this->Producto;
   }

   }

 ?>
