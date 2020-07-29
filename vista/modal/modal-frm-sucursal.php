

<div class="modal fade" id="frm_sucursal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="titulo">Registrar Nuevo Sucursal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" onsubmit="return validar()">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" id="d1"  placeholder="Nombre" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                        <input type="email" class="form-control" id="d2"  placeholder="Correo Electronico" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="number" class="form-control"  id="d3"  placeholder="Telefono" autofocus required>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-dark">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>
                Cancelar
                </button>
                <button type="button" id="btn-agregar-sucursal" class="btn btn-primary" >
                <i class="fa fa-check-circle"></i>
                Aceptar
                </button>

                
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="frm_sucursal_edita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="titulo">Actualizar Sucursal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" name="frm_edita_s">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Codigo:</label>
                        <input type="text" class="form-control" id="da1" name="da1" readonly="readonly" >
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Direccion: </label>
                        <input type="text" class="form-control" id="da2" name="da2"  autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                        <input type="email" class="form-control" id="da3" name="da3"   required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="number" class="form-control" id="da4" name="da4"  autofocus required>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>
                Cancelar
                </button>
                <button type="button" id="btn-editar-sucursal" class="btn btn-primary" data-dismiss="modal">
                <i class="fa fa-refresh ico"></i>
                Actualizar</button>
            </div>
        </div>
    </div>



    



