

<div class="modal fade" id="frm_area" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="titulo">Registrar Nueva Area</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" onsubmit="return validar_area()">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre del Area:</label>
                        <input type="text" class="form-control" id="area"  placeholder="Nombre" autofocus required>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer bg-dark">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>
                Cancelar
                </button>
                <button type="button" id="btn-agregar-area" class="btn btn-primary" >
                <i class="fa fa-check-circle"></i>
                Aceptar
                </button>

                
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="frm_area_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="titulo">Actualizar Area</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" name="frm_edita_s">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Codigo:</label>
                        <input type="text" class="form-control" id="id_area_" readonly="readonly" name="id_area" readonly="readonly" >
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre del Area:</label>
                        <input type="text" class="form-control" id="area_"  placeholder="Nombre" autofocus required>
                    </div>

                    
                    
                </form>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                <i class="fa fa-times-circle"></i>
                Cancelar
                </button>
                <button type="button" id="btn-editar-area" class="btn btn-primary" data-dismiss="modal">
                <i class="fa fa-refresh ico"></i>
                Actualizar</button>
            </div>
        </div>
    </div>

