<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $ano = $_GET["an"];
            $idade = 2020 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.";
            $tipo = ($idade>=18 && $idade<65)?"obrigatorio":"nao obrigatorio";
            echo"</br>seu voto é: $tipo";
            ?>
        </div>
    </body>
</html>