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
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $s = $n1 + $n2;
            $m = ($n1 + $n2)/2;
            echo "<br/>A soma entre $n1 e $n2 é igual a: $s";
            echo "<br/>a subtracao vale: ".($n1-$n2);
            echo "<br/>o mudulo vale: ".($n1%$n2);
            echo "<br/>a media é : $m";
            ?>
        </div>
    </body>
</html>