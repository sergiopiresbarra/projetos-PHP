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
                $a = 3;
                $b = &$a;
                $b += 5;
                echo "a= $a";
                echo "</br>b= $b";
            ?>
        </div>
    </body>
</html>