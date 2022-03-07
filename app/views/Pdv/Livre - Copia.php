<?php $display = ($itens) ? "display:block" : "display:block" ?>
<section class="conteudo-fluido">
	
		<div class="base-pdv">	
		<div class="rows">	
			<div class="col-12">
				<div class="caixa p-2 bg-title2 border-0">
					<div class="caixa px-4 mb-0 border-0">
					<small class="text-label pb-0">NOME DO PRODUTO</small>
					<b class="h4 text-roxo d-block mb-1 text-center" id="descricao">Selecione um Produto</b>
					</div>
				</div>
			</div>
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
								<img src="<?php echo URL_IMAGEM ?>semproduto.png" name="imagem" id="imagem" class="img-fluido">
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
								</div>
							</div>
							
							
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
		
			
			
			
			<div class="semproduto" >
				<div class="thumb text-center">
					<img src="<?php echo URL_IMAGEM ?>sem-produto.png"  class="img-fluido">
				</div>
			</div>
		</div>
			
		</div>
		
		<div class="">
			<div class="fechar_total" >
				<div class="rows">
					<div class="col-6 d-flex">		
						<div class="caixa border-0 p-1 mb-0">				
							<b class="h4 text-roxo d-block mb-1 text-center" id="descricao"> Caixa Livre</b>
							<a href="<?php echo URL_BASE . "pdv" ?>"     class="d-inline-block btn-link"><i class="fas fa-user text-azul"></i> Iniciar Venda</a>
														
						</div>
					</div>
					
					<div class="col-6">
						<div class="caixa border-0 p-1 mb-0">
							<div class="rows">
								<div class="col-6">
									<small class="text-label pb-0 text-roxo text-uppercase mb-0">Volumes</small>
									<input type="text" name = "volume" id="volume" class="form-campo neutro text-left" placeholder="R$000,00">
									
								</div>
								<div class="col-6">
									<small class="text-label pb-0 text-roxo mb-0 text-uppercase text-right">Total</small>
									<input type="text" name="total_geral" id="total_geral"  placeholder="00"  class="form-campo neutro fw-700 text-right text-vermelho">
								</div>					
							</div>					
						</div>					
					</div>					
				</div>					
			</div>
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


<!--carregameto-->
<div class="window carregar" id="janela2" style="display:none;text-align:center">	
	<img src="https://mjailton.com.br/testes/erp_oficial/pdv/assets/img/ajax-loader.gif">
	<span>carregando...</span>	
</div>

</section>