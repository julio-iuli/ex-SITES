<?php

    function getEstadosJson() {
        include "conectacomemore.php";
       $res = $con->query("SELECT ds_estado as label, id_uf as value FROM tb_uf;");
       $estados = array();
       while($row = $res->fetch(PDO::FETCH_ASSOC)){
          $row[label] = utf8_encode($row[label]);
          $estados[] = $row;
       }
       return json_encode($estados);
    }

    function getCidadesJson($id_uf) {
        include 'conectacomemore.php';
        $stmt = $con->prepare('SELECT ds_cidade as label, id_cidade as value FROM tb_cidade where tb_uf_id_uf = :id_uf');
        $stmt->execute(array(':id_uf' => $id_uf));
        $cidades = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $row[label] = utf8_encode($row[label]);
            $cidades[] = $row;
        }
        return json_encode($cidades);
    }


?>