<meta charset="UTF-8">
<?php
    try {
        $con = new PDO('mysql:host=localhost;dbname=forza', 'root', 'juju');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conexão ok <br><br>";
        
        $nome = "Carol";
        
        $data = $con->query("SELECT * FROM tb_trab WHERE nome = " . $con->quote($nome));
        
        var_dump($data);
        
        foreach ($data as $row) {
            print_r($row); echo "<br" . var_dump($row) . "<br><br>";
        }
        
    } catch(PDOExcepetion $e) {
        echo "Erro: " . $e->getMessage();
    }
  
  // Dúvida com relação ao tipo de Array que as querys estão retornando.
    
?>