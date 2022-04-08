<script src="<?php echo URL_BASE ?>assets/js/js_venda.js"></script>	

<?php $display = ($itens) ? "display:block" : "display:block" ?>
<section class="pdv-base">
<div class="conteudo-fluido">
	
		<div class="base-pdv">	
		<div class="rows">	
			<div class="col-12">
				<div class=" caixa p-2 bg-title2 border-0">
					<div class="rows">	
						<div class="col-6 d-flex" style="align-items: center;">
							<div class="caixa px-4 mb-0 border-0">
							<small class="text-label pb-0">NOME DO PRODUTO</small>
							<b class="h4 text-roxo d-block mb-1 text-center" id="descricao">Selecione um Produto</b>
							</div>
						</div>				
						<div class="col-6 d-flex" style="align-items: center;">		
								<div class="caixa border-0 p-1 mb-0">				
									<b class="h4 text-roxo d-block mb-1 text-center" id="descricao"> Caixa em Venda</b>							
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<div class="rows">	
			<div class="col-6 d-flex">
				<div class="caixa width-100 p-2 bg-title2 border-0 mb-1">
				<div class="width-100 border-0">
				<div class="rows">

				
					<div class="col-12 postion-relative">
						<div class="caixa border-0 p-1">
							<small class="text-label pb-0 mt-0">Código</small>
							<input id="codigo_produto" name="codigo_produto"  class="form-campo neutro" placeholder="Código">
						</div>
					</div>
					
					<div class="col-12">
					<div class="rows">
						<div class="col-6 d-flex">
							<div class="caixa border-0 p-1 radius-4 text-center">
								<img src="<?php echo URL_IMAGEM ?>img-semproduto.png" name="imagem" id="imagem" class="img-fluido">
							</div>
						</div>
						<div class="col-6">
							<div class="rows">
							<div class="col-6">
								<div class="caixa border-0 p-1">
									<small class="text-label pb-0 text-uppercase mb-0 mt-0">Quantidade</small>
									<input type="number" name="qtde" id="qtde" class="	form-campo neutro text-left" placeholder="00">
								</div>
							</div>
							<div class="col-6">
								<div class="caixa border-0 p-1">
									<small class="text-label pb-0 text-uppercase mb-0 mt-0">Estoque</small>
									<input type="text" name = "estoque" id="estoque" class="form-campo neutro text-left"  readonly="readonly">
									
								</div>
							</div>
							<div class="col-12">
								<div class="caixa border-0 p-1">
									<small class="text-label pb-0 text-uppercase mb-0 mt-0">Unitário</small>
									<input type="text" name="preco" id="preco"  class="form-campo neutro text-left" placeholder="00">
								</div>					
							</div>					
							<div class="col-12">
								<div class="caixa border-0 p-1">
									<small class="text-label pb-0 text-uppercase mb-0 mt-0">Total</small>
									<input type="text" name = "total" id="total" class="form-campo neutro text-left" >
									<input type="hidden" name="id_produto" id="id_produto"  >
									<input type="hidden" id="id_venda" value = "<?php echo $venda->id_venda ?>" name="id_venda"  >
									
								</div>
							</div>
							<form action="">
							<input type="submit" value="finalizar" id="inserir">
							</form>
							
							</div>
						</div>
					  </div>
					  </div>
				  </div>
				  
					
			</div>
			</div>
		</div>
	
	<div class="col-6 d-flex">		
	<div class="caixa width-100 bg-title2 p-2 border-0 mb-1">		
	<div class="caixa width-100 border-0 p-2 mb-1">
		<!--<span class="h5 border-bottom d-block p-1 text-center">DESCRIÇÃO DA COMPRA</span> -->
		<div class="">
		<div class="base-lista">			
			<div class="scroll border-0 px-0 mostra_itens" style="<?php echo $display ?>" >	
				
			<div class="cupom p-0">			
				<div class="border-bottom-dashed"><b class="d-block h5 text-center mb-3">Descrição</b></div>
				<table cellpadding="0" cellspacing="0" class="">
					<thead>
						<tr>
							<th width="5%">Item</th>
							<th width="30%" align="left">Descrição</th>
							<th width="5%">Quant.</th>
							<th width="5%">Preço</th>
							<th width="5%">Total</th>
							<th width="5%">Excluir</th>
						</tr>
					</thead>       
				 
					<tbody role="alert" aria-live="polite" aria-relevant="all" id="itensDaVenda">
					<?php 
						$i=1;
						foreach($itens as $item){ 
							 $qtde += $item->qtde ;
							?>
						<tr class='cor-tab1'>
							<td align="center"> <?php echo $i++ ?></td>
							<td> <?php echo $item->produto ?>   </td>
							<td align="center"> <?php echo $item->qtde ?>  </td>
							<td align="center"> <?php echo $item->valor ?>  </td>
							<td align="center"> <?php echo $item->valor * $item->qtde ?>  </td>					
							<td align="center">
									<a href="javascript:;"  onclick="abrirTelaCancelamento(<?php echo $item->id_item_venda  ?>)" title="Excluir"><i class="fas fa-trash-alt text-vermelho"></i></a></td>
							  
						</tr> 
						
					<?php }
					
					?>
					</tbody>
				</table>
				</div>
			</div>
			</div>
			
			
			
			<div class="semproduto" style="<?php echo ($itens) ? "display:none" : "display:none"  ?>">
				<div class="thumb text-center">
					<img src="<?php echo URL_IMAGEM ?>sem-produto.png"  class="img-fluido">
				</div>
			</div>
		</div>
			
		</div>
		
		<div class="">
			<div class="fechar_total" style="<?php echo $display ?>" >
				<div class="rows">
					<div class="col-12">
						<div class="caixa border-0 p-1 mb-0">
							<div class="rows">
								<div class="col-6">
									<small class="text-label pb-0 text-roxo text-uppercase mb-0">Volumes</small>
										
									<input type="text" name = "volume" id="volume" value="<?php echo $qtde   ?>" class="form-campo neutro text-left" placeholder="0">
									
								</div>
								<div class="col-6">
									<small class="text-label pb-0 text-roxo mb-0 text-uppercase text-right">Total</small>
									<input type="text" name="total_geral" id="total_geral"  placeholder="00" value="<?php echo number_format($venda->total,2,",",".") ?>" class="form-campo neutro fw-700 text-right text-vermelho">
								</div>					
							</div>					
						</div>					
					</div>					
				</div>					
			</div>
		</div>	
	</div>	
						
	</div>
	<div class="col-12">				
				<div class="base-botoes bg-title2 mt-0 radius-4 p-1">  
					<div class="border-0 py-1 text-center mb-0 caixa">  

						<a href="javascript:;"  onclick="chamarTelaPagamento()"   class="d-inline-block btn"><i class="fas fa-check"></i> Finalizar Venda</a>
						<a href="javascript:;" onclick="abrirModal('#cliente')"   class="d-inline-block btn-link"><i class="fas fa-user text-azul"></i> Identificar cliente</a>
						<a href="javascript:;" onclick="abrirModal('#cancelaritem')"  class="d-inline-block btn-link"><i class="fas fa-times text-vermelho"></i> Cancelar item</a>
						<a href="javascript:;" onclick="abrirModal('#cancelarvenda')"  class="d-inline-block btn-link"><i class="fas fa-calendar-times text-laranja"></i> Cancelar venda</a>
						<a href="javascript:;" onclick="abrirModal('#desconto')"  class="d-inline-block btn-link"><i class="fas fa-calculator text-azul"></i> Desconto/ acrescimo</a>
						<a href="javascript:;" onclick="abrirModal('#cancelarnota')"  class="d-inline-block btn-link"><i class="fas fa-times text-vermelho"></i> Cancelamento de nota</a>
						<a href="javascript:;" onclick="abrirModal('#cancelarnota')"  class="d-inline-block btn-link"><i class="fas fa-receipt text-azul"></i> Inutilização de número</a>
						<a href="javascript:;" onclick="fecharCaixa()"  class="d-inline-block btn-link"><i class="fas fa-sign-in-alt text-azul"></i> Fechar Caixa</a>
					</div>	
				</div>	
		
	</div>
