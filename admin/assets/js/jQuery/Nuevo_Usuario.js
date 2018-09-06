//Nuevo Sucursal
jQuery(document).on('submit','#FormNuevoUsuario',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../controllers/controllers_Usuario.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  toastr["info"]("Espere un Momento...");
                  setTimeout(function(){
                    toastr["success"]("Usuario Creado Exitosamente!");
                    document.getElementById('IdUsuario').value='';
                    document.getElementById('CorreoUsuario').value='';
                    document.getElementById('TipoUsuario').value='';
                    document.getElementById('IdRol').value='';
                    document.getElementById('IdSucusalAsig').value='';
                    document.getElementById('UsuarioSesion').value='';
                    document.getElementById('ValidarClaveUsuario').value='';
                  },3000);
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
