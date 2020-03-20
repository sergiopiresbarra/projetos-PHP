<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            function teste(&$x){
                $x +=2;
                echo"valor de x e $x";
            }
            
            $a =3;
            teste($a);
            echo "</br>valor de a e $a";
            ?>
        </div>
    </body>
</html>