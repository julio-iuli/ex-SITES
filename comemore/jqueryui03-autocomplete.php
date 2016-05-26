<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 11</title>
		<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
		<script type="text/javascript" src="js/11.js"></script>
		<link href="js/jquery-ui.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/datepicker-pt-BR.js"></script>
	</head>

	<body>

		        <?php
            include 'funcoesJson.php';
            echo '<script type="text/javascript"> var estados = ' . getEstadosJson() . '; </script>';
        		?>

		<script type="text/javascript">
		$(function() {

			$("#tags").autocomplete({
				source: estados,
				select: function(event, ui){
					event.preventDefault();
					$("#tags").val(ui.item.label);
				},
				focus: function(event, ui){
					event.preventDefault();
					$("#tags").val(ui.item.label);
				},
				change: function(event, ui){ //só quando algo muda na caixa...
					//o ui fica nulo quando nada é selecionado; assim mantenho minha id_uf intacta, se coloco algo novo
					//alert(ui.item.value);
					var uf_estado = ui.item.value;
					$("#id_uf").val(uf_estado);
					<?php echo "teste";?>
					//$("#tags2").autocomplete("option", "source", );
				}
				
			});

			$("#tags2").autocomplete({
				//source: estados,
				select: function(event, ui){
					event.preventDefault();
					$("#tags2").val(ui.item.label);
				},
				focus: function(event, ui){
					event.preventDefault();
					$("#tags2").val(ui.item.label);
				},
				change: function(event, ui){ //só quando algo muda na caixa...
					//o ui fica nulo quando nada é selecionado; assim mantenho minha id_uf intacta, se coloco algo novo
					//alert(ui.item.value);
					$("#id_cidade").val(ui.item.value);
				}
				
			});


		});
		</script>


		
		<div>
			<form action="" method="GET">
				<label for="tags">Estado:</label>
				<input id="tags" name="ds_estado" type="text"/>
				<input id="id_uf" name="id_uf" type="hidden"  value="" /><br>
				<label for="tags2">Cidade:</label>
				<input id="tags2" name="ds_cidade" type="text" />
				<input id="id_cidade" name="id_cidade" type="hidden" value=""/><br>
				<input type="submit" value="envie" />
			</form>
		</div>
		
	</body>


</html>
