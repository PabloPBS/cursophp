<?php 
    $daysPerMonth = 20;
    
    function GetSal (int $days) : float
    {
        $horasTrabalhadas = 8*$days;
        return $sal = 32*$horasTrabalhadas;
    }

    $newSal = GetSal($daysPerMonth);
    echo "O funcionário receberá R$$newSal";
?>