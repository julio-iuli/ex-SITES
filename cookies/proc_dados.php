<?php

$v_usuario = $_GET["nome"];
$v_idade = $_GET["idade"];

setcookie("c_usuario", $v_usuario);
setcookie("c_idade", $v_idade);
$_COOKIE["usuario"]="TESTE";

echo '<html><body>';
echo 'Ola! '.$v_usuario;
echo '<br>';

echo 'Sua idade:'.$v_idade;
echo '<br><br>';
echo '<a href="le_cookie.php">Ler dados gravados nos cookies</a>';
echo '</body></html>';

?>
