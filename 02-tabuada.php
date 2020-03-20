<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
        <?php
         $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
        ?>
        <style>
            span.texto{
               color: <?php echo $cor; ?>;
            }
        </style>
    </head>

    <body>
        <div>	
            <?php
            $n = isset($_GET["num"])?$_GET["num"]:1;
            for($c=1;$c<=10;$c++){
                $r = $n*$c;
                echo"<span class='texto'>$n x $c = $r</span></br>";
            }
            ?>
            </br><a href="02-index.php">Voltar.</a>
        </div>
    </body>
</html>