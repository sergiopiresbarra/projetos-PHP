<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $frase = "eu vou estudar php";
            $cont = str_word_count($frase,1);//0-contar,1-array,2-array mantendo a posicao de cada palavra dentro da string;
            print_r($cont);
            ?>
        </div>
    </body>
</html>