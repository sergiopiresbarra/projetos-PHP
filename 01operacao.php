<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "os valores foram $n1 e $n2</br>";
            $r = ($tipo == "s")? $n1+$n2 : $n1*$n2;
            echo "resultado= $r";
            
            ?>
        </div>
    </body>
</html>