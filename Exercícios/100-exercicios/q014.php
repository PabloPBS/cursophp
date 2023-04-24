<?php 
    $KmRodados = 30;
    $diasRodados = 3;

    function CalcPrecoRodados(float $Km, float $dias) : float
    {
        return $precoTotal = ($dias*90) + ($Km*0.20);
    }

    $precoTotal = CalcPrecoRodados($KmRodados, $diasRodados);
    echo "O valor total a ser pago é de R$$precoTotal";
?>