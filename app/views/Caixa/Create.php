<div class="conteudo-fluido">
		<div class="rows">	
			<div class="col-12">
				<div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
						<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Abertura de Caixa</span>
					</div>
					
					<form action="<?php echo URL_BASE ."caixa/abrir"?>" method="POST">
					<div class="pt-2 px-5 pb-5 width-100 d-inline-block">
					
					<?php 
                       $this->verErro();
                       $this->verMsg();
                     ?>
					<div class="border radius-4">
                         <div class="rows p-4">
							 <div class="col-6">
									<div class="rows">
										<div class="col-12">
												<label class="text-label grande">Usuário</label>
												<input type="text" value="<?php echo isset($produto) ? $produto->produto: "" ?>" name="usuario"  class="form-campo grande" placeholder="Digite o usiário">
										</div>
										<div class="col-12">
												<label class="text-label grande">Senha</label>
												<input type="text" value="<?php echo isset($produto) ? $produto->produto: "" ?>" name="senha"  class="form-campo grande" placeholder="Digite dua senha">
										</div>                                                               
										<div class="col-12">
												<label class="text-label grande">Número Caixa</label>
												<select class="form-campo grande" name="id_caixa_numero">
													<?php foreach($numeros as $n){
														echo "<option value='$n->id_caixa_numero '  > $n->descricao</option>";
													} ?>      
												</select>
										</div>                            
									   
										<div class="col-12">
											<label class="text-label grande">Valor em Caixa</label>
												<input type="text" name="valor_abertura" value="<?php echo isset($produto) ? $produto->preco: "" ?>"  class="form-campo grande" placeholder="Digite o valor">
										
										</div>
										<div class="col-12 mt-4  pb-5 text-right">                   
											<a href="<?php echo URL_BASE ?>" class="btn btn-amarelo d-inline-block btn-grande"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>                
											<input type="submit" value="Abrir caixa" class="btn btn-verde btn-grande d-inline-block">
										</div> 	
									</div>
							</div>
							
							 <div class="col-6">
								<img src="<?php echo URL_BASE ."assets/img/img-abertura-caixa.png"?>" class="img-fluido">
							 </div>
                        </div>
				
				</div>
			</div>
			</form>
			</div>
		</div>
	</div>
	</div>