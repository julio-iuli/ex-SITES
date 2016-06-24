<?php
    header("Content-type: text/html; charset=utf-8");
    include 'conectacomemore.php';
    $stmt = $con->prepare('SELECT ds_cep FROM tb_logradouro WHERE id_logradouro = :id_logradouro');
    $id_logradouro = 1;
    $stmt->execute(array(':id_logradouro' => $id_logradouro));
    $cep = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($cep['ds_cep']);
    echo $cep['ds_cep'];
?>