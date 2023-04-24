<?php 
    $nome = 'Pablo Barbosa Silva';
    $salario = 100;
    $anos = 11;

    echo "O funcionário $nome, que trabalhou na empresa por $anos anos, passará a receber R$".NovoSalario($salario, $anos);

    function NovoSalario (float $salario, int $anos) : float
    {
        if ($anos <= 3) {
            return $salario += $salario * 0.03;
        } elseif($anos <= 10) {
            return $salario += $salario * 0.125;
        } else {
            return $salario += $salario * 0.2;
        }
    }
?>