<?php
/*
    $arr = [
    'listas' => ['lista.1' => ['1' => 'casa', '2' => 'mesa', '3' => 'banho'], 
    'lista.2' => ['1' => 'casa', '2' => 'mesa', '3' => 'banho']]
    ];
    var_dump($arr);
    echo json_encode($arr);


    $data = array();
    $data[] = array('apple','banana','cherry');
    $data[] = array('dog', 'elephant');
    var_dump($data);
    echo '<br>';
    echo json_encode($data);
*/
    function pegarJson() {
    $arr = [['uf' =>"DF", "estado" => "Distrito Federal"], ['uf' => "CE", 'estado' => "Ceará"]];
    //var_dump($arr);
    //echo "<br>" . json_encode($arr);
    return json_encode($arr);
    }
    
    //echo pegarJson();

?>