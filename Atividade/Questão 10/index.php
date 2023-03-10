<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10</title>
</head>
<body>
    <p>10. Escreva um código em PHP que cria uma função para calcular a área de um triângulo dado 
base e altura.</p>
<?php 
    function areaT($b, $h) {
        $a = ($b * $h)/2;
        return $a;
    }
    $b = 10;
    $h = 5;
    $a = areaT($b, $h);
    echo "O valor da área do triângulo é igual a: " . $a;
?>
</body>
</html>