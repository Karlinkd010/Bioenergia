$(document).ready(function () {

    $("#btn-agregar-departamento").click(function (e) {
      e.preventDefault();
      
  
      if(validar_depa()==true){
  
      v1=$('#departamento').val();
      v2=$('#area_').val();

      
  
      $.ajax({
        url: 'index.php?m=regDepartamento',
        type: 'POST',
        data: {
          'd1': v1,
          'd2': v2,

        },
        success: function(response){       
          if(response==1){    
            alert("agregado");
            location.href='index.php?m=departamento';
            swal('Datos Guardados', "Correctamente" , 'success');
    
          }else{
            alert("Error");
            location.href='index.php?m=departamento';
            swal('Error', "Lo sentimos hubo un error en el servidor" , 'warning');
  
          }
          
        }
      });
  
      }
      
    
    });
  
    
    $(document).on('click', '#btn-elimina-departamento', function(e){
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
      url: 'index.php?m=eliDepartamento',
      type: 'POST',
      data:{
        'd1': productId,
        
      },
      success: function(response){
        
        if(response==1){
          
          alert("Eliminado");
          swal('Datos Eliminados', "Correctamente" , 'success');
                          
          location.href='index.php?m=departamento';
          
  
        }
        
      }
  
  
    });
  }
  
  
  
   
  
  $('#frm_departamento_edita').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Botón que activó el modal
    var codigo = button.data('id') // Extraer la información de atributos de datos
    var departamento= button.data('departamento') // Extraer la información de atributos de datos
    var area = button.data('area') // Extraer la información de atributos de datos
    
  
    
    var modal = $(this)
    modal.find('.modal-body #_id_departamento').val(codigo)
    modal.find('.modal-body #_departamento').val(departamento)
    modal.find('.modal-body #_area').val(area)
    
    $('.alert').hide();//Oculto alert
  
  })
  
  $("#btn-editar-sucursal").click(function (e) {
    e.preventDefault();
  
    v1=$('#_id_departamento').val();
    v2=$('#_departamento').val();
    v3=$('#_area').val();
    
  
    $.ajax({
      url: 'index.php?m=actDapartamento',
      type: 'POST',
      data: {
        'd1': v1,
        'd2': v2,
        'd3': v3,
      },
      success: function(response){
        
        if(response==1){
          
          alert("Actualizado");
          swal('Datos Actualizados', "Correctamente" , 'success');
                          
          location.href='index.php?m=departamento';
          
  
        }
        
      }
    });
  });
  });