
<?php
include_once 'Dado6.class.php';

$d1 = new Dado6;
$d2 = new Dado6;
$n = 10000;
echo "Dados lancados $n vezes<br>";

for($i=2;$i<13;$i++) 
{
	$contagem[$i]=0;
}

for ($i=0; $i<$n; $i++)
{
	$contagem[$d1->valor+$d2->valor] += 1;
	$d1->jogar();
	$d2->jogar();	
}

for($i=2;$i<13;$i++) 
{
	echo "<br>".$i.": ".$contagem[$i]."<br>";
}



?>