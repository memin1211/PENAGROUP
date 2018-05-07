<?php
   $fecha = date("Y-m-d");
   $hora = date("H:i:s");
class Bitacora{

    //metodo insertar
    public function insertar(){
        $model = new Conexion;
        $conexion = $model->conectar();
        $sql = "INSERT INTO registro(IdUsuario, fechaentrada, horaentrada, horasalida, estado) VALUES ('".$fila['IdUsuario']."', '$fecha', '$hora', '', 1)";
        $consulta = $conexion->prepare($sql);

        if(! $consulta){
            ?>

<script>
alert("error en la consulta");
</script>

<?php
        }else{
            $consulta->execute();
        }
    }
    //termina el metodo insertar
}
?>
