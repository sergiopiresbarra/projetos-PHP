<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula POO</title>
</head>
<body>
    <pre>
   <?php
    require_once "caneta.php";
    $c1 = new Caneta;
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampar();
    print_r($c1);
    echo "<br/>";
    $c0 = new Caneta;
    $c0->cor = "verde";
    $c0->carga = 60;
    $c0->tampar();
    print_r($c0);
    
   ?>
   </pre>
</body>
</html>