<?php 
    $ano = 2024;

    function Bissexto (int $ano) : string
    {
        if ($ano % 4 == 0 && $ano % 100 != 0) {
            return "O ano $ano é bissexto.";
        } else {
            return "O ano $ano não é bissexto.";
        }
    }

    echo $res = Bissexto($ano);
?>