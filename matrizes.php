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
            $m = array(
                array(6,4),
                array(4,9),
                array(3,2)
            );
            $m[0][1]= $m[2][0];
            print_r($m);
            ?>
            </pre>
        </div>
    </body>
</html>