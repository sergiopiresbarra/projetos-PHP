<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $p = "leite";
            $pr = 4.5;
            //echo "o $p custa r$ $pr";
            printf("o %s custa r$ %.2f",$p,$pr);
            ?>
        </div>
    </body>
</html>