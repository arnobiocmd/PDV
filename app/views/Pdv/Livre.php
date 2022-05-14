<?php $display = ($itens) ? "display:block" : "display:block" ?>
<section class="pdv-livre">
<div class="conteudo-fluido">
	
		<div class="base-pdv">	
		<div class="rows">	
				<div class="col-9 d-flex m-auto">		
					<div class="caixa width-100 bg-title2 p-2 border-0 mb-1">			
						<div class="rows">
							<div class="col-12">
								<img src="<?php echo URL_BASE . "assets/img/logo_2.png" ?>" class="m-auto img-fluido d-block">
								<span class="h1 text-branco d-block p-2 mt-2 text-center border radius-4">CAIXA LIVRE</span> 		
								<a href="<?php echo URL_BASE . "pdv/create" ?>" class="d-block btn-amarelo btn btn-grande h4 mb-0"> <i class="fas fa-play"></i> Iniciar Venda</a>														
							</div>
						</div>	
						<div class="barra">
							<div class="rows px-2 justify-content-space-between">
								<div class="col-2"><small>Horário:</small> <span><?php echo date("H:i:s")?></span></div>
								<div class="col-2"><small>Data:</small> <span><?php echo date("d/m/Y")?></span></div>
							</div>
						</div>		
					</div>	
				</div>						
		</div>
	</div>
</div>

</div>
</section>