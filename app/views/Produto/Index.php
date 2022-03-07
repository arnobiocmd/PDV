<div class="conteudo-fluido">
			<div class="caixa">
			<div class="caixa-titulo py-1 d-flex justify-content-space-between">
                <span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Lista de produto</span>
				<div>
					<a href="<?php echo URL_BASE ."produto/create"?>" class="btn btn-verde  d-inline-block"><i class="fas fa-plus-circle mb-0"></i> Adicionar novo</a>
					<a href="" class="btn btn-amarelo filtro mx-1 d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
				</div>
             </div>
			 
	<div class="rows">	
		<div class="col-12">
            <div class="col-12 mt-3 mb-3">    				
				<div class="radius-4 p-2 mostraFiltro bg-padrao">    				
					<form action="" method="">
						<div class="rows px-2 pb-3">  	
							<div class="col-9">
								<label class="text-label text-branco">Empresa</label>	
								 <input type="text" value="" name="razao_social" placeholder="Digite aqui..." class="form-campo">
							</div>
							<div class="col-3 mt-4">	
								<input type="submit" value="Pesquisar" class="btn btn-verde width-100 text-uppercase">
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
						<table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
                            <thead>
                                <tr>
                                    <th align="left">Id</th>
                                    <th align="left" width="16">Imagem</th>
                                    <th align="left">Produto</th>
									<th align="left">Unidade</th>
                                    <th align="left">Preço</th>
                                    <th align="left">Estoque Mínimo</th>
                                    <th align="left">Estoque</th>
                                    <th align="left">Editar</th>
                                    <th align="left">Excluir</th>
								</tr>
                            </thead>
                            <tbody> 
                            <?php foreach($lista as $produto){
                                $imagem = ($produto->imagem) ? $produto->imagem : "semproduto.png";
                             ?>                             
                             <tr>
								<td align="center"><?php echo $produto->id_produto ?></td>
								<td align="center"><img src="<?php echo URL_IMAGEM .$imagem ?>" class="img-fluido"></td>
								<td align="center"><?php echo $produto->produto ?></td>
								<td align="center"><?php echo $produto->unidade ?></td>
								<td align="center"><?php echo moedaBr($produto->preco) ?></td>
								<td align="center"><?php echo $produto->estoque_minimo ?></td>
								<td align="center"><?php echo $produto->estoque ?></td>
								<td align="center">
								<a href="<?php echo URL_BASE."produto/edit/". $produto->id_produto ?>" class="d-inline-block btn btn-outline-roxo btn-pequeno img-fluido">
								<i class="fas fa-edit"></i> Editar</a>                              </td>									
								<td align="center">
									<a href="javascript:;" onclick="return excluir(this)" data-entidade ="produto" data-id="<?php echo $produto->id_produto ?>" class="d-inline-block btn btn-outline-vermelho btn-pequeno"><i class="fas fa-trash-alt"></i> Excluir</a> 
								 </td>
							</tr>   
							<?php }?>                          
                                                     
                                                   						
                        </tbody>
                    </table>
					</div>
				</div> 
		
    </div>
   </div>
   </div>
   </div>