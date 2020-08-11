<div class="modal fade" id="frm_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="titulo">Registro de Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" ">

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <select  id="id_per" name="id_per" class="form-control">
                        <?php foreach($query2 as $data3): ?>
                              <option value="<?php echo $data3['id_persona'];?>"><?php echo $data3['vchNombreCompleto'];?></option>
                        <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="recipient-name" class="col-form-label">Usuario</label>
                        <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" autofocus required>
                        
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contraseña:</label>
                        <input type="text" class="form-control" id="clave" name="clave" placeholder="Contraseña" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Repite la Contraseña:</label>
                        <input type="text" class="form-control" id="clave2" name="clave2" placeholder="Repote la contraseña" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre de tu mascota:</label>
                        <input type="text" class="form-control" id="palabra" name="palabra" placeholder="Nombre de tu mascota" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Estado</label>
                        <select  id="estado" name="estado" class="form-control" >
                              <option >Selecciona</option>
                              <option value="1">Activo</option>
                              <option value="0">Inactivo</option>
                        
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Roll</label>
                        <select  id="roll" name="roll" class="form-control" >
                              <option >Selecciona</option>
                              <option value="Administrador">Administrador</option>
                              <option value="Vendedor">Vendedor</option>
                        
                        </select>
                    </div>
                    
                    
                    
                </form>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
                <button type="button"  onclick="val()" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script>
  function val(){

  v1=$('#id_per').val();
   v2=$('#user').val();
   v3=$('#clave').val();
   v4=$('#clave2').val();
   v5=$('#palabra').val();
   v6=$('#estado').val();
   v7=$('#roll').val();
    
    $.ajax({
        url: 'index.php?m=regUser',
        type: 'POST',
        data: {
            'd1':v1,
            'd2': v2,
            'd3': v3,
            'd4':v5,
            'd5': v6,
            'd6': v7,
           
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
  </script>


<div class="modal fade" id="frm_persona_edita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="titulo">Actualizar Datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" >
                    <div class="form-group ">
                        <label for="recipient-name" class="col-form-label">Codigo:</label>
                        <input type="text" class="form-control" id="_id" name="_id" placeholder="Nombre Completo" autofocus required readonly="readonly">
                        
                    </div>
                    <div class="form-group ">
                        <label for="recipient-name" class="col-form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" id="_name"  placeholder="Nombre Completo" autofocus required>
                        
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Clave Electoral:</label>
                        <input type="text" class="form-control" id="_clave" name="_clave" placeholder="Clave Electoral" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                        <input type="text" class="form-control" id="_correo" name="_correo" placeholder="Correo Electronico" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="number" class="form-control" id="_telefono" name="_telefono" placeholder="Telefono" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Rfc:</label>
                        <input type="text" class="form-control" id="_rfc" name="_rfc" placeholder="Rfc" autofocus required>
                    </div>
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" id="_id_s" name="_id_s"placeholder="Rfc" autofocus required>
                    </div>
                    
                    
                </form>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                <i class="fa fa-refresh ico"></i>
                Cancelar
                </button>
                <button type="button" id="btn-editar-personal" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
            </div>
        </div>
    </div>
    
