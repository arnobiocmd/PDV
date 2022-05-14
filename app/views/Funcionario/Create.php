<div class="conteudo-fluido">
		<div class="rows">	
			<div class="col-12">
				<div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
							<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Inserir contato</span>
							<a href="<?php echo URL_BASE."funcionario"?>" class="btn btn-amarelo float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
					</div>
					<?php 
                       $this->verErro();
                       $this->verMsg();
                       ?>
					<form action="<?php echo URL_BASE ."funcionario/salvar"?>" method="POST">
						<div class="p-5 pb-0 pt-4 width-100 float-left">
						<div id="tab">
							<ul class="tabs">
								<li><a href="#tab-1">Dados Gerais</a></li>
								<li><a href="#tab-2">Endereço</a></li>
							</ul>
							
						<div id="tab-1" class="cx-tab">
								<span class="d-block mt-4 mb-4 h4 border-bottom">Informações básicas</span>
								<div class="rows pb-4">	
								
								<div class="col-6 mb-3">
										<label class="text-label">Nome</label>	
										<input type="text" name="funcionario" value="<?php echo isset($funcionario->funcionario) ? $funcionario->funcionario : null ?>" class="form-campo">
								</div>                                    
								

								<div class="col-3 mb-3">
										<label class="text-label">CPF</label>	
										<input type="text" name="cpf" value="<?php echo isset($funcionario->cpf) ? $funcionario->cpf : null ?>"  class="form-campo mascara-cpf">
								</div>
								
							   <div class="col-3 mb-3">
										<label class="text-label">Fone:</label>	
										<input type="text" name="fone" value="<?php echo isset($funcionario->fone) ? $funcionario->fone : null ?>"  class="form-campo">
								</div>
								<div class="col-3 mb-3">
										<label class="text-label">Celular:</label>	
										<input type="text" name="celular" value="<?php echo isset($funcionario->celular) ? $funcionario->celular : null ?>"  class="form-campo mascara-celular">
								</div>
								

								<div class="col-8 mb-3">
										<label class="text-label">E-mail</label>	
										<input type="text" name="email" value="<?php echo isset($funcionario->email) ? $funcionario->email : null ?>" class="form-campo">
								</div>
															

							</div>
						</div>
												
						<div id="tab-2" class="cx-tab">									
							<span class="d-block mt-4 h4 border-bottom">Endereço</span>										
							<div class="rows pb-4">																					
								<div class="col-2 mb-3">
                            <label class="text-label">Cep</label>	
                            <input type="text" name="cep"  value="<?php echo isset($funcionario->cep) ? $funcionario->cep : null ?>" placeholder="Digite aqui..." class="form-campo busca_cep">
                            </div>
                            
                            <div class="col-4 mb-3">
                                    <label class="text-label">Logradouro</label>	
                                    <input type="text" name="logradouro" value="<?php echo isset($funcionario->logradouro) ? $funcionario->logradouro : null ?>" placeholder="Digite aqui..." class="form-campo rua">
                            </div>
                            <div class="col-2 mb-4">
                                    <label class="text-label">Numero</label>	
                                    <input type="text" name="numero" value="<?php echo isset($funcionario->numero) ? $funcionario->numero : null ?>" placeholder="Digite aqui..." class="form-campo">
                            </div>
                            <div class="col-4 mb-3">
                                     <label class="text-label">Bairro</label>	
                                     <input type="text" name="bairro" value="<?php echo isset($funcionario->bairro) ? $funcionario->bairro : null ?>" placeholder="Digite aqui..." class="form-campo bairro">
                             </div>
                             <div class="col-4 mb-3">
                                     <label class="text-label">Complemento</label>	
                                     <input type="text" name="complemento" value="<?php echo isset($funcionario->complemento) ? $funcionario->complemento : null ?>" placeholder="Digite aqui..." class="form-campo complemento">
                             </div>	
                            
        						 
                             <div class="col-2 mb-2">
                                 <label class="text-label">UF</label>	
                                 <input type="text" name="uf" value="<?php echo isset($funcionario->uf) ? $funcionario->uf : null ?>"   class="form-campo estado"> 
                             </div>                    
                             
                             <div class="col-4 mb-3">
                                     <label class="text-label">Cidade</label>	
                                     <input type="text" name="cidade" value="<?php echo isset($funcionario->cidade) ? $funcionario->cidade : null ?>" placeholder="Digite aqui..." class="form-campo cidade">
                             </div>	
                             <div class="col-2 mb-3">
                                     <label class="text-label">Ibge</label>	
                                     <input type="text" name="ibge" value="<?php echo isset($funcionario->ibge) ? $funcionario->ibge : null ?>"  class="form-campo ibge ">
                             </div>
							</div>
						</div>
												
						
						</div>
						<!--Botao-->
						<div class="mb-5 mt-4 width-100 d-inline-block" style="clear:both">
								<input type="hidden" name="id_funcionario" value="<?php echo isset($funcionario->id_funcionario) ? $funcionario->id_funcionario : null ?>">
								<input type="submit" value="Salvar" class="btn btn-azul btn-grande d-block m-auto">
						 </div>
							
						</div>
						</form>
				</div>
			</div>
		</div>
	</div>
