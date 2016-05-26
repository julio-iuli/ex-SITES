<?php function cidades_Json($id_uf) {
    include 'conectacomemore.php';
    $stmt = $con->prepare('SELECT ds_cidade as label, id_cidade as value FROM tb_cidade where tb_uf_id_uf = :id_uf');
    //$id_uf = 'PA';
    $stmt->execute(array(':id_uf' => $id_uf));
    $cidades = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $row[label] = utf8_encode($row[label]);
        //echo $row[label] . "=>" . $row[value] . "<br>";
        $cidades[] = $row;
    }
    //var_dump($cidades);
    echo json_encode($cidades);
}

cidades_Json('DF');
?>