<?php


	$mysqli = new mysqli("localhost", "root", "", "teste");
	
	if ($mysqli->connect_errno) {
		echo "Falha de conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	
	if (!($stmt = $mysqli->prepare("insert into test(id, label) values(?, ?)"))){;
		echo "Preparação falhou: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	// Associação e Execução:
	
	$id = $_POST["id"];
	$label = $_POST["label"];
	
	if (!$stmt->bind_param("is", $id, $label)) {
		echo "Associação falhou" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "execução falhou" . $stmt->errno . ") " . $stmt->error;
	}
	
	if($stmt->close()) { echo "prepared statement fechado! <br> ";}
	if($mysqli->close()) { echo "conexão fechada";}


?>

<h2><a href="inclui.html">Voltar</a></h2>
