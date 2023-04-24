<?php 
    $reta1 = 3;
    $reta2 = 4;
    $reta3 = 5;

    function Triangulo (float $l1, float $l2, float $l3) : bool
    {
        if ($l1 < $l2 + $l3 && $l2 < $l1 + $l3 && $l3 < $l1 + $l2) {
            return True;
        } else {
            return False;
        }
    }

    $res = Triangulo($reta1, $reta2, $reta3);
    if ($res) {
        echo "Com os valores [$reta1, $reta2, $reta3], um triâgulo pode ser formado.";
    } else {
        echo "Com os valores [$reta1, $reta2, $reta3], um triâgulo não pode ser formado.";
    }
?>