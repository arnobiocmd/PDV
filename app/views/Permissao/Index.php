<div class="conteudo-fluido">
			<div class="caixa">
			<div class="caixa-titulo py-1 d-flex justify-content-space-between">
                <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de Permissão</span>				
             </div>
			 
	<div class="rows">	
		<div class="col-12">
                          
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
                                    <th align="center" >Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($lista as $permissao){
                            ?>                      
								<tr>
									<td align="center"><?php echo $permissao->id_permissao ?></td>
									<td align="center"><?php echo $permissao->permissao ?></td>
									<td align="center"><?php echo $permissao->descricao ?></td>
									
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