<div class="conteudo-fluido">
<div class="caixa">
		<div class="rows">	
			<div class="col-12">
					<div class="caixa-titulo py-1 d-inline-block width-100">
						<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i> Fechamento do Caixa</span>
						</div>
					<?php 
                       $this->verErro();
                       $this->verMsg();
                     ?>
				<form action="<?php echo URL_BASE ."caixa/fechar"?>" method="POST">		
					<div class="pt-2 px-5 pb-5 width-100 d-inline-block">
					<div class="border mb-2">
					<span class="d-block p-2 h4 border-bottom">Resumo</span>
                         <div class="rows px-4">
                                <div class="col-3 mb-3">
                                        <label class="text-label">Faturamento</label>
                                        <input type="text" readonly value="<?php echo isset($valores) ? $valores->faturamento: "" ?>" name="faturamento"  class="form-campo">
                                </div>
                                <div class="col-2 mb-3">
                                        <label class="text-label">Troco no Caixa</label>
                                        <input type="text" readonly value="<?php echo isset($valores) ? $valores->troco: "" ?>" name="troco"  class="form-campo">
                                </div>                             
                                <div class="col-2 mb-3">
                                        <label class="text-label">Retirada Superior</label>
                                        <input type="text" name="sangria" readonly value="<?php echo isset($valores) ? $valores->sangria: "" ?>"  class="form-campo">
                                </div>
                                <div class="col-2 mb-3">
                                        <label class="text-label">Suplemento</label>
                                        <input type="text" name="suplemento" readonly value="<?php echo isset($valores) ? $valores->suplemento: "" ?>"  class="form-campo">
                                </div>
                                <div class="col-2 mb-3">
                                        <label class="text-label">Total em Caixa</label>
                                        <input type="text" name="total_em_caixa" readonly value="<?php echo isset($valores) ? $valores->total: "" ?>"  class="form-campo">
                                </div>
                                 												
       					</div>
				
				</div>
				
			
				<div class="border mb-3">
					<div class="tabela-responsiva p-0">
					<?php 
					   $this->verMsg();
					?>
						<table cellpadding="0" cellspacing="0" class="mb-0">
                            <thead>
                                <tr>
                                    <th align="center" width="20">Id</th>
                                    <th align="left" >Forma de Pagamento</th>
                                     <th align="center" >Total</th>
                                    <th align="center" width="150">Valor Informado</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($formas as $f){ ?>                      
								<tr>
									<td align="center"><?php echo $f->id_forma_pagamento  ?></td>
									<td align="left"><?php echo $f->forma_pagamento ?></td>
									<td align="center"><?php echo $f->total ?></td>
									<td align="center"><input type="text" name="total[<?php echo $f->id_forma_pagamento ?>]" class="form-campo limpo"> </td>									
								</tr>                    
							<?php } ?>	             
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="border">
					<span class="d-block p-2 h4 border-bottom">Resumo</span>
                         <div class="rows px-4">
                                <div class="col-3">
                                        <label class="text-label">Login</label>
                                        <input type="text" " name="usuario"  class="form-campo">
                                </div>
                                <div class="col-3">
                                        <label class="text-label">Senha</label>
                                        <input type="password" name="senha"  class="form-campo">
                                </div>                            
                                
                                <div class="col-3 mt-4  pb-5">                                   
                                         <input type="submit" value="Fechar Caixa" class="btn btn-verde btn-medio d-block width-100">
                                </div>
                                 												
       					</div>
				
				</div>
				
				
				
                                
				
              
			</div>
		 </form>
			</div>
		</div>
	</div>
	</div>