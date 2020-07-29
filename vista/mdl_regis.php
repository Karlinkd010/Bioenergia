
                
                    <h2>Módulo <span class="badge badge-secondary my-3">REGISTRO DE PERSONAL
                        </span>
                    </h2>


                    <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-info "  data-toggle="modal" data-target="#frm_persona" data-whatever="@mdo">
                        <span class="fa fa-user-plus"></span> Nuevo</button>
                    </div>
                    <div class="col ">


                    </div>
                    <div class="col">
                        <label for="sel">Mostrar por Sucursal:</label>
                        <select  id="sel"class="form-control">
                        <option selected>Selecciona... <option>
                        <?php foreach($query1 as $data2): ?>
                              <option value="<?php echo $data2['id_sucursal'];?>"><?php echo $data2['vchDireccion'];?></option>
                        <?php endforeach;?>
                        </select>
                    </div>
                </div>

                    
   

                    



                    
                    <table class="table table-sm my-4">
                        <thead class="bg-info">
                            <tr>
                                <th class="back"scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Clave</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Rfc</th>
                                <th scope="col">Sucursal</th>
                                <th class="align-content-center" scope="col">Actualizar</th>
                                <th class="align-content-center" scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody id="tabla">
                        <?php foreach($query as $data): ?>
						<tr>
							<th scope="row"><?php echo $data['id_persona'];?></th>
							<td><?php echo $data['vchNombreCompleto']; ?></td>
							<td><?php echo $data['vchClave_electoral']; ?></td>
                            <td><?php echo $data['vchCorreo'];?></td>
                            <td><?php echo $data['intTelefono'];?></td>
                            <td><?php echo $data['vchRfc'];?></td>
                            <td><?php echo $data['vchDireccion'];?></td>
                            <td>
                                <button class="btn btn-success btn-raised" data-toggle="modal" 
                                data-target="#frm_persona_edita"
                                data-id="<?php echo $data['id_persona']?>" 
                                data-nombre="<?php echo $data['vchNombreCompleto']?>" 
                                data-clave="<?php echo $data['vchClave_electoral']?>" 
                                data-correo="<?php echo $data['vchCorreo']?>"
                                data-tel="<?php echo $data['intTelefono']?>"
                                data-rfc="<?php echo $data['vchRfc']?>"   
                                data-id_s="<?php echo $data['id_sucursal1']?>"  >
                                
                                <i class="fa fa-refresh ico"></i>
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-raised" data-id="<?php echo $data['id_persona']; ?>" id="btn-elimina-persona">
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
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        
        <?php include("modal/modal-frm-persona.php");?>


