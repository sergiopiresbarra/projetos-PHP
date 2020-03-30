<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";
        $p[0] = new Pessoa("José",30,"M");
        $p[1] = new Pessoa("Maria",25,"F");

        $l[0] = new Livro("PHP iniciante", "joao da silva",300,$p[0]);
        $l[1] = new Livro("PHP Avancado","Carlos Rodrigo",500,$p[0]);
        $l[2] = new Livro("POO","Bia Andrade",400,$p[1]);

        $l[0]->abrir();
        $l[2]->abrir();
        $l[0]->folhear(300);
        $l[2]->fechar();
        $l[2]->avancarPag();
        $l[0]->detalhes();
        $l[2]->detalhes();

    ?>
    </pre>
</body>
</html>