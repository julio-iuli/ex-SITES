<?php

function estadosJson() {
    include "conectacomemore.php";
    $res = $con->query("select * from tb_uf;");
    $estados = array();
    while($row = $res->fetch(PDO::FETCH_ASSOC)){
        
        $estados[] = $row;
        
        //$estados[] = $row;
    }
    $estados2 = array();
    foreach($estados as $key => $estado){
        //echo utf8_encode($estado['ds_estado']) . '<br>';
        //echo $estados[$key]['ds_estado'] . '<br>';
        $estados[$key]['ds_estado'] = utf8_encode($estado['ds_estado']);
        //echo $estados[$key]['ds_estado'] . ":" . $estados[$key]['id_uf'] . '<br>';
        $estados2[] = array('label' => $estados[$key]['ds_estado'], 'value' => $estados[$key]['id_uf']);
    }
    
    
    
    return json_encode($estados2);
    
}
/*
    var_dump($estados);
    $jenc = json_encode($estados);
    echo $jenc;
    $jdec = json_decode($jenc, true);
    var_dump($jdec);
    foreach($jdec as $key => $item){
        echo $item . '<br>';
        echo utf8_decode($item) . '<br>';
        $jdec[$key] = utf8_decode($item);
    }
    
    var_dump($jdec);
*/
    //$arr = array('nome' => 'julio', 'sobrenome' => 'maria', 'idade' => 36);
    //echo json_encode($arr);
    
    ?>