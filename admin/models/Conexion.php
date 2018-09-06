<?php
  class Conectar
  {

    public static function conexion()
    {
      try {
        $conexion=new PDO('mysql:host=localhost; dbname=id5392174_penagroup_erpdev', 'id5392174_mpena', 'P@100514');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET UTF8");
      } catch (Exception $e) {
        die("Error ". $e->getMessage());
        echo "Linea del Error ". $e->getLine();
      }
      return $conexion;
    }

  }
?>
