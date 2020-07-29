$(document).ready(function () {

  $("#btn-agregar-sucursal").click(function (e) {
    e.preventDefault();
    

    if(validar()==true){

    v1=$('#d1').val();
    v2=$('#d2').val();
    v3=$('#d3').val();

    $.ajax({
      url: 'index.php?m=regSucursal',
      type: 'POST',
      data: {
        'd1': v1,
        'd2': v2,
        'd3': v3,
      },
      success: function(response){       
        if(response==1){    
          alert("agregado");
          location.href='index.php?m=Sucursal';
          swal('Datos Guardados', "Correctamente" , 'success');
  
        }else{
          alert("Error");
          location.href='index.php?m=Sucursal';
          swal('Error', "Lo sentimos hubo un error en el servidor" , 'warning');

        }
        
      }
    });

    }
    
  
  });

  
  $(document).on('click', '#btn-elimina-sucursal', function(e){
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
    url: 'index.php?m=eliSucursal',
    type: 'POST',
    data:{
      'd1': productId,
      
    },
    success: function(response){
      
      if(response==1){
        
        alert("Eliminado");
        swal('Datos Eliminados', "Correctamente" , 'success');
                        
        location.href='index.php?m=Sucursal';
        

      }
      
    }


  });
}



 

$('#frm_sucursal_edita').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
  var codigo = button.data('id') // Extraer la información de atributos de datos
  var direccion = button.data('direccion') // Extraer la información de atributos de datos
  var correo = button.data('correo') // Extraer la información de atributos de datos
  var telefono = button.data('telefono') // Extraer la información de atributos de datos

  
  var modal = $(this)
  modal.find('.modal-body #da1').val(codigo)
  modal.find('.modal-body #da2').val(direccion)
  modal.find('.modal-body #da3').val(correo)
  modal.find('.modal-body #da4').val(telefono)
  $('.alert').hide();//Oculto alert

})

$("#btn-editar-sucursal").click(function (e) {
  e.preventDefault();

  v1=$('#da1').val();
  v2=$('#da2').val();
  v3=$('#da3').val();
  v4=$('#da4').val();

  $.ajax({
    url: 'index.php?m=actSucursal',
    type: 'POST',
    data: {
      'd1': v1,
      'd2': v2,
      'd3': v3,
      'd4': v4,
    },
    success: function(response){
      
      if(response==1){
        
        alert("EActualizado");
        swal('Datos Actualizados', "Correctamente" , 'success');
                        
        location.href='index.php?m=Sucursal';
        

      }
      
    }
  });
});
});