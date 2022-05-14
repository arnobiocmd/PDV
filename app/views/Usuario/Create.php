<div class="conteudo-fluido">
		<div class="rows">	
			<div class="col-12">
				<div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
						<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> CADASTRAR NOVO USUÁRIO</span>
						<a href="lst_Nfeusuario.html" class="btn btn-amarelo float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
					</div>
					<?php 
                       $this->verErro();
                       $this->verMsg();
                     ?>
					<form action="<?php echo URL_BASE ."usuario/salvar"?>" method="POST">
					<div class="pt-2 px-5 pb-5 width-100 d-inline-block">
					<div class="border">
					<span class="d-block p-2 h4 border-bottom">Usuário</span>
                         <div class="rows px-4">
                               
                                <div class="col-4">
                                        <label class="text-label">Usuário</label>
                                        <input type="text" value="<?php echo isset($usuario) ? $usuario->usuario: "" ?>" name="usuario"  class="form-campo">
                                </div>
                                
                               <div class="col-4">
                                        <label class="text-label">Senha</label>
                                        <input type="text" value="<?php echo isset($usuario) ? $usuario->senha: "" ?>" name="senha"  class="form-campo">
                                </div>
                                <div class="col-4">
                                        <label class="text-label">Funcionário</label>
                                        <select class="form-campo" name="id_funcionario">
                                        	<?php foreach($funcionarios as $funcionario){
                                        	    $selecionado = ($funcionario->id_funcioario==$usuario->id_funcionario) ? "selected" : "";
                                                echo "<option value='$funcionario->id_funcionario' $selecionado > $funcionario->funcionario</option>";
                                            } ?>      
                                        </select>
                                </div>                              
                               
                                <!--Botao-->
						<div class="mb-5 mt-4 width-100 d-inline-block" style="clear:both">
								<input type="hidden" name="id_usuario" value="<?php echo isset($usuario->id_usuario) ? $usuario->id_usuario : null ?>">
								<input type="submit" value="Salvar" class="btn btn-azul btn-grande d-block m-auto">
						 </div>											
      
                        </div>
			
             </div>
				</div>
				</form>
			</div>
			
			</div>
		</div>
	</div>
	</div>