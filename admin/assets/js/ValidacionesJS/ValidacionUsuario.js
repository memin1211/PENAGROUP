$(document).ready(function()
  {
     //Validando Correo del Usuario
     $("#CorreoUsuario").blur(function() {
        if (document.getElementById('CorreoUsuario').value=='') {
           document.getElementById('CorreoUsuario').focus();
           toastr["warning"]("Favor, Digite el Correo del Usuario!");
        }
     });

     //Validando Usuario
     $("#UsuarioSesion").blur(function() {
        if (document.getElementById('UsuarioSesion').value=='') {
           document.getElementById('UsuarioSesion').focus();
           toastr["warning"]("Favor, Digite el Usuario para ingresar al Sistema!");
        }
     });

     //Validando Clave del Usuario1
     $("#ClaveUsuario").blur(function() {
        if (document.getElementById('ClaveUsuario').value=='') {
           document.getElementById('ClaveUsuario').focus();
           toastr["warning"]("Favor, Digite la Clave del Usuario para ingresar al Sistema!");
        }
     });

     //Validando Clave del Usuario1
     $("#ValidarClaveUsuario").blur(function() {
        if (document.getElementById('ValidarClaveUsuario').value!=document.getElementById('ClaveUsuario').value) {
           document.getElementById('ValidarClaveUsuario').focus();
           toastr["warning"]("No Coinciden las Claves del Usuario para ingresar al Sistema!");
        }
     });
});
