<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1+$nota2)/2;
            echo"a media entre $nota1 e $nota2 é: $m</br>";
            $sit = ($m<6)?"Reprovado":"Aprovado";
            echo "a situacao do aluno é: $sit";
            ?>
        </div>
    </body>
</html>