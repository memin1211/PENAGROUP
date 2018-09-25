<?php

/**
 *
 */
 class models_Cliente
   {

      private $db;
      private $Cliente;
      private $TipoCliente;
      private $EstadosCliente;

      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Cliente=array();
        $this->TipoCliente=array();
        $this->EstadosCliente=array();
      }

      public function get_Cliente(){
       $consulta=$this->db->query("SELECT A.Id, A.Primer_Nombre, A.Segundo_Nombre, A.Primer_Apellido, A.Segundo_Apellido, A.Direccion, A.Nit,A.Nrc, B.Nombre, C.Codigo_Cuenta, D.Nombre AS Estado FROM erp_cliente A
         INNER JOIN erp_tipo_cliente B ON (B.Id=A.Id_Tipo_Cliente)
         INNER JOIN erp_cuenta_cliente C ON (C.Id=A.Id_Cuenta_Cliente)
         INNER JOIN erp_estado D ON (D.Id=A.Id_Estado)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Cliente[]=$a;
       }
       return $this->Cliente;
     }

     public function get_EstadosCliente(){
      $consulta=$this->db->query("SELECT DISTINCT A.Id, A.Nombre FROM erp_estado A INNER JOIN erp_tipo_entidad B ON (B.Id_Estado=A.Id) INNER JOIN erp_entidad C ON (C.Id=B.Id_Entidad) INNER JOIN erp_cliente D ON (D.Id_Entidad=C.Id)");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->EstadosCliente[]=$a;
      }
      return $this->EstadosCliente;
    }

     public function get_TipoCliente(){
      $consulta=$this->db->query("SELECT Id, Nombre, Descripcion, Descuento_Otorgado FROM erp_tipo_cliente");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->TipoCliente[]=$a;
      }
      return $this->TipoCliente;
    }

    public function set_InsertCliente($Primer_Nombre, $Segundo_Nombre, $Tercer_Nombre, $Primer_Apellido, $Segundo_Apellido, $Fecha_Nacimiento, $Id_Estado_Civil, $Genero, $Direccion, $Telefono, $Empresa, $Giro, $Nit, $Nrc, $Id_Tipo_Cliente, $F_Creacion){
      $LetraExtraida1=strtoupper($Primer_Apellido[0]);
      $LetraExtraida2=strtoupper($Segundo_Apellido[0]);
      $Longitud=10;

      $Fecha=date('Y-d-m', strtotime($F_Creacion));
      $FechaNac=date('Y-m-d', strtotime($Fecha_Nacimiento));
      $db1=mysqli_connect('localhost','id5392174_mpena','P@100514','id5392174_penagroup_erpdev');

      //Seleccionadmos un array de todos los ID de las cuentas en la BD
      $sql0 = "SELECT Id FROM erp_cuenta_cliente";
      $rs0=mysqli_query($db1, $sql0) or die(mysqli_error($db1));
      while ($s=mysqli_fetch_assoc($rs0)) {
         $IdCuenta[]=$s['Id'];
      }
      mysqli_free_result($rs0);

      $Cod_Cta=$LetraExtraida1.$LetraExtraida2.str_pad(count($IdCuenta), $Longitud-2, "0", STR_PAD_LEFT);

      //Creamos Cuenta
      $sql = "INSERT INTO erp_cuenta_cliente(Fecha_Apertura, Codigo_Cuenta) VALUES('$Fecha','$Cod_Cta')";
      $rs=mysqli_query($db1, $sql) or die(mysqli_error($db1));

      //Seleccionadmos el ID de la cuenta creada
      $sql2 = "SELECT Id FROM erp_cuenta_cliente WHERE Codigo_Cuenta='$Cod_Cta'";
      $rs2=mysqli_query($db1, $sql2) or die(mysqli_error($db1));
      while ($r=mysqli_fetch_assoc($rs2)) {
         $Id_Cuenta_Cliente=$r['Id'];
      }
      mysqli_free_result($rs2);

      $sql3 = "INSERT INTO erp_cliente(Primer_Nombre, Segundo_Nombre, Tercer_Nombre, Primer_Apellido, Segundo_Apellido, Fecha_Nacimiento, Id_Estado_Civil, Genero, Direccion, Telefono, Empresa, Giro, Nit, Nrc, Id_Tipo_Cliente, Id_Cuenta_Cliente, Id_Entidad, Id_Estado)
      VALUES ('$Primer_Nombre','$Segundo_Nombre','$Tercer_Nombre','$Primer_Apellido','$Segundo_Apellido','$FechaNac', $Id_Estado_Civil,'$Genero','$Direccion', '$Telefono', '$Empresa', '$Giro','$Nit','$Nrc', $Id_Tipo_Cliente, $Id_Cuenta_Cliente, 2, 1)";
      $rs3=mysqli_query($db1, $sql3) or die(mysqli_error($db1));
      mysqli_close($db1);

   }

   public function set_UpdateCliente($Primer_Nombre, $Segundo_Nombre, $Tercer_Nombre, $Primer_Apellido, $Segundo_Apellido, $Fecha_Nacimiento, $Id_Estado_Civil, $Genero, $Direccion, $Telefono, $Empresa, $Giro, $Nit, $Nrc, $Id_Tipo_Cliente, $Id_Estado, $IdCliente){
   $Fecha=date('Y-m-d', strtotime($Fecha_Nacimiento));
   $consulta=$this->db->query("UPDATE erp_cliente SET Primer_Nombre='$Primer_Nombre',Segundo_Nombre='$Segundo_Nombre',Tercer_Nombre='$Tercer_Nombre',Primer_Apellido='$Primer_Apellido',Segundo_Apellido='$Segundo_Apellido',Fecha_Nacimiento='$Fecha',Id_Estado_Civil=$Id_Estado_Civil,Genero='$Genero',Direccion='$Direccion',Telefono='$Telefono',Empresa='$Empresa',Giro='$Giro',Nit='$Nit',Nrc='$Nrc',Id_Tipo_Cliente=$Id_Tipo_Cliente,Id_Estado=$Id_Estado WHERE Id=$IdCliente");

 }

   }

 ?>
