<?php 

    $largura = 10;
    $comprimento = 10;

    $classe = new Terreno;
    $area = $classe->Area($largura, $comprimento);
    $classificacao = $classe->Classificacao($area);

    echo "Área: $area"."m².<br>";
    echo "Classificação: $classificacao.";

    class Terreno {

        public static function Area(float $l, float $c) : float {
            return $a = $l * $c;
        }

        public static function Classificacao (float $area) : string {
            if ($area < 100) {
                return 'TERRENO POPULAR';
            } elseif ($area < 500) {
                return 'TERRENO MASTER';
            } else {
                return 'TERRENO VIP';
            }
        }
    }
?>