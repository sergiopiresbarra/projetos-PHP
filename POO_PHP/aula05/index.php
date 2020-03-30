<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        require_once "ContaBanco.php";
        $c1 = new ContaBanco();
        $c2 = new ContaBanco();

        $c1->abrirConta("CC");
        $c1->setDono("Jubileu");
        $c2->abrirConta("CP");
        $c2->setDono("Creuza");
        $c1->setNumConta(1111);
        $c2->setNumConta(2222);

        $c1->depositar(100);
        $c2->depositar(300);

        $c2->sacar(1000);
        $c1->pagarMensal();
        $c2->pagarMensal();
        
        $c1->sacar($c1->getSaldo());
        $c2->sacar($c2->getSaldo());

        $c1->fecharConta();
        $c2->fecharConta();

        print_r($c1);
        print_r($c2);
    ?>
</pre>
</body>
</html>