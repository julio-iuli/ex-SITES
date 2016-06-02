<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
    </head>
    <body>
       <form action="" method="GET">
           <fieldset>
               <legend>Novo Cliente</legend>
               
               <label>Nome</label><br>
               <input id="ds_cliente" type="text" name="ds_cliente" required /><br>
               
               <label>Email</label><br>
               <input id="ds_email" type="text" name="ds_email" required /><br>
               
               <!--
               <label></label><br>
               <input id="" type="" name="" required /><br>
               -->
               
           </fieldset>
           <?php include 'endereco.php'; ?>
           <div>
           <input type="submit" value="Enviar" />
           <input type="reset" value="Apagar" />
           </div>
       </form> 
    </body>
</html>