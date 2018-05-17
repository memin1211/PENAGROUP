jQuery(document).on('submit','#formLg',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'usuario/include/login.php',
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
                  setTimeout(function(){
                    if (respuesta.TipoUsuario=='CLIENTE') {
                      location.href='usuario/views/';
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
