<?php 
    $distKm = 201;

    function Passagem (float $dist) : float 
    {
        if ($dist > 200) {
            return $preco = $dist*0.45;
        } else {
            return $preco = $dist * 0.50;
        }
    }

    $res = Passagem($distKm);
    echo "Valor a pagar: $res";
?>