<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            function soma(){
                $p = func_get_args();
                $t = func_num_args();
                $s =0;
                for($i=0; $i<$t; $i++){
                    $s += $p[$i];
                }
                return $s;
            }
            
           
            $r= soma(3,5,2,8,9,4);
            echo"a soma é igual a $r";
            
            ?>
        </div>
    </body>
</html>