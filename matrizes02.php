<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <pre>
            <?php
            $v = array("A","J","M","X","K");
            print_r($v);
            $v[] = "O";
            sort($v);
            print_r($v);
            rsort($v);
            print_r($v);
            ?>
            </pre>
        </div>
    </body>
</html>