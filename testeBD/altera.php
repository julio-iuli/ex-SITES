<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>estudo</title>
		<link rel="stylesheet" type="text/css" href="css/teste.css" media="all" />		
	</head>
	
	<body>
		<div>
			<h1>dado alterado</h1>
			<fieldset>
				<legend>Alterar</legend>
			<form action="altera.php" method="POST">
				<label for="id">Id: </label>
				<input type="text" name="id" value="<?php echo $_GET['id']; ?>" />
				<label for="label">Label:</label>
				<input type="text" name="label" value="<?php echo $_GET['label']; ?>" />
				<input type="submit" value="Alterar"/>
				<input type="reset" value="Apagar"/>
			</form>
			</fieldset>
			<fieldset>
				<legend>Consulta</legend>
				<p><a href="consulta.php">CONSULTAR DADOS</a></p>
			</fieldset>
		</div>
	</body>
	
</html>
