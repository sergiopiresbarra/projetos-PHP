<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Programa Principal
        require_once "Mamifero.php";
        require_once "Lobo.php";
        require_once "Cachorro.php";

        $c = new Cachorro();
        //$

        $c->reagirFrase('olá');
        $c->reagirFrase('Vai apanhar!');
        $c->reagirHora(11,45);
        $c->reagirHora(21,45);
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdadePeso(2, 12.5);
        $c->reagirIdadePeso(17, 4.5);
        

    ?>
</body>
</html>