<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $info = isset($_GET["v"])?"":"..Erro:Valor nao informado!</br>";
        $valor = isset($_GET["v"])?$_GET["v"]:0;
        $rq = sqrt($valor);
        echo "A raiz de $info $valor é igual a ". number_format($rq,2);
        
        
        ?>
        <a href="01.html">Voltar</a>
    </body>
</html>
