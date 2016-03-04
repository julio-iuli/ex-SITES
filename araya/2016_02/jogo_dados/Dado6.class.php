<?php

class Dado
{
public $valor;
	function __construct()
	{
		$this->jogar();
	}
	
	function jogar()
	{
		$this->valor = rand(1,6);
	}	
	
}

?>