<meta charset="UTF-8">
<?php

$id = 5;
    try {
        $con = new PDO('mysql:host=localhost;dbname=forza', 'root', 'juju');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conexão ok <br><br>";
        
        $stmt = $con->prepare('SELECT * FROM tb_trab WHERE idtb_trab < :id');
        var_dump($stmt);
        
        //sem bind
        $stmt->execute(array(':id' => $id));
        
        // com bind
        
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        while($row = $stmt->fetch()) {
            //print_r($row);
            echo '<br>' . $row[idtb_trab] . '=>' . $row[nome] . '<br>';
        }
        
        
        
    } catch(PDOExcepetion $e) {
        echo "Erro: " . $e->getMessage();
    }
  
  // Dúvida com relação ao tipo de Array que as querys estão retornando.
    
?>