</div>
</div>

<!--pesquisar produto-->
<div class="window" id="pesquisa">
	<span class="fechar">X</span>
	<h4 class="d-block text-center">Pesquisar produto</h4>
	<div class="rows p-1">
		<div class="tabela-responsiva px-0">
			<table cellpadding="0" cellspacing="0" id="" width="100%">
				<thead>
					<tr>
						<th align="center">Id</th>
						<th class="text-left" width="25%">Nome</th>
						<th align="center" width="25%">Valor</th>
						<th align="center">Ação</th>
					</tr>
				</thead>
				<tbody>                      
					<tr>
						<td align="center">1</td>
						<td align="left">Panela de pressão </td>
						<td align="center">R$80,00</td>										
						<td align="center">
							<a href="#" class="d-inline-block btn btn-outline-roxo btn-pequeno">Selecionar</a>
						</td>
					</tr>                     
					<tr>
						<td align="center">1</td>
						<td align="left">Panela de pressão </td>
						<td align="center">R$80,00</td>										
						<td align="center">
							<a href="#" class="d-inline-block btn btn-outline-roxo btn-pequeno">Selecionar</a>
						</td>
					</tr>				
				</tbody>
			</table>								
		</div>		
	</div>
</div>


<!--Efetuar Pagamento -->
<div class="window" id="encerrar">
	<span class="fechar">X</span>
	<h4 class="d-block text-center pb-1 border-bottom mb-2">Efetuar pagamento</h4>
	<div class="rows p-1">
		<div class="col-8 d-flex">
		
				<div class="rows bg-padrao" style="justify-content: space-between;align-items: center;">
					<div class="col-4">
						<label class="text-label text-branco">Forma de pagamento</label>
						<select class="form-campo" id="id_forma_pagamento" onchange="mostrar_parcelas()">
						<!--<option value="">Selecione...</option>-->
						<?php 

						foreach($formas_pgto as $forma){
						    echo "<option value='$forma->id_forma_pagamento'>$forma->forma_pagamento</option>";
						}
						?>
							
						</select>
					</div>
					<div class="col-4 postion-relative">
						<label class="text-label text-branco">Valor</label>
						<input type="text" name="" id="valor_pago" value="<?php echo $dados_pagamento->total_restante ?>"  class="form-campo">
					</div>
					
					<div class="col-4 postion-relative">
						<label class="text-label text-branco">Desconto</label>
						<input type="text" name="" id="desconto" value="0.00"  class="form-campo">
						<input type="button" onclick="inserirPagamento()" value="✓" class="btn btn-verde btn-position">
					</div>
					
					
					<div class="col-12 mt-2">
						<div class="tabela-responsiva border-0 radius-0 mb-0 p-0 caixa">
							<div class="rolagem-116">
							<table cellpadding="0" cellspacing="0" width="100%" id="">
								<thead>
									<tr>
										<th>Tipo de pagamento</th>
										<th>Valor</th>
										<th>qtas vezes</th>
									</tr>
								</thead>
								<tbody id="lista_pagamento">
									<?php foreach($pagamentos as $pgto){ ?>
									<tr>
										<td class="text-center"><?php echo $pgto->forma_pagamento ?></td>
										<td class="text-center"><?php echo $pgto->valor ?></td>
										<td class="text-center"><?php echo $pgto->qtde_vezes ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							</div>
							
						</div>
					</div>
					<div class="col-6" id="parcelas" style="display:none">
						<div class="p-1 caixa radius-0 mb-0 d-flex">
								<label class="text-label mt-0">Qtde de parcelas</label>
								<select class="form-campo" id="qtde_vezes">
									<option value='1'>01X </option>
									<option value='2'>02X </option>
									<option value='3'>03X </option>
									<option value='4'>04X </option>
									<option value='5'>05X </option>
								</select>
						</div>
					</div>
					<div class="col d-flex">
						<div class="caixa  border-top text-left base-botoes radius-0 p-1">
								<a  href="<?php echo URL_BASE . "pdv/finalizar/" . $venda->id_venda ?>" class="btn btn-roxo d-inline-block btn-medio">Finalizar</a>	
								<a href="#" class="btn btn-vermelho d-inline-block btn-medio">Cancelar</a>						
						</div>
					</div>
				</div>
			
		</div>
		<div class="col-4 d-flex">
			<div class="tabela-responsiva zebrado tb-g border p-0">
				<table cellpadding="0" cellspacing="0" width="100%">
					<tbody>
						<tr>
							<td class="text-azul">Total venda</td>
							<td class="text-azul text-right"><span id="lbl_total_pagar"><?php echo $venda->total ?></span></td>
						</tr>
					
						<tr>
							<td class="text-azul">Desconto</td>
							<td class="text-azul text-right"><span id="lbl_desconto"><?php echo $venda->desconto ?></span></td>
						</tr>
						<tr>
							<td class="text-azul">Total a receber</td>
							<td class="text-azul text-right"><span id="lbl_total_receber"><?php echo $dados_pagamento->total_receber ?><?php echo $valores->total_receber?></span></td>
						</tr>
						<tr>
							<td class="text-verde">Total recebido</td>
							<td class="text-verde text-right"><span id="lbl_total_recebido"><?php echo $dados_pagamento->total_recebido ?><?php echo $valores->total_recebido?></span></td>
						</tr>
						<tr>
							<td class="text-azul">Restante</td>
							<td class="text-azul text-right"><span id="lbl_total_restante"><?php echo $dados_pagamento->total_restante ?><?php echo $valores->total_restante?></span></td>
						</tr>
						<tr>
							<td class="text-vermelho">Troco</td>
							<td class="text-vermelho text-right"><span id="lbl_troco"></span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!--cancelar item-->
<div class="window pdv" id="cancelaritem">
<span class="fechar">X</span>	
<h4 class="d-block text-center pb-1 border-bottom mb-2">Cancelar item</h4>
	<div class="rows">
		<div class="col-6">
			<label class="text-label">Login</label>			
			<input type="text" id="login_gerente" placeholder="Digite um login" class="form-campo">
		</div>
		<div class="col-6">
			<label class="text-label">Senha</label>			
			<input type="text" id="senha_gerente" placeholder="Digite uma senha" class="form-campo">
		</div>
		
		<div class="col-2 mt-2">
			<input type="text" id="id_item" >		
			<input type="button" onclick="cancelarItem()" value="Confirmar" class="btn btn-roxo">
		</div>							
	</div>	
</div>


<!--Selecionar Parcela -->
<div class="window pdv" id="selecionar_parcelas">
<span class="fechar">X</span>	
<h4 class="d-block text-center pb-1 border-bottom mb-2">Identificar cliente</h4>
	<div class="rows">
		<div class="col-4">
			<label class="text-label">CPF</label>			
			<select class="form-campo" id="qtde_vezes">
				<option value='1'>01X </option>
				<option value='2'>02X </option>
				<option value='3'>03X </option>
				<option value='4'>04X </option>
				<option value='5'>05X </option>
			</select>
		</div>		
		<div class="col-12 border-top mt-3 pt-2">
			<input type="submit" name="" value="Confirmar" class="btn btn-roxo">
		</div>
	</div>
</div>

<!--identificar cliente-->
<div class="window pdv" id="cliente">
<span class="fechar">X</span>	
<h4 class="d-block text-center pb-1 border-bottom mb-2">Identificar cliente</h4>
	<div class="rows">
		<div class="col-4">
			<label class="text-label">CPF</label>			
			<input type="text" name="" placeholder="CPF" class="form-campo">
		</div>
		<div class="col-8 postion-relative">
			<label class="text-label">Nome</label>
			<input type="text" name="" placeholder="Nome cliente" class="form-campo">
		</div>
		<div class="col-12 border-top mt-3 pt-2">
			<input type="submit" name="" value="Confirmar" class="btn btn-roxo">
		</div>
	</div>
</div>




<!--seleciona vendedor-->
<div class="window pdv" id="vendedor">
<span class="fechar">X</span>	
<h4 class="d-block text-center pb-1 border-bottom mb-2">Selecionar vendedor</h4>
	<div class="tabela-responsiva px-0">
			<table cellpadding="0" cellspacing="0" id="" width="100%">
				<thead>
					<tr>
						<th align="center">Id</th>
						<th class="text-left">Vendedor</th>
						<th class="text-left">Ação</th>
					</tr>
				</thead>
				<tbody>                      
					<tr>
						<td align="center">1</td>
						<td align="left">Nome do vendedor </td>									
						<td align="center">
							<a href="#" class="d-inline-block btn btn-outline-roxo btn-pequeno">Selecionar</a>
						</td>
					</tr>      			
				</tbody>
			</table>								
		</div>	
</div>

<!--cancelar item-->
<div class="window pdv" id="fecharCaixa">
<span class="fechar">X</span>	
<h4 class="d-block text-center pb-1 border-bottom mb-2">Fechar o Caixa</h4>
	<div class="rows">
		<div class="col-6">
			<label class="text-label">Login Gerente</label>			
			<input type="text" name="" placeholder="Digite uma senha" class="form-campo">

		</div>
		<div class="col-6">
			<label class="text-label">Senha</label>			
			<input type="text" name="" placeholder="Digite uma senha" class="form-campo">
		</div>	
		<div class="col-6 mt-2">
			<label class="text-label">Caixa</label>			
			<input type="text" name="" placeholder="Número do Item" class="form-campo">
		</div>	
		<div class="col-6 mt-2">
			<label class="text-label">Valor Fechamento</label>			
			<input type="text" name="" placeholder="Número do Item" class="form-campo">
		</div>
		<div class="col-6 mt-2">
					
			<input type="submit" value="Fechar Caixa" class="btn btn-roxo">
		</div>							
	</div>	
</div>




<!--Desconto acrescimo-->
<div class="window pdv" id="desconto">
<span class="fechar">X</span>	
<h4 class="d-block text-center pb-1 border-bottom mb-2">Desconto ou acrescimo</h4>
	<div class="rows">
		<div class="col-8">
			<label class="text-label">Operação</label>			
			<select name="" class="form-campo">
				<option>Desconto em dinheiro</option>
				<option>Desconto percentual</option>
				<option>Acrescimo percentual</option>
				<option>Cancelar desconto ou acrescimo</option>
				<option>Acrescimo em dinheiro</option>
			</select>
		</div>	
		<div class="col-4">
			<label class="text-label">Valor</label>			
			<input type="text" name="" placeholder="Digite valor" class="form-campo">
		</div>
		<div class="col-12 mt-4"><h5 class="d-block text-left pb-1 border-bottom mb-2">Dados gerente/ supervisor</h5></div>
		<div class="col-6">
			<label class="text-label">Login</label>			
			<input type="text" name="" placeholder="Digite um login" class="form-campo">
		</div>
		<div class="col-6">
			<label class="text-label">Senha</label>			
			<input type="text" name="" placeholder="Digite uma senha" class="form-campo">
		</div>	
		<div class="col-12 mt-2">		
			<input type="submit" value="Confirmar" class="btn btn-roxo">
		</div>							
	</div>	
</div>

<!--cancelar venda-->
<div class="window pdv" id="cancelarvenda">
<span class="fechar">X</span>	
<h4 class="d-block text-center pb-1 border-bottom mb-2">Cancelar venda confirmação</h4>
	<div class="msg msg-azul">
		<p><i class="fas fa-exclamation-triangle"></i> Confirmar cancelamento de venda?</p>							
	</div>
	<div class="border-top p-2 px-0 d-flex">
		<a href="" class="btn btn-verde"><i class="fas fa-check"></i> Sim</a>							
		<a href="" class="btn btn-vermelho ml-1"><i class="fas fa-times"></i> Não</a>							
	</div>	
</div>



<!--cqancelamento de nota-->
<div class="window" id="cancelarnota">
	<span class="fechar">X</span>
	<h4 class="d-block text-center">Cancelamento de nota</h4>
	<div class="rows p-1">
		<div class="tabela-responsiva px-0 rolagem-290">
			<table cellpadding="0" cellspacing="0" id="dataTable" width="100%">
				<thead>
					<tr>
						<th align="center">Selecionar</th>
						<th align="center">Série</th>
						<th class="text-left">Número</th>
						<th align="center">Data Emissão</th>
						<th align="center">Chave acesso</th>
						<th align="center">Valor total</th>
					</tr>
				</thead>
				<tbody>                      
					<tr>
						<td align="center"><input type="checkbox" name=""></td>
						<td align="center">001</td>
						<td align="center">00000023345</td>
						<td align="center">30/10/2020</td>
						<td align="center">12365478998765432121234578974545</td>										
						<td align="center">6,00</td>
					</tr>                   
					<tr>
						<td align="center"><input type="checkbox" name=""></td>
						<td align="center">001</td>
						<td align="center">00000023345</td>
						<td align="center">30/10/2020</td>
						<td align="center">12365478998765432121234578974545</td>										
						<td align="center">6,00</td>
					</tr>                   
					<tr>
						<td align="center"><input type="checkbox" name=""></td>
						<td align="center">001</td>
						<td align="center">00000023345</td>
						<td align="center">30/10/2020</td>
						<td align="center">12365478998765432121234578974545</td>										
						<td align="center">6,00</td>
					</tr>      				
				</tbody>
			</table>
		</div>
			<div class="col-12 mt-4"><h5 class="d-block text-left pb-1 border-bottom mb-2">Dados gerente/ supervisor</h5>
			<div class="rows">
				<div class="col-6">
					<label class="text-label">Login (*)</label>			
					<input type="text" name="" placeholder="Digite um login" class="form-campo">
				</div>
				<div class="col-6">
					<label class="text-label">Senha (*)</label>			
					<input type="text" name="" placeholder="Digite uma senha" class="form-campo">
				</div>
				<div class="col-12">
					<label class="text-label">Justificativa (*)</label>			
					<input type="text" name="" placeholder="Digite uma senha" class="form-campo">
				</div>	
				<div class="col-12 mt-2">		
					<input type="submit" value="Confirmar" class="btn btn-roxo">
				</div>	
			</div>
		</div>			
				
	</div>
</div>

<script>
	var total_pagar = "<?php echo $venda->total ?>";
</script>



<!--carregameto-->
<div class="window carregar" id="janela2" style="display:none;text-align:center">	
	<img src="https://mjailton.com.br/testes/erp_oficial/pdv/assets/img/ajax-loader.gif">
	<span>carregando...</span>	
</div>
</div>
</section>