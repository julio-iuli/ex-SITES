<meta charset="UTF-8">
<?php
	$mysqli = new mysqli("localhost", "root", "", "teste");
	if ($mysqli->connect_errno) {
		echo "Falha de conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	echo $mysqli->host_info . "<br>";
	echo $mysqli->client_version . "<br>";
	echo $mysqli->sqlstate . "<br>";
	echo $mysqli->thread_id . "<br>";
	echo $mysqli->warning_count . "<br><br>";
	
	echo $mysqli->server_version . "<br>";
	echo $mysqli->affected_rows . "<br>";
	echo $mysqli->field_count . "<br>";
	echo $mysqli->protocol_version . "<br>";
	echo $mysqli->get_charset . "<br>";
	//echo $mysqli-> . "<br>";
	//echo $mysqli-> . "<br>";
	//echo $mysqli-> . "<br>";
	
?>