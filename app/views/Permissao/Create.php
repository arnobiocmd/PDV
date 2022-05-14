<div class="rows">	
                <div class="col-12">
                <div class="caixa">
                   <div class="p-2 py-1 bg-title text-light text-uppercase h4 mb-0 text-branco d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Cadastro de Permissão </span>
					
                   </div> 

				<div class="p-1">
					<?php 
					   $this->verErro();
					   $this->verMsg();
					?>
				</div>				   
					<form action="<?php echo URL_BASE ."permissao/salvar" ?>" method="POST">
                        
                    <div class="px-2 pt-2">	
						<div class="bg-padrao border radius-4 mt-2 p-3 radius-4">
							<div class="rows">
                                <div class="col-2">	
                                        <label class="text-label d-block text-branco">Permissão</label>
                                        <input type="text" name="permissao" value="" class="form-campo">
                                </div>
                                <div class="col-8">	
                                        <label class="text-label d-block text-branco">Descrição</label>
                                        <input type="text" name="descricao" value="" class="form-campo">
                                </div>
                                <div class="col-2 mt-1 pt-1">
                                        <input type="submit" value="Inserir" class="btn btn-verde text-uppercase width-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
              </div>

		<div class="col-12 mt-3">
				<div class="px-2">          
                    <div class="tabela-responsiva pb-4">
                    <table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
                            <thead>
                                    <tr>
                                       <th align="center" width="5%">Id</th>
                                       <th align="left">Status</th>
                                       <th align="left">Descrição</th>
                                       <th align="center" width="70">Editar</th>
                                       <th align="center" width="70">Excluir</th>
                                    </tr>
                            </thead>
                            <tbody> 
                         <?php foreach($lista as $processo){?>                                     
                             <tr>
                                <td align="center"><?php echo $processo->id_permissao ?></td>
                                <td align="center"><?php echo $processo->permissao ?></td>       
                                <td align="center"><?php echo $processo->descricao ?></td>                      											                                   											
          						<td align="center"><a href="<?php echo URL_BASE ."tipomovimento/edit/" .$processo->id_permissao?>" class="d-inline-block btn btn-outline-roxo btn-pequeno"><i class="fas fa-edit"></i> Editar</a>                              </td>									
                                <td align="center"><a href="javascript:;" onclick="return excluir(this)" data-entidade ="permissao" data-id="<?php echo $processo->id_permissao ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a>                                </td>
                               </tr>                                        
                        <?php } ?>                  
                    
                                            						
                        </tbody>
                     </table>
								
                        </div>
                 </div>
                </div>

        </div>