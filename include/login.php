<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  require_once "../db/conexion.php";
  sleep(2);
  session_start();

  $mysqli->set_charset('utf8');
  $usuario=$mysqli->real_escape_string($_POST['usuariolg']);
  $clave=$mysqli->real_escape_string($_POST['passlg']);

  if ($nueva_consulta=$mysqli->prepare("SELECT IdUsuario,Nombre,NombreNivel,NombreSucursal FROM usuario,nivel,sucursal WHERE usuario.IdSucursal=sucursal.IdSucursal AND nivel.IdNivel=usuario.IdNivel AND usuario.IdEstado='E1' AND usuario.Usuario=? AND usuario.Pass=sha2(?,'sha512')")) {
    $nueva_consulta->bind_param('ss',$usuario,$clave);
    $nueva_consulta->execute();
    $rs=$nueva_consulta->get_result();

    if ($rs->num_rows>0){
      $datos= $rs->fetch_assoc();
      $_SESSION['actual']=$datos;
        echo json_encode(array('error'=>false,'NombreNivel'=>$datos['NombreNivel']));
    }else{
        echo json_encode(array('error'=>true));
      }
    }
}

$mysqli->close();
 ?>
