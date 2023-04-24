<?php 
    $moneyRel = 100.00;

    function RelToDol (float $money) : float
    {
        return $Dol = $money/3.45;
    }

    $moneyDol = RelToDol($moneyRel);
    echo 'Dinheiro em reais: R$' . number_format($moneyRel, 2) . '<br>';
    echo "Dinheiro em dólares: US$". number_format($moneyDol, 2);
?>