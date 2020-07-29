

<div class="modal fade" id="Modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-center" id="titulo ">Accceder al sistema</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    
                </button>
            </div>
            <div class="modal-body text-center">
            <img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" class="img-rounded"  width="160" height="160" />
            
                <form method="POST"   >
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"></i> Usuario:</label>
                        <input type="text" class="form-control" id="user"  autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="pass" autofocus required>
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer bg-dark text-center ">
            
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>
                Cancelar
                </button>
                <button type="submit"  onclick="validar_l()" class="btn btn-primary">
                <i class="fa fa-check-circle"></i>
                Aceptar</button>

            </div>
            <a href="index.php?m=admin" class="bg-dark text-center">     Se te olvidó la contraseña <span class="fa fa-question-circle"></span></a>

            


        </div>
    </div>

    <script >

        
        function validar_l(){

  
  user=$('#user').val();
  pass=$('#pass').val();
  

if(user===""  || pass==="" ){

    
  swal('Campos vacios', "Por favor ingrese datos!" , 'warning');
  return false;
}else {
    $.ajax({

    url: 'index.php?m=logeo',
      type: 'POST',
      data: {
        'd1': user,
        'd2': pass,
    
      },
      success: function(response){   
            
        if(response==0){    
          
          
          
          swal('Error', "Lo sentimos hubo un error en el servidor" , 'warning');
  
        }else if(response==1){
            alert("Bienvenido");
          location.href='index.php?m=admin';
          swal('Bienvenido', "Correctamente" , 'success');
         
  
        }
        
      }
    });
}
return true;

}
    </script>





<div class="modal fade" id="Modal_reestablecer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-center" id="titulo ">Reestablecer Contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    
                </button>
            </div>
            <div class="modal-body text-center">
            <img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" class="img-rounded"  width="160" height="160" />
            
                <form method="POST">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"></i> Correo:</label>
                        <input type="text" class="form-control" id="correo"  autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Pregunta de Seguridad:</label>
                        <br>
                        <label for="recipient-name" class="col-form-label">Nombre de tu mascota:</label>
                        <input type="text" class="form-control" id="pregunta" autofocus required>
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer bg-dark text-center ">
            
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>
                Cancelar
                </button>
                <button type="submit"  onclick="validar_l()" class="btn btn-primary">
                <i class="fa fa-check-circle"></i>
                Aceptar</button>

            </div>
        </div>
    </div>