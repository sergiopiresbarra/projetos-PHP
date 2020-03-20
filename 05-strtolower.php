<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $nome = "Gustavo Guanabara";
            $nome2 = strtolower($nome);
            echo str_repeat("=", 20)."</br>";
            echo "seu nome e ".$nome2."</br>";
            echo str_repeat("=", 20);
            
            ?>
        </div>
    </body>
</html>