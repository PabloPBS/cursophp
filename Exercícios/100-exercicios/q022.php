<?php 
    $anoNasc = 2011;

    function AlistamentoMilitar (int $nascimento) : string
    {
        $anoAtual = date('Y');
        $idade = $anoAtual - $nascimento;
        if ($idade == 18) {
            return "Você deve se alistar nesse ano ($anoAtual).";
        } elseif ($idade > 18) {
            $dif = $idade - 18;
            return "Passou/aram $dif ano/s desde que você se alistou.";
        } 
        $dif = 18 - $idade;
        return "Você deverá se alistar daqui $dif ano/s.";
    }
    
    echo $res = AlistamentoMilitar($anoNasc);

?>