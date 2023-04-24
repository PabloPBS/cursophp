<?php 
    $n1 = 8;
    $n2 = 8;

    function Maior(float $n1, float $n2) : string
    {
        if ($n1 > $n2) {
            $maior = $n1;
        } elseif ($n2 > $n1) {
            $maior = $n2;
        } else{
            $maior = '';
        }
        if ($maior != null) {
            return "O valor $maior é maior.";
        } else {
            return 'Não existe valor maior, os dois são iguais.';
        }
    }

    echo $res = Maior($n1, $n2);
    
    
?>