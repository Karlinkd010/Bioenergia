<div class="modal fade" id="frm_persona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="titulo">Registro de personal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" onsubmit="return validar_p2()">
                    <div class="form-group ">
                        <label for="recipient-name" class="col-form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre Completo" autofocus required>
                        
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Clave Electoral:</label>
                        <input type="text" class="form-control" id="clave" name="clave" placeholder="Clave Electoral" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo Electronico" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Rfc:</label>
                        <input type="number" class="form-control" id="rfc" name="rfc" placeholder="Rfc" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Sucursal:</label>
                        <select  id="id" name="id" class="form-control">
                        <?php foreach($query2 as $data3): ?>
                              <option value="<?php echo $data3['id_sucursal'];?>"><?php echo $data3['vchDireccion'];?></option>
                        <?php endforeach;?>
                        </select>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
                <button type="button" id="btn-agregar-personal" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>





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
            <form method="POST" onsubmit="return validar_p()">
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
    <script src="controlador/Validate.js"></script>