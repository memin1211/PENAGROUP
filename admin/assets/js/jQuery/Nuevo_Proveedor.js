//Nuevo Proveedor
jQuery(document).on('submit','#FormNuevoProveedor',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Proveedor.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                  setTimeout(function(){
                    toastr["success"]("Proveedor Creado Exitosamente!");
                    document.getElementById('NombreProveedor').value='';
                    document.getElementById('DireccionProveedor').value='';
                    document.getElementById('TelefonoProveedor').value='';
                    document.getElementById('CelularProveedor').value='';
                    document.getElementById('IdMunicipio').value='';
                    document.getElementById('GiroProveedor').value='';
                    document.getElementById('CorreoProveedor').value='';
                  },3000);
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
              })
              .fail(function(respuesta){
                console.log(respuesta.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
