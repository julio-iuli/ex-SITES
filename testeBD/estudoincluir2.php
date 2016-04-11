<?php
	$mysqli = new mysqli("localhost", "root", "", "teste");
	if ($mysqli->connect_errno) {
		echo "Falha de conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	echo $mysqli->host_info . "<br>";
	
	//if (!$mysqli->query("INSERT INTO test(id, label) VALUES (2, 'b')")) {
	//	echo "Falha: (" . $mysqli->errno . ") " . $mysqli->error . "<br><br>";
	//}
	
	$res = $mysqli->query("SELECT id, label FROM test");
	
	//rodando o while pra imprimir todas as colunas...
	while($row = $res->fetch_assoc()){
			
	printf("id = %s (%s)\n\n", $row['id'], gettype($row['id']));
	printf("label = %s (%s)\n\n", $row['label'], gettype($row['label']));
	echo "<br>";
	
	}
?>
