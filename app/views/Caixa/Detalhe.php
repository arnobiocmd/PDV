<div class="conteudo-fluido">
		<div class="rows">	
			<div class="col-12">
				<div class="caixa">
					<div class="caixa-titulo py-1 d-inline-block width-100">
						<span class="h5  pt-1 mb-0 d-inline-block"><i class="far fa-list-alt"></i>Detalhes do Caixa</span>
						<a href="lst_Nfevalores.html" class="btn btn-amarelo float-right"><i class="fas fa-arrow-left mb-0"></i> Voltar</a>
					</div>
					<?php 
                       $this->verErro();
                       $this->verMsg();
                     ?>
				<form action="<?php echo URL_BASE ."caixa/fechar"?>" method="POST">		
					<div class="pt-2 px-5 pb-5 width-100 d-inline-block">
					<div class="border px-4">
					<span class="d-block mt-4 h4 border-bottom">Resumo</span>
                         <div class="rows">
                                <div class="col-3">
                                        <label class="text-label">Faturamento</label>
                                        <input type="text" readonly value="<?php echo isset($valores) ? $valores->faturamento: "" ?>" name="faturamento"  class="form-campo">
                                </div>
                                <div class="col-2">
                                        <label class="text-label">Troco no Caixa</label>
                                        <input type="text" readonly value="<?php echo isset($valores) ? $valores->troco: "" ?>" name="troco"  class="form-campo">
                                </div>                             
                                <div class="col-2">
                                        <label class="text-label">Retirada Superior</label>
                                        <input type="text" name="sangria" readonly value="<?php echo isset($valores) ? $valores->sangria: "" ?>"  class="form-campo">
                                </div>
                                <div class="col-2">
                                        <label class="text-label">Suplemento</label>
                                        <input type="text" name="suplemento" readonly value="<?php echo isset($valores) ? $valores->suplemento: "" ?>"  class="form-campo">
                                </div>
                                <div class="col-2">
                                        <label class="text-label">Total em Caixa</label>
                                        <input type="text" name="total_em_caixa" readonly value="<?php echo isset($valores) ? $valores->total: "" ?>"  class="form-campo">
                                </div>
                                 												
       					</div>
				
				</div>
				
			
				<div class="col-12">
					<div class="tabela-responsiva px-0">
					<?php 
					   $this->verMsg();
					?>
						<table cellpadding="0" cellspacing="0" >
                            <thead>
                                <tr>
                                    <th align="left">Id</th>
                                    <th align="left" >Forma de Pagamento</th>
                                    <th align="left" >Total</th>
                                    <th align="center" >Detalhes</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($formas as $f){ ?>                      
								<tr>
									<td align="left"><?php echo $f->id_forma_pagamento  ?></td>
									<td align="left"><?php echo $f->forma_pagamento ?></td>
									<td align="left"><?php echo $f->total ?></td>	
									<td align="center">
										<a href="<?php echo URL_BASE . "pagamento/detalhes/" .$f->id_forma_pagamento ?>" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-edit"></i> Detalhes</a>
									</td>							
								</tr>                    
							<?php } ?>	             
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="border px-4">
					<span class="d-block mt-4 h4 border-bottom">Lista de Vendas</span>
                         <div class="col-12">
					<div class="tabela-responsiva px-0">
					<?php 
					   $this->verMsg();
					?>
						<table cellpadding="0" cellspacing="0" >
                            <thead>
                                <tr>
                                    <th align="left">Id</th>
                                    <th align="left" >Data</th>
                                     <th align="left" >Total</th>
                                    <th align="left">Desconto</th>
                                    <th align="left">Total Receber</th>
                                    <th align="center">Detalhes</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($vendas as $v){ ?>                      
								<tr>
									<td align="left"><?php echo $v->id_venda  ?></td>
									<td align="left"><?php echo databr($v->data_venda) ?></td>
									<td align="left"><?php echo $v->total ?></td>	
									<td align="left"><?php echo $v->desconto ?></td>
									<td align="left"><?php echo $v->total_receber ?></td>	
									<td align="center">
										<a href="<?php echo URL_BASE . "venda/detalhes/" .$v->id_venda ?>" class="d-inline-block btn btn-outline-verde btn-pequeno"><i class="fas fa-edit"></i> Detalhes</a>
									</td>							
								</tr>                    
							<?php } ?>	             
							</tbody>
						</table>
					</div>
				</div>
				
				</div>
				
				
				
                                
				
              
			</div>
		 </form>
			</div>
		</div>
	</div>
	</div>