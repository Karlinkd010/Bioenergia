
                <div class="container-fluid">
                    <h2>Módulo <span class="badge badge-secondary my-3">AREA
                        </span></h2>
                    <button type="button" class="btn btn-success my-3"  data-toggle="modal" data-target="#frm_area" data-whatever="@mdo">
                    <span class="fa fa-building"></span> Nuevo</button>
                    <table class="table table-sm my-4">
                        <thead class="bg-success">
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre Area</th>
                                <th class="align-content-center" scope="col">Actualizar</th>
                                <th class="align-content-center" scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody id="tabla">

                        <?php foreach($query as $data): ?>
						<tr>
							<th scope="row"><?php echo $data['id_area'];?></th>
							<td><?php echo $data['vchNombre']; ?></td>

                            <td>
                                <button class="btn btn-success btn-raised" data-toggle="modal" data-target="#frm_area_"
                                data-id="<?php echo $data['id_area']; ?>" 
                                data-area="<?php echo $data['vchNombre']; ?>" 
                                 >
                                    <i class="fa fa-refresh ico"></i>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-raised" 
                                data-id="<?php echo $data['id_area']; ?>" 
                                
                                id="btn-elimina-area">
                                    <i class="fa fa-trash ico"></i>
                                </button>
                            </td>

						</tr>
                        <?php endforeach; ?>

                        </tbody>                    
                    </table>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>


        <?php include("modal/modal-frm-area.php");?>