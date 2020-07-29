
                <div class="container-fluid">
                    <h2>Módulo <span class="badge badge-secondary my-3">VENTA CLIENTES
                        </span></h2>
                    <button type="button" class="btn btn-primary my-3"  data-toggle="modal" data-target="#frm_sucursal" data-whatever="@mdo">
                    <span class="fa fa-building"></span> Nuevo</button>
                    <table class="table table-sm my-4">
                        <thead class="bg-primary">
                            <tr>
                            <th scope="col">Nombre Cliente</th>
                                <th scope="col">Cantidad Comprada</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Fecha de Compra</th>
                                <th class="align-content-center" scope="col">Actualizar</th>
                                <th class="align-content-center" scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody id="tabla">

                        <?php foreach($query as $data): ?>
						<tr>
                        <th scope="row"><?php echo $data['vchNombreCompleto'];?></th>
							<td><?php echo $data['Cantidad']; ?></td>
                            <td><?php echo $data['fltSubtotal']; ?></td>
                            <td><?php echo $data['dtFecha']; ?></td>
                            <td>
                                <button class="btn btn-success btn-raised" data-toggle="modal" data-target="#frm_sucursal_edita">
                                    <i class="fa fa-refresh ico"></i>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-raised" data-id="<?php echo $data['id_sucursal']; ?>" id="delete_product">
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