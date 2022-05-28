<div class="conteudo-fluido">
<div class="caixa">
<div class="rows">	
                <div class="col-12">
					<div class="caixa-titulo py-1 d-flex justify-content-space-between">
						<span class="d-flex center-middle"><i class="far fa-list-alt mr-1"></i> Historico de movimento </span>
					</div>
                <div class="col-12">
					<form name="busca" action="<?php echo URL_BASE ."movimento/filtro"?>" method="GET">
                        
                    <div class="px-1">	
						<div class="bg-padrao border radius-4 mt-2 p-3 radius-4">
							<div class="rows">
							<div class="col-6 mb-2">	
                                            <label class="text-label d-block text-branco">Produto</label>
                                            <select class="form-campo" name="id_produto">
												<?php foreach($produtos as $p){
												    echo "<option value='$p->id_produto'>$p->produto</option>";
												}?>
											</select>
                            </div>
							<div class="col-2 mb-2">	
                                 <label class="text-label d-block text-branco">Data inicial</label>
                                 <input type="date" name="data1" class="form-campo">
                             </div>
                             <div class="col-2">	
                                 <label class="text-label d-block text-branco">Data final</label>
                                 <input type="date" name="data2" class="form-campo">
                             </div>
                               
                                <div class="col-2 mt-4">
                                        <input type="submit" value="Pesquisar" class="btn btn-verde text-uppercase width-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
              </div>     
				<?php if(isset($produto)){?>	
                        <div class="px-2 pt-2">	
							  <div class=" mt-2 p-2 radius-4">
							  <div class="rows">
                                  <div class="col-2 d-flex">	
									<div class="border radius-4 text-center width-100">	
									   <span class="text-label d-block border-bottom p-1 bg-cinza">Código </span>
									   <span class="h4 mb-0 text-roxo p-1"><?php echo  $produto->id_produto ?></span>
									</div>
                                  </div>
                                  <div class="col-6 d-flex">
									<div class="border radius-4 text-center width-100">	
									   <span class="text-label d-block border-bottom p-1 bg-cinza">Produto </span>
									   <span class="h4 mb-0 text-roxo p-1"><?php echo  $produto->produto ?></span>
									</div>
                                  </div>
                                  <div class="col-2 d-flex">	
									<div class="border radius-4 text-center width-100">		
									   <span class="text-label d-block border-bottom p-1 bg-cinza">Estoque </span>
									   <span class="h4 mb-0 text-roxo p-1"><?php echo  $produto->estoque ?></span>
									</div>
                                  </div>
                                
                                  <div class="col-2 d-flex">	
									<div class="border radius-4 text-center width-100">		
									   <span class="text-label d-block border-bottom p-1 bg-cinza">Preço </span>
									   <span class="h4 mb-0 text-roxo p-1"><?php echo  $produto->preco ?></span>
									</div>
                                  </div>
                                </div>
                                </div>
                        </div>
                 <?php }?>   
                </div>

		<div class="col-12">
			<div class="px-2">	
               <div class="tabela-responsiva pb-4 mt-3">
                    <table cellpadding="0" cellspacing="0" width="100%" id="dataTable">
                            <thead>
                                    <tr>
                                       <th align="left">Id</th>
                                       <th align="left">Data</th>
                                       <th align="left">Produto</th>
                                       <th align="left">Tipo</th>
                                       <th align="left">Quantidade</th>
                                       <th align="left">Saldo</th>
                                       <th align="left">Histórico</th>
                                    </tr>
                            </thead>
                            <tbody>
                       <?php foreach($lista as $mov){ ?>                                                                     
                             <tr>
								<td align="center"><?php echo $mov->id_movimento ?></td>
                                <td align="left"><?php echo databr($mov->data_movimento) ?></td>
                                <td align="left"><?php echo $mov->produto ?></td>
                                <td align="left"><?php echo $mov->tipo_movimento ?></td>
                                <td align="left"><?php echo $mov->qtde_movimento ?></td>
                                <td align="left"><?php echo $mov->saldoestoque ?></td>
                                <td align="left"><?php echo $mov->descricao ?></td>
                             </tr>                                  
                        <?php }?>                                 
                                             						
                        </tbody>
                    </table>
								
                        </div>

            </div>
        </div>

        </div>
  </div>