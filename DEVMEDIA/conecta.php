<?php
  $conexao = mysql_connect("localhost", "root", "juju");
   
  if($conexao)
  {
  $baseSelecionada = mysql_select_db("imagens_devmedia");
  //echo "conectou";
  if (!$baseSelecionada) {
      die ('Não foi possível conectar a base de dados: ' . mysql_error());
  } } else {
      die('Não conectado : ' . mysql_error());
  }
  ?>