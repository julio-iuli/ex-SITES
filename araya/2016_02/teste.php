<?php

for($i=0; $i<3;$i++) 
{
	for($j=0; $j<3; $j++) 
	{
		$jogo[$i][$j] = $i+$j;
	}
}

for($i=0; $i<3;$i++) 
{
	echo "<br>";
	for($j=0; $j<3; $j++) 
	{
		echo $jogo[$i][$j]." ";
	}
}

echo "<br>";
var_dump($jogo);


?>