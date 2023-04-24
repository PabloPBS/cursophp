<?php 
    $num = 377;
    function ParOuImpar (int $num) : string
    {
        if ($num % 2 == 0) {
            return "O número $num é par.";
        } else {
            return "O número $num é impar.";
        }
    }

    echo $res = ParOuImpar($num);
?>