<?php

class Dado
{
public $valor;
private $lados;

	function __construct($l)
	{
		$this->lados = $l;
		$this->jogar();
	}
	
	function jogar()
	{
		$this->valor = rand(1,$this->lados);
	}	
	
}

?>