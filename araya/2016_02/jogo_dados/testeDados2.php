<?php

include_once 'Dado.class.php';

$d1 = new Dado(6);
$d2 = new Dado(6);
$n = 1000; // número de lances dos dados

// criando meu array de valores:
for ($i=0; $i<13; $i++)
{
    $contagem[$i] = 0;
}

for ($i=0; $i<$n; $i++)
{
    $d1->jogar();
    $d2->jogar();
    $contagem[$d1->valor+$d2->valor] += 1;
}

for ($i=2; $i<13; $i++)
{
    echo "$i -> ".$contagem[$i]."<br>";
}


?>