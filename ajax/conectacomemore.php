<meta charset="UFT-8">
<?php
    try {
        $con = new PDO('mysql:host=localhost;dbname=comemore', 
        'root', 'juju');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "conexão ok <br><br>";
    } catch(PDOExcepetion $e) {
        echo "Erro: " . $e->getMessage();
    }
?>