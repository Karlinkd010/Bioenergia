
                <div class="container-fluid">
                    <h2>Módulo <span class="badge badge-secondary my-3">SUCURSALES
                        </span></h2>
                    <button type="button" class="btn btn-primary my-3"  data-toggle="modal" data-target="#frm_sucursal" data-whatever="@mdo">
                    <span class="fa fa-building"></span> Nuevo</button>
                    <table class="table table-sm my-4">
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Correo Electronico</th>
                                <th scope="col">Telefono</th>
                                <th class="align-content-center" scope="col">Actualizar</th>
                                <th class="align-content-center" scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody id="tabla">

                        <?php foreach($query as $data): ?>
						<tr>
							<th scope="row"><?php echo $data['id_sucursal'];?></th>
							<td><?php echo $data['vchDireccion']; ?></td>
							<td><?php echo $data['vchCorreo']; ?></td>
                            <td><?php echo $data['intTelefono'];?></td>
                            <td>
                                <button class="btn btn-success btn-raised" data-toggle="modal" 
                                data-target="#frm_sucursal_edita"
                                data-id="<?php echo $data['id_sucursal']?>" 
                                data-direccion="<?php echo $data['vchDireccion']?>" 
                                data-correo="<?php echo $data['vchCorreo']?>" 
                                data-telefono="<?php echo $data['intTelefono']?>">
                                <i class="fa fa-refresh ico"></i>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-raised" data-id="<?php echo $data['id_sucursal']; ?>" id="btn-elimina-sucursal">
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
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->

        <?php include("modal/modal-frm-sucursal.php");?>

