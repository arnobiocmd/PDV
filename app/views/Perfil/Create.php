<div class="conteudo-fluido">
		<div class="rows">	
			<div class="col-12">
				<div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
						<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Perfil</span>
						<a href="<?php echo URL_BASE ."perfil"?>" class="btn btn-amarelo float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
					</div>
					<?php 
                       $this->verErro();
                       $this->verMsg();
                     ?>
					<form action="<?php echo URL_BASE ."perfil/salvar"?>" method="POST">
					<div class="pt-2 px-5 pb-5 width-100 d-inline-block">
					<div class="border radius-4">
					<span class="d-block p-2 h4 border-bottom">Perfil</span>
                         <div class="rows p-3">
                                <div class="col-3">
                                        <label class="text-label">Perfil</label>
                                        <input type="text" value="<?php echo isset($perfil) ? $perfil->perfil: "" ?>" name="perfil"  class="form-campo" placeholder="Digite o perfil">
                                </div>     
								
								<div class="col-6">
                                        <label class="text-label">Descrição</label>
                                        <input type="text" value="<?php echo isset($perfil) ? $perfil->descricao: "" ?>" name="descricao"  class="form-campo" placeholder="Digite a Descrição">
                                </div> 
                                <div class="col-3 mt-4  pb-5">       
                                   <input type="hidden" name="id_unidade" value="<?php echo isset($unidade) ? $unidade->id_unidade: null ?>">                                  
                                    <input type="submit" value="Salvar" class="btn btn-verde btn-medio width-100">
                				</div> 												
      
                        </div>
				
				</div>
			</div>
			</form>
			</div>
		</div>
	</div>
	</div>