<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>

    <body>
        <div>	
            <?php
            $x = "abc";
            $$x = "def";
            echo "variavel x= $x";
            echo "</br>variavel criada abc= $abc";
            ?>
        </div>
    </body>
</html>