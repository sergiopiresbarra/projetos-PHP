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
    require_once "Pessoa.php";
    require_once "Aluno.php";
    require_once "Professor.php";
    require_once "Funcionario.php";

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Pedro");
    $p2->setNome("Maria");
    $p3->setNome("cláudio");
    $p4->setNome("Faniana");

    $p1->setSexo("M");
    $p2->setSexo("F");

    $p2->setCurso("Informatica");
    $p3->setSalario(2500.75);
    $p4->setSetor("Estoque");

    $p3->receberAumento(550.20);
    $p4->mudarTrabalho();
    $p2->cancelarMatr();


    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);



    ?></pre>
</body>

</html>