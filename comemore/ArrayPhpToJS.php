        
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Teste</title>
    <script type="text/javascript">
    
    <?php 
        include 'teste-uf.php';
        echo '<script type="text/javascript">';
        echo "var minhaString = " . estadosJson() . ";\n" ;
        echo '</script>';
    ?>
        alert(minhaString);
        
    </script>
    </head>
    <body>

    </body>
</html>