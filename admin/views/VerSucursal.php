<?php
require_once("../include/validarSesion.php");
$Accion = "El Usuario ha Ingresado a Ver de Sucursales";
require_once("../include/bitacora.php");
include_once("../controllers/controllers_Sucursal.php");
?>
<head>
   <!-- <link href="css/faceboxcliente.css" id="cambioestilo" media="screen" rel="stylesheet" type="text/css" /> -->
</head>
<body>
   <div class="container Title-Margin">
     <div class="row info-color  text-center" style="border-radius: 10px;">
             <label class="h3 font-italic white-text" style="margin-left:15px;">Catálogo de Sucursales</label>
     </div>
          <!-- Tab panels -->
                     <div class="row Card-Bottom">
                       <table id="example" class="display" cellspacing="0" width="100%">
                           <thead>
                              <tr>
                                 <th width="10%">CÓDIGO</th>
                                 <th width="30%">NOMBRE</th>
                                 <th width="30%">DIRECCIÓN</th>
                                 <th width="10%">TELÉFONO</th>
                                 <th width="10%">MUNICIPIO</th>
                                 <th width="10%">ESTADO</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 foreach ($MatrizSucursal as $value) {
                                   ?>
                                 <tr>
                                    <td width="10%"><?= $value['Id']; ?></td>
                                    <td width="30%"><?= $value['Nombre']; ?></td>
                                    <td width="30%"><?= $value['Direccion']; ?></td>
                                    <td width="10%"><?= $value['Telefono']; ?></td>
                                    <td width="10%"><?= $value['Municipio']; ?></td>
                                    <td width="10%"><?= $value['Estado']; ?></td>
                                    <td>
                                       <a href="iframeSucursal.php?Cod_Accion=1&Formulario=Modificar&IdSucursal=<?= $value['Id'];?>" style="color:gray;" onClick="changeCSS('../assets/iframe/faceboxcliente.css', 0);" rel="facebox"><i class="fa fa-gear puntero" aria-hidden="true" title="Modificar Sucursal"></i></a>
                                    </td>
                                 </tr>
                              <?php
                                 }
                               ?>
                           </tbody>
                           <tfoot>
                              <tr>
                                <th width="10%">CÓDIGO</th>
                                <th width="30%">NOMBRE</th>
                                <th width="30%">DIRECCIÓN</th>
                                <th width="10%">TELÉFONO</th>
                                <th width="10%">MUNICIPIO</th>
                                <th width="10%">ESTADO</th>
                                <th></th>
                              </tr>
                           </tfoot>
                       </table>
                     </div>
          </div>
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
</body>
</html>
