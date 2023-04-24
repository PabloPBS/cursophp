<?php 

    $lado1 = 6;
    $lado2 = 6;
    $lado3 = 6;    

    $triangulo = new Triangulo;
    $existencia = $triangulo->Formado($lado1, $lado2, $lado3) ;
    if ($existencia == true) {
        $tipo = $triangulo->TipoTriagulo($lado1, $lado2, $lado3);
        echo "Com os valores fornecidos, um triângulo do tipo $tipo pode ser formado.";

    } else {
        echo 'Com os valores fornecidos, um triângulo não pode ser formado';
    }



    class Triangulo {

        public $l1;
        public $l2;
        public $l3;

        function Formado (float $l1, float $l2, float $l3) : bool
        {
            if ($l1 < $l2 + $l3 && $l2 < $l1 + $l3 && $l3 < $l1 + $l2) {
                return True;
            } else {
                return False;
            }
        }

        function TipoTriagulo (float $l1, float $l2, float $l3) : string
        {
            if ($l1 == $l2 && $l2== $l3) {
                return 'EQUILÁTERO';
            } elseif ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
                return 'ISÓCELES';
            } 
            return 'ESCALENO';
        }
    }
?>