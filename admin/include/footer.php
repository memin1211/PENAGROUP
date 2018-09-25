<script type="text/javascript" src="../assets/datatable/datatables.js"></script>
<script type="text/javascript" src="../assets/js/SelectorFecha.js"></script>
<script type="text/javascript" src="../assets/js/jquery.maskedinput.js"></script>
<script type="text/javascript">
// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').material_select();
});
</script>
<script type="text/javascript">
$(document).ready(function() {
   $('#example').DataTable();
   } );
</script>
<script type="text/javascript">
function activar(){
 for(i=0;i<document.Form_Mod_Permiso_Usu.elements.length; i++){
   if((document.Form_Mod_Permiso_Usu[i].type == 'checkbox') && (document.Form_Mod_Permiso_Usu[i].checked == true)){
     while (document.Form_Mod_Permiso_Usu[i].checked != false) {
      for (var a = 0; a < document.Form_Mod_Permiso_Usu.elements.length; a++) {
         if (document.getElementById('Modulos'+a+'').checked == true) {
           document.getElementById('Select_Modulo'+a+'').disabled=false;
         }else {
          document.getElementById('Select_Modulo'+a+'').disabled=true;
         }
      }
      }
   }
 }
 }
</script>
