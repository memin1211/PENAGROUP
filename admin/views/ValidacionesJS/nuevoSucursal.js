jQuery(document).on('submit','#FormNuevoSucursal',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../models/modelsNuevoSucursal.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  $('.botonlg').val('Validando...');
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error) {
                        toastr["success"]("Sucursal Agregada Satisfactoriamente!");
                        location.href='gestionSucursal.php';
                     }
                }else {
                  toastr["error"]("Ups!!! Hubo un Error al Intentar Crear una Sucursal.");
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
