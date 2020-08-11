
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
                        <input type="text" class="form-control" id="user"   autofocus required placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="pass" autofocus required placeholder="Contraseña">
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
            <a href="#" class="bg-dark text-center" data-toggle="modal" data-target="#Modal_recovery">     Se te olvidó la contraseña <span class="fa fa-question-circle"></span></a>

            


        </div>
    </div>



<div class="modal fade" id="Modal_recovery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-center" id="titulo ">Reestablecer Contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    
                </button>
            </div>
            <div class="modal-body text-center">
            <img src="http://cdn.onlinewebfonts.com/svg/img_398183.svg" class="img-rounded"  width="160" height="160" />
            
                <form  name = "myform" method="POST" action="index.php?m=recovery_password">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"></i> Usuario:</label>
                        <input type="text" class="form-control" id="use" name="use" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"></i> Correo:</label>
                        <input type="text" class="form-control" id="correo"  autofocus required placeholder="Correo electronico">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Pregunta de Seguridad:</label>
                    
                        <input type="text" class="form-control" id="pregunta" autofocus required placeholder="Nombre de tu mascota">
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer bg-dark text-center ">
            
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>
                Cancelar
                </button>
                <button type="submit"  onclick="validar()" name="enviar" class="btn btn-primary">
                <i class="fa fa-check-circle"></i>
                Aceptar</button>

            </div>
        </div>
    </div>



    <script >

    function validar(){

        usuario=$('#use').val();
        correo=$('#correo').val();
        pregunta=$('#pregunta').val();
        
        if(correo===""  || pregunta==="" ){
            swal('Campos vacios', "Por favor ingrese datos!" , 'warning');
            return false;
        }else{
            $.ajax({
                url: 'index.php?m=recovery',
                type: 'POST',
                data: {
                    'd1': correo,
                    'd2': pregunta,
                    'd3': usuario,
                },
                 success: function(response){  
                    
                     
                     if(response==0){
                         swal('Error', "Lo sentimos hubo un error en el servidor" , 'warning');
                        }else if(response==1){
                           
                            $(".modal").hide();
                            location.href='index.php?m=recovery_password';
                                                
                        }
                    }
                });

        }
        
        
                return true;
    }
    






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