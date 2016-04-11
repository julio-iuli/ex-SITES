<?php
	$mysqli = new mysqli("localhost", "root", "", "teste");
	if ($mysqli->connect_errno) {
		echo "Falha de conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	echo $mysqli->host_info . "<br>";
	
	//if (!$mysqli->query("INSERT INTO test(id, label) VALUES (2, 'b')")) {
	//	echo "Falha: (" . $mysqli->errno . ") " . $mysqli->error . "<br><br>";
	//}
	
	// AGORA INCLUIR COM PREPARED STATEMENT
	
	//Preparação:
	
	if (!($stmt = $mysqli->prepare("insert into test(id, label) values(?, ?)"))){;
		echo "Preparação falhou: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	// Associação e Execução:
	
	$id = 6;
	$label = "f";
	
	if (!$stmt->bind_param("is", $id, $label)) {
		echo "Associação falhou" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "execução falhou" . $stmt->errno . ") " . $stmt->error;
	}
	
	if($stmt->close()) { echo "banco fechado! ";}
	
?>
