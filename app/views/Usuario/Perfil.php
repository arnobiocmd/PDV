<div class="conteudo-fluido">
			<div class="caixa">
			<div class="caixa-titulo py-1 d-flex justify-content-space-between">
                <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Usuário: <?php echo $usuario->usuario?></span>
				
             </div>
			 
	<div class="rows">	
		<div class="col-12">
            <div class="col-12 mt-3 mb-3">    				
				<div class="radius-4 p-2  bg-padrao">    				
					<form action="<?php echo URL_BASE . "perfilusuario/salvar"?>" method="POST">
						<div class="rows px-2 pb-3">  	
							<div class="col-6">
								<label class="text-label text-branco">Perfil</label>	
										<select class="form-campo" name="id_perfil">
                                        	<?php foreach($perfis as $perfil){
                                                echo "<option value='$perfil->id_perfil'  > $perfil->perfil</option>";
                                            } ?>      
                                        </select>							</div>
							
							<div class="col-3 mt-4">
								<input type="hidden" value="<?php echo isset($usuario) ? $usuario->id_usuario : "" ?>" name="id_usuario" >	
								<input type="submit" value="Salvar" class="btn btn-verde width-100 text-uppercase">
							</div>
						</div> 
					</form>
				</div>               
			</div>               
			<div class="col-12">
					<div class="tabela-responsiva px-0">
					<?php 
					   $this->verMsg();
					?>
						<table cellpadding="0" cellspacing="0" id="dataTable">
                            <thead>
                                <tr>
                                    <th align="center">Id</th>
                                    <th align="left" >Perfil</th>
                                    <th align="center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                foreach ($lista as $perfil){
                            ?>                      
								<tr>
									<td align="center"><?php echo $perfil->id_perfil ?></td>
									<td align="center"><?php echo $perfil->perfil ?></td>
									<td align="center">
										<a href="<?php echo URL_BASE . "perfilusuario/edit/" .$perfil->id_perfil ?>" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
										<a href="<?php echo URL_BASE . "perfilusuario/excluir/" .$perfil->id_perfil ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
									</td>
								</tr>                    
							<?php } ?>	  	             
								                   
								     					
							</tbody>
						</table>
					</div>
				</div> 
		
    </div>
   </div>
   </div>
   </div>