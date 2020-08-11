
                
                    <h2>Módulo <span class="badge badge-secondary my-3">USUARIOS
                        </span>
                    </h2>


                    <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-info "  data-toggle="modal" data-target="#frm_user" data-whatever="@mdo">
                        <span class="fa fa-user-plus"></span> Nuevo</button>
                    </div>
                    t
                </div>

                    <table class="table table-sm my-4">
                        <thead class="bg-info">
                            <tr>
                                <th class="back"scope="col">Codigo</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Pregunta secreta</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Roll</th>
                                
                                
                                <th class="align-content-center" scope="col">Actualizar</th>
                                <th class="align-content-center" scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody id="tabla">
                        <?php foreach($query as $data): ?>
						<tr>
							<th scope="row"><?php echo $data['id_usuario'];?></th>
							<td><?php echo $data['vchUser']; ?></td>
							<td><?php echo $data['vchSecret']; ?></td>
                            <td><?php
                             if($data['intEstado']==1){
                                
                                 echo "Activo";

                             }else{
                                echo "Inactivo";
                             }
                            
                            
                            
                            ?></td>
                            <td><?php echo $data['vchRoll'];?></td>
                            
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
        
        <?php include("modal/modal-frm-user.php");?>
