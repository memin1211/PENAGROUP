$(document).ready(function()
  {
     //Validando Nombre del Laboratorio
     $("#NombreProducto").blur(function() {
        if (document.getElementById('NombreProducto').value=='') {
           document.getElementById('NombreProducto').focus();
           toastr["warning"]("Favor, Digite el Nombre del Producto!");
        }
     });

     //Validando Abreviatura del Laboratorio
     $("#CodigoBarraProducto").blur(function() {
        if (document.getElementById('CodigoBarraProducto').value=='') {
           document.getElementById('CodigoBarraProducto').focus();
           toastr["warning"]("Favor, Digite codigo de Barra de Producto!");
        }
     });
});
