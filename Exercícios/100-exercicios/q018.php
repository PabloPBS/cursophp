<?php 
    $anoNasc = 2006;

    function VotaOuN (int $anoNasc) : string
    {
        $anoAtual = date('Y');
        $idade = $anoAtual - $anoNasc;   
        if ($idade >= 16 && $idade < 18) {
            return 'Voto opcional.';
        } elseif ($idade >= 18) {
            return 'Voto obrigatório.';
        }
        return 'Você ainda não pode votar.';
    }

    $resp = VotaouN($anoNasc);
    echo $resp;
?>