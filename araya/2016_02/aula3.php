<?php
	$nomes = array('Julio', 'Fulano', 'Lucas', 'Marcos');
	$idades = array(45, 32, 23, 24);
	echo "<table border='2'>";
	echo "<tr><td>nome</td><td>idade</td></tr>";
	foreach($nomes as $pos=>$n) //ATENÇÃO, USAR O $POS PARA OBTER A POSIÇÃO DO ELEMENTO
	{
		echo "<tr><td>".$n."</td><td>".$idades[$pos]."</td></tr>"; 
	}
	echo "</table>";
	
	echo "<ol>";
	foreach($nomes as $n)
	{
		echo "<li>".$n."</li>";
	}
	
	echo "</ol>";
	
	echo "<table border='2'>";
	echo "<tr>";
	foreach($nomes as $n)
	{
		echo "<td>".$n."</td>";
	}
	echo "</tr>";
	echo "</table>";
	
	echo "<table border='2'>";
	
	foreach($nomes as $n)
	{
		echo "<tr>";
		echo "<td>".$n."</td>";
		echo "</tr>";
	
	}
	echo "</table>";

	
	
?>