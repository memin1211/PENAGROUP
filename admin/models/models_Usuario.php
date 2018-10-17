<?php
/**
 *
 */
 class models_Usuario
   {

      private $db;
      private $Usuario;
      private $UsuarioNuevo;
      private $Rol;
      private $Id;

      public function __construct()
      {
        require_once("../models/Conexion.php");
        $this->db=Conectar::conexion();
        $this->Usuario=array();
        $this->UsuarioNuevo=array();
        $this->Rol=array();
        $this->Id=array();
      }

      public function get_Usuario(){
       $consulta=$this->db->query("SELECT A.Id, A.Tipo_Usuario, B.Nombre, A.Correo, A.Usuario, A.Fecha_Registro,C.Nombre AS Estado FROM erp_usuario A INNER JOIN erp_rol B ON (B.Id=A.Id_Rol) INNER JOIN erp_estado C ON (C.Id=A.Id_Estado)");
       while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
         $this->Usuario[]=$a;
       }
       return $this->Usuario;
     }

     public function get_UsuarioNuevo(){
        //SELECT A.Id, A.Primer_Nombre, A.Segundo_Nombre, A.Primer_Apellido, A.Segundo_Apellido, C.Nombre FROM erp_empleado A INNER JOIN erp_entidad C ON (C.Id=A.Id_Entidad) INNER JOIN erp_usuario E ON (E.Id_Usuario<>A.Id) INNER JOIN erp_cliente G ON (G.Id<>E.Id_Usuario)
       //UNION
       //SELECT B.Id, B.Primer_Nombre, B.Segundo_Nombre, B.Primer_Apellido, B.Segundo_Apellido, D.Nombre FROM erp_cliente B INNER JOIN erp_entidad D ON (B.Id_Entidad=D.Id) INNER JOIN erp_usuario F ON (F.Id_Usuario<>B.Id) INNER JOIN erp_cliente H ON (H.Id<>F.Id_Usuario) GROUP BY Nombre
      $consulta=$this->db->query("SELECT A.Id, A.Primer_Nombre, A.Segundo_Nombre, A.Primer_Apellido, A.Segundo_Apellido, C.Nombre FROM erp_empleado A INNER JOIN erp_entidad C ON (C.Id=A.Id_Entidad) INNER JOIN erp_usuario E ON (E.Id_Usuario<>A.Id) UNION SELECT B.Id, B.Primer_Nombre, B.Segundo_Nombre, B.Primer_Apellido, B.Segundo_Apellido, D.Nombre FROM erp_cliente B INNER JOIN erp_entidad D ON (B.Id_Entidad=D.Id) INNER JOIN erp_usuario F ON (F.Id_Usuario<>B.Id) GROUP BY Nombre");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->UsuarioNuevo[]=$a;
      }
      return $this->UsuarioNuevo;
    }

     public function get_Rol(){
      $consulta=$this->db->query("SELECT Id, Nombre, Descripcion FROM erp_rol");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->Rol[]=$a;
      }
      return $this->Rol;
    }

     public function set_InsertUsuario($Tipo_Usuario, $Id_Usuario, $Id_Rol, $Correo, $UsuarioSesion, $Clave, $fechahoy, $IdSucusalAsig){

        if ($Tipo_Usuario=='Empleado') {
           //Creamos el Usuario
         $consulta=$this->db->query("INSERT INTO erp_usuario(Tipo_Usuario, Id_Usuario, Id_Rol, Correo, Usuario, Clave, Fecha_Registro, Id_Entidad, Id_Estado) VALUES ('$Tipo_Usuario', $Id_Usuario, $Id_Rol, '$Correo', '$UsuarioSesion', sha2('$Clave','sha512'), '$fechahoy', 14, 1)");

         //Consultamos el ID del Usuario antes Ingresado
         $sqlcli = "SELECT Id FROM erp_usuario WHERE Usuario='$UsuarioSesion' AND Clave=sha2('$Clave','sha512')";
         $db0=mysqli_connect('localhost','root','','id5392174_penagroup_erpdev');
         $rcli=mysqli_query($db0, $sqlcli) or die(mysqli_error($db0));
         while ($a=mysqli_fetch_assoc($rcli))
         {
           $Id=$a['Id'];
         }
         mysqli_free_result($rcli);
         mysqli_close($db0);

         //Creamos los Accesos a la Sucursal
         foreach ($IdSucusalAsig as $key => $value) {
            $sqlcli = "INSERT INTO erp_sucursal_usuario(Id_Usuario, Id_Sucursal) VALUES ($Id,$value)";
            $db1=mysqli_connect('localhost','root','','id5392174_penagroup_erpdev');
            $rs=mysqli_query($db1, $sqlcli) or die(mysqli_error($db1));
         }
         mysqli_free_result($rs);
         mysqli_close($db1);

       }elseif ($Tipo_Usuario=='Cliente') {
          //Creamos el Usuario
        $consulta=$this->db->prepare("INSERT INTO erp_usuario(Tipo_Usuario, Id_Usuario, Id_Rol, Correo, Usuario, Clave, Fecha_Registro, Id_Entidad, Id_Estado) VALUES ('$Tipo_Usuario', $Id_Usuario, $Id_Rol, '$Correo', '$UsuarioSesion', sha2('$Clave','sha512'), '$fechahoy', 14, 1)");
       }
   }

   public function find($BuscarId)
   {
      $consulta=$this->db->query("SELECT Id, Primer_Nombre, Primer_Apellido FROM erp_usuario WHERE Id=$BuscarId");
      while ($a=$consulta->fetch(PDO::FETCH_ASSOC)) {
        $this->UsuarioFind[]=$a;
      }
      return $this->UsuarioFind;
   }

}
 ?>
