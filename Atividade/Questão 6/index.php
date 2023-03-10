<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
</head>
<body>
    <p>6. Escreva um código em PHP que verifica se uma string começa com a letra "A" e termina com 
a letra "Z" e imprime o resultado.
</p>
<?php 
    $str = "ADS";
    echo "Texto: $str <br>";
    if ($str[0] == 'A' and $str[2] == 'Z') 
        echo "A string começa com [A] e termina com [Z].";
    else 
        echo "A string não começa com [A] e não termina com [Z].";
?>
</body>
</html>