<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema NFe - mjailton</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<!--css-->
		
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/style_dataTable.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/DataTables_boot.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">	
		<script src="<?php echo URL_BASE ?>assets/js/jquery.min.js"></script>	
		<script>
			var base_url 		= "<?php echo URL_BASE ?>";
			var base_url_imagem = "<?php echo URL_IMAGEM ?>";
		</script>
	</head>
	
	<body class="mt-0">
		<section class="conteudo">      
            <?php $this->load($view, $viewData); ?>        
     	</section>      	
      
      <div id="fundo_preto"></div>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
		<script src="https://kit.fontawesome.com/9480317a2f.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/datatables/js/dataTables.responsive.min.js"></script>
		
		<script src="<?php echo URL_BASE ?>assets/js/jquery.mask.js"></script>	
		<script src="<?php echo URL_BASE ?>assets/js/componentes/js_data_table.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/componentes/js_modal.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/componentes/js_mascara.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/js.js"></script>
			
		
		<script>
	      $(function() {
				$( "#tabs" ).tabs();
			});
		</script>
    </body>
</html>