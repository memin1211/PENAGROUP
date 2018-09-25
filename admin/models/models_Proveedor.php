<?php
/**
 *
 */
 class models_Proveedor
   {

     //Creamos las Variables a utilizar para retornar valores o resultados
      private $db;
      private $Proveedor;
      private $EstadoProveedor;

      //Creeamos el Constructor de la Clase, Incluimos la Conexino e Instanciamos la Conexion y luego Inicializamos las Variables como Array
      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Proveedor=array();
        $this->EstadoProveedor=array();
      }

      //Funcion que Retornara todos los Provedores de la Base de Datos
      public function get_Proveedor(){
       $consulta=$this->db->query("SELECT A.Id, A.Nombre, A.Direccion, A.Telefono_Fijo, B.Nombre as Municipio, C.Codigo_Cuenta, E.Nombre as Estado  FROM erp_proveedor A INNER JOIN erp_municipio B ON (B.Id=A.Id_Municipio) INNER JOIN erp_cuenta_proveedor C ON (C.Id=A.Id_Cuenta_Proveedor) INNER JOIN erp_estado E ON (E.Id=A.Id_Estado)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Proveedor[]=$a;
       }
       return $this->Proveedor;
     }

     //Funcion que Retornara todos los Estados que esten asignados a la Entidad Proveedor
     public function get_EstadoProveedor(){
      $consulta=$this->db->query("SELECT DISTINCT A.Id, A.Nombre FROM erp_estado A INNER JOIN erp_tipo_entidad B ON (B.Id_Estado=A.Id) INNER JOIN erp_entidad C ON (C.Id=B.Id_Entidad) INNER JOIN erp_proveedor D ON (D.Id_Entidad=C.Id)");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->EstadoProveedor[]=$a;
      }
      return $this->EstadoProveedor;
    }

    //Funcion que Insertara los datos de un nuevo Proveedor
     public function set_InsertProveedor($NombreProveedor, $DireccionProveedor, $TelefonoProveedor, $CelularProveedor, $CorreoProveedor, $GiroProveedor, $IdMunicipio, $F_Creacion){
        $LetraExtraida=strtoupper($NombreProveedor[0]);
        $Longitud=10;

       $Fecha=date('Y-d-m', strtotime($F_Creacion));
       $db1=mysqli_connect('localhost','id5392174_mpena','P@100514','id5392174_penagroup_erpdev');

       //Seleccionadmos un array de todos los ID de las cuentas en la BD
       $sql0 = "SELECT Id FROM erp_cuenta_proveedor";
       $rs0=mysqli_query($db1, $sql0) or die(mysqli_error($db1));
       while ($s=mysqli_fetch_assoc($rs0)) {
          $IdCuenta[]=$s['Id'];
       }
       mysqli_free_result($rs0);

       $Cod_Cta=$LetraExtraida.str_pad(count($IdCuenta), $Longitud-1, "0", STR_PAD_LEFT);

       //Creamos Cuenta
       $sql = "INSERT INTO erp_cuenta_proveedor(Fecha_Apertura, Codigo_Cuenta) VALUES('$Fecha','$Cod_Cta')";
       $rs=mysqli_query($db1, $sql) or die(mysqli_error($db1));

       //Seleccionadmos el ID de la cuenta creada
       $sql2 = "SELECT Id FROM erp_cuenta_proveedor WHERE Codigo_Cuenta='$Cod_Cta'";
       $rs2=mysqli_query($db1, $sql2) or die(mysqli_error($db1));
       while ($r=mysqli_fetch_assoc($rs2)) {
          $Id_Cuenta_Proveedor=$r['Id'];
       }
       mysqli_free_result($rs2);

       $sql3 = "INSERT INTO erp_proveedor(Nombre, Direccion, Telefono_Fijo, Telefono_Celular, Correo_Electronico, Giro, Id_Municipio, Id_Cuenta_Proveedor, Id_Entidad, Id_Estado) VALUES ('$NombreProveedor','$DireccionProveedor','$TelefonoProveedor','$CelularProveedor','$CorreoProveedor','$GiroProveedor', $IdMunicipio, $Id_Cuenta_Proveedor, 2, 1)";
       $rs3=mysqli_query($db1, $sql3) or die(mysqli_error($db1));
       mysqli_close($db1);

     }

     //Funcion que Actualizara los datos de un Proveedor
     public function set_UpdateProveedor($Nombre_Laboratorio, $AbreviaturaLaboratorio, $NombreLegalLaboratorio, $Id_Estado){
       //$consulta=$this->db->query("UPDATE erp_laboratorio SET Nombre='$Nombre_Laboratorio',Nombre_Legal='$NombreLegalLaboratorio',Abreviatura='$AbreviaturaLaboratorio', Id_Estado=$Id_Estado");
     }

   }

 ?>
