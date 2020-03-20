<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "voce nasceu em $a e tera $i anos.</br>";
            if($i < 16){
                $tipovoto = "nao vota";
                #$d = "ja pode dirigir";
            }
            elseif(($i>=16 && $i<18) || ($i>65)){
                        $tipovoto = "Vota opcional";
            }
            else{
                        $tipovoto = "Vota obrigatório";
            }
                
            echo "com essa idade voce $tipovoto";
            ?>
            </br><a href="exercicio01.html">Voltar</a>
        </div>
    </body>
</html>