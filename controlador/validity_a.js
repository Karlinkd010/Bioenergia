$(document).ready(function () {

  $("#btn-agregar-area").click(function (e) {
    e.preventDefault();
    
  
    if(validar_area()==true){
  
    v1=$('#area').val();
   
  
    $.ajax({
      url: 'index.php?m=regArea',
      type: 'POST',
      data: {
        'd1': v1,
    
      },
      success: function(response){       
        if(response==1){    
          alert("agregado");
          location.href='index.php?m=area';
          swal('Datos Guardados', "Correctamente" , 'success');
  
        }else{
          alert("Error");
          location.href='index.php?m=area';
          swal('Error', "Lo sentimos hubo un error en el servidor" , 'warning');
  
        }
        
      }
    });
  
    }
    
  
  });
  

$("#btn-agregar-area").click(function (e) {
  e.preventDefault();
  

  if(validar_area()==true){

  v1=$('#area').val();
 

  $.ajax({
    url: 'index.php?m=regArea',
    type: 'POST',
    data: {
      'd1': v1,
  
    },
    success: function(response){       
      if(response==1){    
        alert("agregado");
        location.href='index.php?m=area';
        swal('Datos Guardados', "Correctamente" , 'success');

      }else{
        alert("Error");
        location.href='index.php?m=area';
        swal('Error', "Lo sentimos hubo un error en el servidor" , 'warning');

      }
      
    }
  });

  }
  

});


$(document).on('click', '#btn-elimina-area', function(e){
  var productId = $(this).data('id');
  
  SwalDelete(productId);
  e.preventDefault();
});


function SwalDelete(productId){

Swal.fire({
  title: '¿Seguro de eliminar este registro?',
  text: "Esta accion no se puede deshacer",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.value) {
    
    eliminar(productId);
  }
})
}
function eliminar(productId){
$.ajax({
  url: 'index.php?m=eliArea',
  type: 'POST',
  data:{
    'd1': productId,
    
  },
  success: function(response){
    
    if(response==1){
      
      alert("Eliminado");
      swal('Datos Eliminados', "Correctamente" , 'success');
                      
      location.href='index.php?m=area';
      

    }
    
  }


});
}





$('#frm_area_').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget) // Botón que activó el modal
var codigo = button.data('id') // Extraer la información de atributos de datos
var nombre = button.data('area') // Extraer la información de atributos de datos



var modal = $(this)
modal.find('.modal-body #id_area_').val(codigo)
modal.find('.modal-body #area_').val(nombre)
$('.alert').hide();//Oculto alert

})

$("#btn-editar-area").click(function (e) {
e.preventDefault();

v1=$('#id_area_').val();
v2=$('#area_').val();


$.ajax({
  url: 'index.php?m=actArea',
  type: 'POST',
  data: {
    'd1': v1,
    'd2': v2,
 
  },
  success: function(response){
    
    if(response==1){
      
      alert("Actualizado");
      swal('Datos Actualizados', "Correctamente" , 'success');
                      
      location.href='index.php?m=area';
      

    }
    
  }
});
});
});