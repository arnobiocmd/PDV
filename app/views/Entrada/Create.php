
<script src="<?php echo URL_BASE ."assets/js/js_entrada.js"?>"></script>		
	<div class="conteudo-fluido">
		<div class="caixa">
            <div class="caixa-titulo py-1 d-flex justify-content-space-between">
                <span class="d-flex center-middle"><i class="fas fa-arrow-right mr-1"></i>  FILTRAR ENTRADA AVULSA </span>
				 <div>
					<a href="" class="btn btn-amarelo filtro mx-1 d-inline-block"><i class="fas fa-filter"></i> Filtrar</a>
				</div>
			</div>	
            <form action="" method="Post">  								
                <div class="rows">	  	

                    <div class="col-12 mb-0">
						<form name="busca" action="" method="post">                        
                        <div class="px-3">
							  <div class="mostraFiltro bg-padrao mt-2 p-2 radius-4">
							  <div class="rows">
                                        <div class="col-3">	
                                            <label class="text-label d-block text-branco">Data 1</label>
                                            <input type="date" name="categoria" value="" class="form-campo">
                                        </div>
                                        <div class="col-3">	
                                            <label class="text-label d-block text-branco">Data 2</label>
                                            <input type="date" name="categoria" value="" class="form-campo">
                                        </div>
                                        <div class="col-4">	
                                            <label class="text-label d-block text-branco">Produto</label>
                                            <select class="form-campo">
												<option>Opção</option>
												<option>Opção</option>
												<option>Opção</option>
											</select>
                                        </div>
                                        <div class="col-2 mt-4">
                                                <input type="submit" value="Pesquisar" class="btn btn-roxo text-uppercase">
                                        </div>
                                </div>
                                </div>
							</div>
						</form>
					</div>
					
                <div class="col-12 p-4">
                   <div class="caixa mb-3 border mt-0">
                            <div class="h5 bg-title2 d-inline-block width-100 py-1 px-3 text-branco text-uppercase">
                                <span class="d-inline-block"><i class="fas fa-arrow-right"></i> Itens </span>
                            </div>			   
                            <div class="col-12 mb-3">
                            <div class="border p-3 radius-4 pb-4">
                                <div class="rows">
                                    <div class="col-6 position-relative">
										<label class="text-label">Produto</label>
					
										<input type="text" id="produto"  class="form-campo">
										
                                    </div>
                                    <div class="col-2">
										<label class="text-label">Valor</label>
										<input type="text" id="preco" class="form-campo">
                                    </div>
                                    <div class="col-2">
										<label class="text-label">Qtde</label>
										<input type="text" value="1" id="qtde" class="form-campo">
                                    </div>

                                    <div class="col-2 mt-4">
                                    	<input type="hidden" id="id_produto" name="id_produto">
                                       <input type="button" value="Inserir" class="btn btn-verde width-100" id="btnInserir">
                                    </div>
                                </div>
                                </div>

                            </div>
							<div class="col-12 mb-3">
								<div class="pb-4">
									<div class="tabela-responsiva sm tborder tborder pb-3 p-0 border">  
											<table cellpadding="0" cellspacing="0" class="mb-0 table-bordered ">
												<thead>
												   <tr>
													  <th align="center">Item</th>
													  <th align="center">Data</th>
													  <th align="left" width="290">Produto</th>
													  <th align="center">Qtde</th>      
													  <th align="center">Valor</th>      
													  <th align="center">Subtotal</th> 
													</tr>
												</thead>
												<tbody id="lista_entradas"> 
												<?php 
											     $total = 0;
											     foreach($lista as $entrada) {
											         $total += $entrada->subtotal_entrada;
											    ?>
													 <tr> 
														  <td align="center"><?php echo $entrada->id_entrada ?></td>
    													  <td align="center"><?php echo databr($entrada->data_entrada) ?></td>
    													  <td align="left" ><?php echo $entrada->produto ?></td>  
    													  <td align="center"><?php echo $entrada->qtde_entrada ?></td>   
    													  <td align="center"><?php echo $entrada->valor_entrada ?></td>      
    													  <td align="center"><?php echo $entrada->subtotal_entrada ?></td>                                                   
													</tr> 
												<?php } ?> 
													 <tr> 
														 <td align="right" colspan="6"><b>Total:</b> <span class="text-verde minimo-font" id="total_entrada">R$ <?php  echo $total ?></span></td>                                                 
													</tr>    	
												</tbody>
											</table>
									</div>	            
								</div>	            
                            </div>	            
                        </div>            
                    </div>
               
                </div>
				
        </form>		
</div>
</div>
