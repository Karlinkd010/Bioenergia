
                <div class="container-fluid">
                    <h2>Módulo <span class="badge badge-secondary my-3">DEPARTAMENTO
                        </span></h2>
                    
                        
                        <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-warning "  data-toggle="modal" data-target="#frm_departamento" data-whatever="@mdo">
                        <span class="fa fa-user-plus"></span> Nuevo</button>
                    </div>
                    <div class="col ">


                    </div>
                    <div class="col">
                        <label for="sel">Mostrar por Area:</label>
                        <select  id="sel"class="form-control">
                        <option selected>Selecciona... <option>
                        <?php foreach($query as $data2): ?>
                              <option value="<?php echo $data2['id_area'];?>"><?php echo $data2['vchNombre'];?></option>
                        <?php endforeach;?>
                        </select>
                    </div>
                </div>
                    
                    
                    
                    
                    <table class="table table-sm my-4">
                        <thead class="bg-warning">
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Area</th>
                                
                                <th class="align-content-center" scope="col">Actualizar</th>
                                <th class="align-content-center" scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody id="tabla">

                        <?php foreach($q1 as $data): ?>
						<tr>
							<th scope="row"><?php echo $data['id_departamento'];?></th>
							<td><?php echo $data['vchNombre']; ?></td>
							<td><?php echo $data['area']; ?></td>
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
        <?php include("modal/modal-frm-departamento.php");?>