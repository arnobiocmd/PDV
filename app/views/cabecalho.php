<header class="bg-topo">
			<div class="conteudo">
			<div class="navbar">
				<input type="checkbox" id="chx">
				<label for="chx" class="mobmenu"><!--menu mobile--><i class="fas fa-bars"></i></label>
				<a href="<?php echo URL_BASE ?>" class="logo" alt="ERP completa"><img src="<?php echo URL_BASE ?>assets/img/logo.png" class="img-fluido"></a>	
					
				<ul class="menutopo">
					<li class="sub"><img src="<?php echo URL_BASE ?>assets/img/user.jpg" class="img"> <span><?php echo $_SESSION[SESSION_LOGIN]->usuario->usuario?> </span>				
						<ul>
							<li><a href="<?php echo URL_BASE ."login/logoff"?>"><i class="fas fa-sign-in-alt"></i> Sair</a></li>
						</ul>
					</li>	
				</ul>
				
				<nav class="menuprincipal" id="principal">					
					<ul class="menu-ul">
						<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
							<?php if(app\models\service\AclService::pode("pdv")) { ?>
						<li><a href="<?php echo URL_BASE . "pdv" ?>"><i class="icon fas fa-file-invoice-dollar"></i> PDV</a></li>
							<?php }?>		
						<li><a href="<?php echo URL_BASE . "configuracao" ?>"><i class="icon fas fa-file-invoice-dollar"></i> Configurações de nota</a></li>
						<li><a href="#menu_cadastro"><span>+</span>  Cadastro <i class="icon ihome fas fa-plus-circle"></i></a></li>
						<li><a href="#menu_tributacao" rel="ativo"><span>+</span>  Tributação <i class="icon ihome fas fa-book"></i></a></li>
						<li><a href="#menu_estoque" rel="ativo"><span>+</span>  Estoque <i class="icon ihome fas fa-cubes"></i></a></li>
						<li><a href="#menu_movimentacao" rel="ativo"><span>+</span>  Movimentações <i class="icon ihome fas fa-file-contract"></i></a></li>		
						<li><a href="#menu_caixa"><span>+</span>  Caixa <i class="icon ihome fas fa-user-tag"></i></a></li>
						
						<li><a href="#menu_usuario"><span>+</span>  Usuário <i class="icon ihome fas fa-user"></i></a></li>
					</ul>
				</nav>

<!-- MENU PRODUTO -->
<nav class="menuprincipal" id="menu_cadastro">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-plus-circle"></i> Cadastro</span>
		<li><a href="<?php echo URL_BASE ."unidade"?>"><i class="icon fas fa-list"></i> Unidade</a></li>		
		<li><a href="<?php echo URL_BASE ."produto"?>"><i class="icon fas fa-box"></i> Produto</a></li>
		<li><a href="<?php echo URL_BASE ."formapagamento"?>"><i class="icon fas fa-box"></i> Forma de Pagamento</a></li>
		<li><a href="<?php echo URL_BASE ."funcionario"?>"><i class="icon fas fa-list"></i> Funcionário</a></li>
		<li><a href="<?php echo URL_BASE . "cliente" ?>"><i class="icon fas fa-list"></i> Cliente</a></li>
		<li><a href="<?php echo URL_BASE . "emitente" ?>"><i class="icon fas fa-list"></i> Empresa</a></li>
		<li><a href="<?php echo URL_BASE . "caixanumero" ?>"><i class="icon fas fa-list"></i> Caixas Número</a></li>
	</ul>
</nav>




<!-- MENU TRIBUTAÇÃO -->
<nav class="menuprincipal" id="menu_tributacao">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-book"></i> Tributação</span>
		<li><a href="<?php echo URL_BASE . "tributacao" ?>"><i class="icon fas fa-list"></i> Lista</a></li>
		<li><a href="<?php echo URL_BASE . "tributacao/create" ?>"><i class="icon fas fa-box"></i> cadastro</a></li>
	</ul>
</nav>

<!-- MENU ESTOQUE -->
<nav class="menuprincipal" id="menu_estoque">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-cubes"></i> Estoque</span>
		<li><a href="<?php echo URL_BASE . "entrada" ?>"><i class="icon fas fa-list"></i> Entradas avulsas</a></li>
		<li><a href="<?php echo URL_BASE . "saida" ?>"><i class="icon fas fa-list"></i> Saída Avulsa</a></li>
		<li><a href="<?php echo URL_BASE ."movimento"?>"><i class="icon fas fa-list"></i> Historico de movimento</a></li>
		<li><a href="<?php echo URL_BASE ."produto/estoqueBaixo"?>"><i class="icon fas fa-list"></i> Estoque Baixo</a></li>
	</ul>
</nav>

<!-- MENU MOVIMENTAÇÂO -->
<nav class="menuprincipal" id="menu_movimentacao">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-cubes"></i> Movimentações</span>
		<li><a href="<?php echo URL_BASE . "venda" ?>"><i class="icon fas fa-list"></i> Venda</a></li>
		<li><a href="<?php echo URL_BASE ."movimento"?>"><i class="icon fas fa-list"></i> Historico de movimento</a></li>
		
	</ul>
</nav>
<!-- MENU CAIXA -->
<nav class="menuprincipal" id="menu_caixa">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-cubes"></i> Caixa</span>
		<li><a href="<?php echo URL_BASE . "caixanumero" ?>"><i class="icon fas fa-list"></i>Número Caixa</a></li>
		<li><a href="<?php echo URL_BASE . "caixa" ?>"><i class="icon fas fa-list"></i> Caixas</a></li>
		<li><a href="<?php echo URL_BASE . "sangria" ?>"><i class="icon fas fa-list"></i> Sangria</a></li>
		<li><a href="<?php echo URL_BASE . "suplemento" ?>"><i class="icon fas fa-list"></i> Suplemento</a></li>
		<li><a href="<?php echo URL_BASE . "caixa/create" ?>"><i class="icon fas fa-list"></i> Abertura de Caixa</a></li>
		<li><a href="<?php echo URL_BASE . "caixa/fechamento" ?>"><i class="icon fas fa-list"></i> Fechamento</a></li>
	</ul>
</nav>

<!-- MENU Usuario -->
<nav class="menuprincipal" id="menu_usuario">
	<ul class="menu-ul">
		<li class="bg-menu"><a href=""><i class="icon fas fa-arrow-left"></i> Recolher menu</a></li>
		<span class="h5 p-1 py-2 text-branco mb-0 d-block text-uppercase"><i class="icon fas fa-cubes"></i> Usuários</span>
		<li><a href="<?php echo URL_BASE . "usuario" ?>"><i class="icon fas fa-list"></i> Usuários</a></li>
		<li><a href="<?php echo URL_BASE ."perfil"?>"><i class="icon fas fa-list"></i> Perfil</a></li>
		<li><a href="<?php echo URL_BASE ."permissao"?>"><i class="icon fas fa-list"></i> Permissão</a></li>
		<li><a href="<?php echo URL_BASE ."login/logoff"?>"><i class="icon fas fa-list"></i> Sair</a></li>
	</ul>
</nav>

</div>
			</div>
</header>