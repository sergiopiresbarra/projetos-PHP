<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["oper"])?$_GET["oper"]:1;
            switch ($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n**3;
                    break;
                case 3:
                    $r = sqrt($n);
                   
            }
            echo "resultado = [$r]";
            ?>
            </br><a href="exerciciozero.html" style="text-decoration: underline;">Voltar</a>
        </div>
    </body>
</html>