<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>
            <pre>
            <table border="1"><tr>
            <?php
            $n =array(3,5,8,2);
            $n[]=7;
            print_r($n);
            
            $c = range(5,20,2);
            unset($c[0]);//desaloca a posicao 0 do vetor;
            foreach($c as $v){
                echo "$v ";
            }
            echo "</br>";
            $v = array("nome"=>"ana","idade"=>23,"peso"=>78.5);
            $v["fuma"]= true;
            foreach($v as $K=> $c){
                echo "o campo $K possui conteudo $c</br>";
            }
            ?>
                </table>
            </pre>
        </div>
    </body>
</html>