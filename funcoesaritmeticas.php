<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <style>
            h2{
                font: 15pt Arial;
                color: #5d53cd;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div>	
            <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<h2>Valores recebidos: $v1 e $v2</h2>";
            echo "</br>valor absoluto de $v2 é: ".abs($v2);
            echo "</br>valor de $v1<sup>$v2</sup> e: ".pow($v1,$v2);
            ?>
        </div>
    </body>
</html>