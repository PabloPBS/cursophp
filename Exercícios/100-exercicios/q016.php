<?php 
    $cigarrosPorDia = 5;
    $anosFumados = 5;

    function ExpectativaDeVida (int $cigarroasPorDia, int $anos) : float
    {
        $cigarrosTotais = ($cigarroasPorDia*365)*$anos;
        $vidaReduzidaMin = $cigarrosTotais*10;
        return $vidaReduzidaDias = ($vidaReduzidaMin/60)/24;
    }

    $diasPerdidos = ExpectativaDeVida($cigarrosPorDia, $anosFumados);
    echo "Um fumante que fumou $cigarrosPorDia cigarros por dia, durante $anosFumados anos, perdeu ".number_format($diasPerdidos, 0).' dias de vida.';
?>