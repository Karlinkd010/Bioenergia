$(document).ready(function () {
 
  $("#btn-agregar-personal").click(function (e) {
    e.preventDefault();
    
    if(validar_p2()==true){
      v1=$('#name').val();
    v2=$('#clave').val();
    v3=$('#correo').val();
    v4=$('#telefono').val();
    v5=$('#rfc').val();
    v6=$('#id').val();

    $.ajax({
      url: 'index.php?m=regPersonas',
      type: 'POST',
      data: {
        'd1': v1,
        'd2': v2,
        'd3': v3,
        'd4': v4,
        'd5': v5,
        'd6': v6,
      },
      success: function(response){
        
        if(response==1){
          
          alert("agregado");
          swal('Datos Guardados', "Correctamente" , 'success');
                          
          location.href='index.php?m=personas';
          
  
        }else{
          alert("Error");
          swal('Error', "Lo sentimos hubo un error en el servido" , 'warning');
                          
          location.href='index.php?m=personas';

        }
        
      }
    });

    }

    
  });

  
  $(document).on('click', '#btn-elimina-personal', function(e){
    var Id = $(this).data('id');
    
    SwalDelete(productId);
    e.preventDefault();
  });


function SwalDelete(Id){
  
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
      
      eliminar(Id);
    }
  })
}
function eliminar(Id){
  $.ajax({
    url: 'index.php?m=eliPersonas',
    type: 'POST',
    data:{
      'd1': Id,
      
    },
    success: function(response){
      
      if(response==1){
        
        alert("Eliminado");
        swal('Datos Eliminados', "Correctamente" , 'success');
                        
        location.href='index.php?m=personas';
        

      }
      
    }


  });
}



 

$('#frm_persona_edita').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
  var codigo = button.data('id') // Extraer la información de atributos de datos
  var nombre= button.data('nombre') // Extraer la información de atributos de datos
  var clave = button.data('clave') // Extraer la información de atributos de datos
  var correo = button.data('correo')
  var tel = button.data('tel') 
  var rfc = button.data('rfc') 
  var id_s = button.data('id_s') 

  
  var modal = $(this)
  modal.find('.modal-body #_id').val(codigo)
  modal.find('.modal-body #_name').val(nombre)
  modal.find('.modal-body #_clave').val(clave)
  modal.find('.modal-body #_correo').val(correo)
  modal.find('.modal-body #_telefono').val(tel)
  modal.find('.modal-body #_rfc').val(rfc)
  modal.find('.modal-body #_id_s').val(id_s)
  
  $('.alert').hide();//Oculto alert

})

$("#btn-editar-personal").click(function (e) {
  e.preventDefault();
    v0=$('#_id').val();
    v1=$('#_name').val();
    v2=$('#_clave').val();
    v3=$('#_correo').val();
    v4=$('#_telefono').val();
    v5=$('#_rfc').val();
    v6=$('#_id_s').val();

  $.ajax({
    url: 'index.php?m=actPersonas',
    type: 'POST',
    data: {
      'd0': v0,
      'd1': v1,
      'd2': v2,
      'd3': v3,
      'd4': v4,
      'd5': v5,
      'd6': v6,
    },
    success: function(response){
      
      if(response==1){
        
        alert("Actualizado");
        swal('Datos Actualizados', "Correctamente" , 'success');
                        
        location.href='index.php?m=personas';
        

      }
      
    }
  });
});
});