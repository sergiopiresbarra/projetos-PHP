<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $t = "aqui temos um texto gigante criado pelo php pra testar a funcao wordwrap..";
            $r = wordwrap($t,20,"</br>\n");
            echo $r;
            ?>
        </div>
    </body>
</html>