<?php

	include "usuarios.php";
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	echo $login."--".$senha."<br>";
	
    foreach($usuarios as $pos=>$n){
        echo $pos."=>".$n."<br>";
    	if ($pos==$login and $n==$senha){
    	    $validacao=true;
    	    break;
    	}
    }
    
    if($validacao==true){
        echo "Usuario logado";
    } else {
        echo "Usuario ou senha invalidos";
    }

?>
