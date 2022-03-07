<div class="conteudo-fluido">
		<div class="rows">	
			<div class="col-12">
				<div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
						<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> CADASTRAR NOVO PRODUTO</span>
						<a href="<?php echo URL_BASE ."produto" ?>" class="btn btn-amarelo float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
					</div>
					<?php 
                       $this->verErro();
                       $this->verMsg();
                     ?>
					<form action="<?php echo URL_BASE ."produto/salvar"?>" method="POST" enctype="multipart/form-data">
					<div class="pt-2 px-5 pb-5 width-100 d-inline-block">
					<div class="border px-4 radius-4 pt-4">
                         <div class="rows">
							<div class="col-12">
								<div class="rows">
									<div class="col-4 text-center m-auto mt-1">
										<div class="campo-upload border radius-4">
											<label for="arquivo">
											<?php 
											     $imagem = ($produto->imagem) ? $produto->imagem : "img-semproduto.png";
											?>
												<img src="<?php echo URL_IMAGEM .$imagem ?>" id="imgUp" class="img-fluido">
												<span>Inserir produto</span>
											</label>
											<input type="file" name="arquivo" id="arquivo" onchange="pegaArquivo(this.files)"> 
										</div>
									</div>
								   
									<div class="col-8">
									<div class="rows">
										<div class="col-12">
											<label class="text-label">Titulo do produto</label>
											<input type="text" value="<?php echo isset($produto) ? $produto->produto: "" ?>" name="produto"  class="form-campo">
										
										</div>
										<?php 
										      $id_unidade = ($produto->id_unidade) ? $produto->id_unidade : NULL;
										      $cod_cfop = ($produto->cfop) ? $produto->cfop : NULL;
                                        ?>
										<div class="col-6">
												<label class="text-label">Unidade</label>
												<select class="form-campo" name="id_unidade">
												    <?php foreach($unidades as $u){
												        $selecionado = ($id_unidade == $u->id_unidade) ? "selected"  : "";
												        echo "<option value='$u->id_unidade' $selecionado>$u->unidade</option>";
												    }?>  
												</select>
										</div>                              
									   
										<div class="col-6">
												<label class="text-label">Preço atual</label>
												<input type="text" name="preco" value="<?php echo isset($produto) ? $produto->preco: "" ?>"  class="form-campo">
										</div>

										<div class="col-12">	
											<span class="text-label">CFOP</span>
											<select class="form-campo menor" name="cfop">
												<?php foreach ($cfop as $key => $cfops) {
													$selecionado = ($cod_cfop == $cfops->codigo_cfop) ? "selected" : null;
													echo "<option value='$cfops->codigo_cfop' $selecionado>$cfops->codigo_cfop - $cfops->desc_cfop</option>";
												}

												?>
												
											</select>                            
										</div>
										<!--<div class="col-3">	
											<span class="text-label">Exceção tabela IPI</span>
											<select class="form-campo menor" name="extipi">
													<option value="0" selected="selected"></option>
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option> 								
											</select>                            
										</div>-->
										<!--<div class="col-4">	
											<span class="text-label">Exceção tabela IPI</span>
											<select class="form-campo menor" name="extipi">
													<option value="0" selected="selected"></option>
													<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option> 
													
											</select>                            
										</div>-->
										<!--<div class="col-8">
												<label class="text-label">Código Benef. Fiscal na UF</label>
												<input type="text" value="" name="cbenef" placeholder="Digite aqui..." class="form-campo menor">
										</div>-->
										
										<div class="col-4">                        
												<small class="text-label">Referência EAN/GTIN</small>
												<input type="text" value="" class="form-campo menor" name="gtin">
										</div>
										<div class="col-4">
												<label class="text-label">NCM</label>
												<input type="text" value="<?php echo isset($produto) ? $produto->ncm : null?>" name="ncm" placeholder="Digite aqui..." class="form-campo menor">
										</div>
										<div class="col-4">
												<label class="text-label">Código CEST</label>
												<input type="text" value="" name="cest" placeholder="Digite aqui..." class="form-campo menor">
										</div>
									<div class="col-12 mt-4  pb-5">
										<input type="hidden" name="id_produto" value="<?php echo isset($produto) ? $produto->id_produto: null ?>">
										<input type="submit" value="Salvar alterações" class="btn btn-verde btn-medio d-block m-auto">
									</div> 
                                         												
									</div>
									</div>
								</div>
							</div>
                        </div>
				
                         
				</div>
			</div>
			</form>
			</div>
		</div>
	</div>
	</div>
	
	<!--<script>
		function pegaArquivo(files){
			var file = files[0];
			const fileReader = new FileReader();
			fileReader.onloadend = function(){
				$("#imgUp").attr("src", fileReader.result);
			}
			fileReader.readAsDataURL(file);
		}
	</script>-->