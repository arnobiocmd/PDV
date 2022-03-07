
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema NFe - mjailton</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<!--css-->
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/responsive.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/js/datatables/css/style_dataTable.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/estilo-login.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">		
	</head>
	
<body class="base-login-util comsenha">
	<div class="caixa-login position-relative">
		<form action="<?php echo URL_BASE ."login/logar" ?>" method="post">
			<img src="<?php echo URL_BASE ?>assets/img/logo_2.png" class="d-block m-auto img-fluido">
			<label> <span class="text-label label">Login</span> 
				<input	type="text" name="usuario">
			</label> 
			<label> <span class="text-label label">Senha</span> 
			<input	type="password" name="senha">
			</label> <input type="submit" value="Entrar" class="btn">
		</form>
		<a href="" class="senha text-azul mt-3 d-block">Esqueci minha senha</a>
		
		<div class="mostrasenha mostraCampo">
		<div class="caixa">
			<span class="sair senha">X</span>
			<h1 class="h3 mb-0 pb-1">Esqueci minha senha </h1>
			<p class="text-center pb-4">Digite seu email no campo abaixo para recuperar sua senha</p>
			<form action="" method="post">
				<label>
					<input type="text" value="" placeholder="Inserir email">
				</label>				
											
				<input type="submit" value="Enviar" class="btn">
			</form>
		</div>
		</div>
	</div>
	
	<script src="<?php echo URL_BASE ?>assets/js/jquery.min.js"></script>		
	<script src="<?php echo URL_BASE ?>assets/js/componentes/js_modal.js"></script>
	<script src="<?php echo URL_BASE ?>assets/js/js.js"></script>	
</body>
</html>