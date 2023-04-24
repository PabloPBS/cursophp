<?php 
    $height = 5.5;
    $length = 12;

    function litros($altura, $largura) 
    {
        $area = $altura*$largura;
        return $tint = $area*2;
    }

    $litros = litros($height, $length);
    
    echo "Serão necessários $litros litros de tinta para pintar a parede."
?>