<?php 
    $velelocidade = 81;

    function Multa(int $vel) : string
    {
        if ($vel > 80) {
            $multa = ($vel-80) * 5;
            return "Acima do limite de velocidade. Multa de R$$multa aplicada.";
        } else {
            return "Você está dentro do limite de velocidade. Tenha um bom dia!";
        }
    }

    echo $resposta = Multa($velelocidade);
?>