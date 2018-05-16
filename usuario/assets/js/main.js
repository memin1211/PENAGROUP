
jQuery(document).on('submit','#formLg',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'include/login.php',
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
                    if (respuesta.NombreNivel!='USUARIO') {
                      location.href='admin/views/index.php';
                    }else if (respuesta.NombreNivel=='USUARIO') {
                      location.href='../usuario/views/';
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
