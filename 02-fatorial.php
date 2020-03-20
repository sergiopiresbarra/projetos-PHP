<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $v = isset($_GET["val"])?$_GET["val"]:1;
            echo "<h1>Calculando fatorial de $v.</h1>";
            $c = $v;
            $fat =1;
            do{
                $fat= $fat * $c;
                $c--;
            }while($c>=1);
            echo "<h2>$v ! = $fat</h2>"
            ?>
            <a href="01contador.html">Voltar</a>
        </div>
    </body>
</html>