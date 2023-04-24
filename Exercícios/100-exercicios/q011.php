<?php 
    $a = 1;
    $b = 5;
    $c = 1;
    function delta (float $a, float $b, float $c) : float
    {
        return $delta = ($b**2 * (4*$a*$c));
    }
    $delta = delta($a, $b, $c);
    echo "Valor de delta: $delta";
?>