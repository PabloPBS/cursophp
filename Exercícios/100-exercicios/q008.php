<?php 
    $distm = 1;
    echo "A distância de <strong>$distm</strong>"."<strong>m</strong> corresponde a:<br>";

    $medidas = medidas($distm);
    foreach ($medidas as $value) {
        echo $value . "<br>";
    }

    function medidas(float $dist) : array
    {
        $distkm = $dist/1000;
        $disthm = $dist/100;
        $distdam = $dist/10;
        $distdm = $dist*10;
        $distcm = $dist*100;
        $distmm = $dist*1000;

        $medidas = [
            $distkm . "Km",
            $disthm . "Hm",
            $distdam . "Dam",
            $distdm . "dm",
            $distcm . "cm",
            $distmm . "mm"
        ];
        
        return $medidas;
    }

?>