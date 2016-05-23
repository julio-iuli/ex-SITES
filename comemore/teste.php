<?php
    include "conectacomemore.php";
    $res = $con->query("select * from tb_uf;");
    $estados = array();
    while($row = $res->fetch(PDO::FETCH_ASSOC)){
        
        $estados[$row["id_uf"]] = utf8_encode($row['ds_estado']); 
        //$estados[] = $row;
    }
    
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
    

    
    //$arr = array('nome' => 'julio', 'sobrenome' => 'maria', 'idade' => 36);
    //echo json_encode($arr);
    
    ?>