
jQuery(document).on('submit','#formLg',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'admin/include/login.php',
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
                  $('#formLg').addClass('animated zoomOutLeft');
                  setTimeout(function(){
                    if (respuesta.Tipo_Usuario=='Empleado') {
                      location.href='admin/views/index.php?v=1';
                    }else{
                      location.href='index.php';
                    }
                  },3000);

                }else {
                  $('.error').slideDown('slow');
                  setTimeout(function(){
                  $('.error').slideUp('slow');
                  },3000);
                $('.botonlg').val('Ingresar');
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
