<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
   require_once "../../db/conexion.php";
   //sleep(2);
   session_start();

   $mysqli->set_charset('utf8');
   $tipo_usuario=$mysqli->real_escape_string($_POST['tipousuario']);
   $usuario=$mysqli->real_escape_string($_POST['usuariolg']);
   $clave=$mysqli->real_escape_string($_POST['passlg']);

               //Validando el Tipo de Usuario que esta Ingresando
   if ($tipo_usuario=='Empleado') {
         if ($nueva_consulta=$mysqli->prepare("SELECT A.Id,A.Tipo_Usuario,B.Primer_Nombre,B.Primer_Apellido FROM erp_usuario A INNER JOIN erp_empleado B ON (A.Id_Usuario=B.Id AND A.Usuario=? AND A.Id_Estado=1 AND A.Clave=sha2(?,'sha512'))")) {
         $nueva_consulta->bind_param('ss',$usuario,$clave);
         $nueva_consulta->execute();
         $rs=$nueva_consulta->get_result();

         if ($rs->num_rows>0){
            $datos= $rs->fetch_assoc();
            $_SESSION['usuario_actual']=$datos;
            echo json_encode(array('error'=>false,'Tipo_Usuario'=>$datos['Tipo_Usuario']));
         }else{
             echo json_encode(array('error'=>true));
         }
      }
   }
   $mysqli->close();
}
 ?>
