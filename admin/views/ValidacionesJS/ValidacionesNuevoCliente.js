$(document).ready(function()
  {
     //Validando Primer Nombre del Cliente
     $("#PrimerNombreCliente").blur(function() {
        if (document.getElementById('PrimerNombreCliente').value=='') {
           document.getElementById('PrimerNombreCliente').focus();
           toastr["warning"]("Favor, Digite el Nombre del Cliente!");
        }
     });

     //Validando Primre Apellido del Cliente
     $("#PrimerApellidoCliente").blur(function() {
        if (document.getElementById('PrimerApellidoCliente').value=='') {
           document.getElementById('PrimerApellidoCliente').focus();
           toastr["warning"]("Favor, Digite el Primer Apellido del Cliente!");
        }
     });

     //Validando Primre Apellido del Cliente
     $("#SegundoApellidoCliente").blur(function() {
        if (document.getElementById('SegundoApellidoCliente').value=='') {
           document.getElementById('SegundoApellidoCliente').focus();
           toastr["warning"]("Favor, Digite el Segundo Apellido del Cliente!");
        }
     });
  });
