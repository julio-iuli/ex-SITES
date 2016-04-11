<?php
	$mysqli = new mysqli("localhost", "root", "", "teste");
	if ($mysqli->connect_errno) {
		echo "Falha de conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	echo $mysqli->host_info . "<br>";
	
	if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
		!$mysqli->query("CREATE TABLE test(id INT, label CHAR(1))") ||
		!$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'a')")) {
		echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	//$mysqli->query("INSERT INTO test(id, label) VALUES (2, 'b')");
	
	$res = $mysqli->query("SELECT id, label FROM test WHERE id = 1");
	echo var_dump($res) . "<br><br>";
	// cria um objeto result
	
	$row = $res->fetch_assoc();
	echo var_dump($row) . "<br><br>";
	// esse aqui vira um arrayzinho normal mesmo

	printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
	printf("label = %s (%s)\n", $row['label'], gettype($row['label']));
	
	$id = $row['id'];
	//sem a opção de inicialização, temos um INT virando string; se quisermos o int de novo, tem que
	//modificar o modo de a conexão iniciar: 
	//$mysqli = mysqli_init(); 
	//mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1); 
	//mysqli->real_connect(x, y, z, w)
	
?>
<p>$id</p>