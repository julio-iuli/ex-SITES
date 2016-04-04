<?php

$usuario = $_COOKIE["c_usuario"];
$idade = $_COOKIE["c_idade"];


echo '<!DOCTYPE html>
      <html>
      <head>
	     <title>Exemplo Leitura de Cookies</title>
		 <meta charset=\'utf-8\'>
      <body>';
echo '<h1> Lendo dados gravado nos cookies </h1>';
echo 'Olá! '.$usuario;
echo '<br>';
echo 'Sua idade:'.$idade;

echo '<a href="limpa_cookie.php">Apagar cookies</a>';
echo '</body></html>';

?>
