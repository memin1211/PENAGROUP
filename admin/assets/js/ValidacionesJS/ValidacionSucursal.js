$(document).ready(function()
  {
     //Validando Primer Nombre del Cliente
     $("#NombreSucursal").blur(function() {
        if (document.getElementById('NombreSucursal').value=='') {
           document.getElementById('NombreSucursal').focus();
           toastr["warning"]("Favor, Digite el Nombre de la Sucursal!");
        }
     });

     //Validando Primre Apellido del Cliente
     $("#DireccionSucursal").blur(function() {
        if (document.getElementById('DireccionSucursal').value=='') {
           document.getElementById('DireccionSucursal').focus();
           toastr["warning"]("Favor, Digite la Direccion de la Sucursal!");
        }
     });
});
