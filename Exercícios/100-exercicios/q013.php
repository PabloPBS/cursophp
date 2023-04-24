<?php 
    $sal = 1500;
    $aum = 15;
    function aumento (float $salario, float $aumento) : float
    {
        return $salario += ($salario*($aumento/100));
    } 

    $newSal = aumento($sal, $aum);
    echo "Com o aumento de $aum%, o funcionário passou a ganhar $newSal";
?>