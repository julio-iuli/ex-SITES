
<?php

	$mysqli = new mysqli("localhost", "root", "", "teste");
	
	if ($mysqli->connect_errno) {
		echo "Falha de conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	$exid = $_GET["id"];
	
	if($mysqli->query("delete from test where id=$exid;")){
		echo "<script type='text/javascript'> alert('dado excluido'); </script>";
	}
		
	$res = $mysqli->query("select id, label from test;");
	
	
	echo "<table border='1'>";
	
		while ($row = $res->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["id"] . "</td>";
			echo "<td>" . $row["label"] . "</td>";
			echo "<td>" . '<a href="consulta.php?id='. $row["id"] . '">Excluir</a>' . "</td>";
			echo "<td>" . '<a href="altera.php?id='. $row["id"] .'&label=' . $row["label"] . '">Alterar</a>' . "</td>";
			echo "</tr>";
		}
	
	
	echo "</table>";
	
	
	//if($stmt->close()) { echo "prepared statement fechado! <br> ";}
	if(!$mysqli->close()) { echo "conexão falhou";}

	
?>

<h2><a href="inclui.html">Voltar</a></h2>
