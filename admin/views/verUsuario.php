<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver Usuarios";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Usuario.php");
?>
   <body>
     <div class="container Title-Margin">
       <div class="row info-color  text-center" style="border-radius: 10px;">
               <label class="h3 font-italic white-text" style="margin-left:15px;">Catálogo de Usuarios</label>
       </div>
     </div>
        <div class="container">
            <!-- Tab panels -->
                       <div class="row Card-Bottom">
                         <table id="example" class="display" cellspacing="0" width="100%">
                             <thead>
                                <tr>
                                   <th>CÓDIGO</th>
                                   <th>TIPO USUARIO</th>
                                   <th>ROL</th>
                                   <th>USUARIO</th>
                                   <th>CORREO</th>
                                   <th>FECHA REGISTRO</th>
                                   <th>ESTADO</th>
                                   <th></th>
                                   <th></th>
                                </tr>
                             </thead>
                             <tbody>
                                <?php
                                   foreach ($MatrizUsuario as $value) {
                                     ?>
                                   <tr>
                                      <td><?= $value['Id']; ?></td>
                                      <td><?= $value['Tipo_Usuario']; ?></td>
                                      <td><?= $value['Nombre']; ?></td>
                                      <td><?= $value['Usuario']; ?></td>
                                      <td><?= $value['Correo']; ?></td>
                                      <td><?= date('d-m-Y', strtotime($value['Fecha_Registro'])); ?></td>
                                      <td><?= $value['Estado']; ?></td>
                                      <td><i class="fa fa-key puntero" aria-hidden="true" data-toggle="modal" data-target="#ModalClave" title="Modificar Clave"></i></td>
                                      <td>
                                         <a href="iframePermisos.php?Cod_Accion=1&Formulario=Modificar&IdUsuario=<?= $value['Id'];?>" style="color:gray;" onClick="changeCSS('../assets/iframe/faceboxpermisos.css', 0);" rel="facebox"><i class="fa fa-gear puntero" aria-hidden="true" title="Modificar Permisos"></i></a>
                                      </td>
                                   </tr>
                                <?php
                                   }
                                 ?>
                             </tbody>
                             <tfoot>
                                <tr>
                                  <th>CÓDIGO</th>
                                  <th>TIPO USUARIO</th>
                                  <th>ROL</th>
                                  <th>USUARIO</th>
                                  <th>CORREO</th>
                                  <th>FECHA REGISTRO</th>
                                  <th>ESTADO</th>
                                  <th></th>
                                  <th></th>
                                </tr>
                             </tfoot>
                         </table>
                       </div>
                    </div>

                <div class="row">
                  <!-- Modal Modificar Clave-->
                    <?php include_once("../include/Modificar_Permiso_Usuario.php");?>
                  <!-- Fin Modal Modificar Clave-->
                </div>
<!--
                <div class="row">
                    <?php// include_once("../include/Modificar_Permiso_Usuario.php");?>
                </div>
-->
<script src="../assets/iframe/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
function changeCSS(cssFile, cssLinkIndex)
    {
        var oldlink = document.getElementsByTagName("link").item(cssLinkIndex);
        var newlink = document.createElement("link");
        newlink.setAttribute("href", cssFile);
        newlink.setAttribute("Id", "cambioestilo");
        newlink.setAttribute("media", "screen");
        newlink.setAttribute("rel", "stylesheet");
        newlink.setAttribute("type", "text/css");
        document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
     }
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
 $('a[rel*=facebox]').facebox({
    loadingImage : '../assets/img/loading.gif',
    closeImage   : '../assets/img/closelabel.png',
     })


 $.extend($.facebox.settings, { modal : true });
 $(document).bind('loading.facebox', function() {
                    $(document).unbind('keydown.facebox');
             $("#facebox_overlay").unbind("click").click(function()
        {
                 if (!$.facebox.settings.modal) {
                  $(document).trigger('close.facebox');
                 }

           })
        })
})
</script>
      <?php include_once("../include/footer.php"); ?>
      <script type="text/javascript" src="../assets/js/ValidacionesJS/ValidacionUsuario.js"></script>
   </body>
</html>
