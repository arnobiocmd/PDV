<div class="conteudo-fluido">
			<div class="caixa">
			<div class="caixa-titulo py-1 d-flex justify-content-space-between">
                <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de Perfil - <?php echo $perfil->perfil?></span>
				
             </div>
			 
	<div class="rows">	
		<div class="col-12">
            <div class="col-12 mt-3 mb-3">    				
				<div class="radius-4 p-2  bg-padrao">    				
					<form action="<?php echo URL_BASE . "perfilpermissao/salvar"?>" method="POST">
						<div class="rows px-2 pb-3">  	
							<div class="col-6">
								<label class="text-label text-branco">Permissão</label>	
										<select class="form-campo" name="id_permissao">
                                        	<?php foreach($permissoes as $permissao){
                                                echo "<option value='$permissao->id_permissao'  > $permissao->permissao</option>";
                                            } ?>      
                                        </select>							</div>
							
							<div class="col-3 mt-4">
								<input type="hidden" value="<?php echo isset($perfil) ? $perfil->id_perfil : "" ?>" name="id_perfil" >	
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
                                    <th align="left" >Permissão</th>
                                    <th align="center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($lista as $perfil){
                            ?>                      
								<tr>
									<td align="center"><?php echo $perfil->id_perfil ?></td>
									<td align="center"><?php echo $perfil->permissao ?></td>
									<td align="center">
										<a href="<?php echo URL_BASE . "perfil/edit/" .$perfil->id_perfil ?>" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-edit"></i> Editar</a>
										<a href="<?php echo URL_BASE . "perfil/excluir/" .$perfil->id_perfil ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>
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