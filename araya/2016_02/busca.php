<?php
	$palavra = $_GET["palavra"];
	$nomes = array('aula', 'professor', 'materia', 'aluno');
	// rodar o array e escrever achei se a palavra digitada existir
	
	function procura ($agulha, $arranjo) {
	if(in_array($agulha, $arranjo)) {
			echo "achei!";
		} 
		else {
			echo "nao achei...";
		}
	}	
	
	procura($palavra, $nomes);
?>