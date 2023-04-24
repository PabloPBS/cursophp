<?php 
    $nome = 'Mariscleuda';
    $sexo = 'f';
    $compras = 100;

    function DiaDasMulheres (string $sexo, float &$compras) : float
    {
        $sexo = mb_strtoupper($sexo);
        if ($sexo == 'F') {
            return $compras -= $compras * (15/100);
        } else {
            return $compras -= $compras * (5/100);
        }
    }

    $res = DiaDasMulheres($sexo, $compras);
    echo "$nome, do sexo $sexo, passará a pagar R$$compras.";
?>