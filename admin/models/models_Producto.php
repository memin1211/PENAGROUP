<?php
/**
 *
 */
 class models_Producto
   {

      private $dbProducto;
      private $idProducto;
      private $CodBarraProducto;
      private $NombreProducto;
      private $IdLaboratorio;
      private $IdPresentacion;
      private $IdCategoria;
      private $IdEntidad;
      private $IdEstado;

      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->dbProducto=Conectar::conexion(); // esta dando error en el view
        //$this->CodBarraProducto=array();
        //$this->NombreProducto=array();
      }

    /*
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
*/
 /*   public function get_Producto(){
      $Id_Sucursal=$_GET['Id_Sucursal'];
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
   */

   //Funcion que Insertara los datos de un nuevo Producto
     public function set_InsertProducto($CodigoBarraProducto,$NombreProducto,$IdLaboratorio,$IdPresentacion,$IdCategoria,$IdEntidad,$IdEstado){
       $consulta=$this->db->query("INSERT INTO erp_producto(Codigo_Barra,Nombre,Id_Laboratorio,Id_Presentacion,Id_Categoria,Id_Entidad,Id_Estado) VALUES('$CodigoBarraProducto','$NombreProducto','$IdLaboratorio','$IdPresentacion','$IdCategoria','$IdEntidad','$IdEstado',)");
     }

     //Funcion que Actualizara los datos de un Producto
     public function set_UpdateProducto($CodigoBarraProducto,$NombreProducto,$IdLaboratorio,$IdPresentacion,$IdCategoria,$IdEntidad,$IdEstado,$idProducto){
       $consulta=$this->db->query("UPDATE erp_producto SET Codigo_Barra='$CodigoBarraProducto',Nombre='$NombreProducto',Id_Laboratorio='$IdLaboratorio',Id_Presentacion=$IdPresentacion,Id_Categoria=$IdCategoria,Id_Entidad=$IdEntidad,IdEstado=$Id_Estado WHERE Id=$idProducto");
     }

   }

 ?>
