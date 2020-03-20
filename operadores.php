<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>

    <body>
        <div>	
            <?php
            $preco = $_GET["p"]; //essa linha vai pegar o valor do preço na URL
            echo "o preço do produto é ". number_format($preco,2,",",".");
            $preco += $preco*10/100;
            echo "<br/>E o novo preco de 10%+ será: ". number_format($preco,2,",",".");
            
            ?>
        </div>
    </body>
</html>