<?php echo '

<div>

    <script type="text/javascript" src="https://exercicios-julio-iuli.c9users.io/ex-SITES/ajax/js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src=" https://exercicios-julio-iuli.c9users.io/ex-SITES/ajax/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href=" https://exercicios-julio-iuli.c9users.io/ex-SITES/ajax/js/jquery-ui.min.css">
    <script type="text/javascript" src=" https://exercicios-julio-iuli.c9users.io/ex-SITES/ajax/js/ajaxenderecos.js"></script>
    <script type="text/javascript" src=" https://exercicios-julio-iuli.c9users.io/ex-SITES/ajax/js/jqueryenderecos.js"></script>

    <fieldset>

        <legend>Endereço</legend>
        
        <label>Estado</label><br>
        <input id="inputestado" type="text" name="ds_estado" required /><br>
        <input id="hiddenestado" type="hidden" name="id_uf" />
                
        <label>Cidade</label><br>
        <input id="inputcidade" type="text" name="ds_cidade" required /><br>
        <input id="hiddencidade" type="hidden" name="id_cidade"/>

        <label>Bairro</label><br>
        <input id="inputbairro" type="text" name="ds_bairro" required /><br>
        <input id="hiddenbairro" type="hidden" name="id_bairro"/>
    
        <label>Logradouro</label><br>
        <input id="inputlogradouro" type="text" name="ds_logradouro" required /><br>
        <input id="hiddenlogradouro" type="hidden" name="id_logradouro"/>
        
        <label>Complemento</label><br>
        <input id="inputcomplemento" type="text" name="ds_end_complemento" required /><br>

        <label>CEP</label><br>
        <input id="inputcep" type="number" name="ds_cep" max="999999999" /><br>
                
    </fieldset>

</div>

'; ?>