<?php 
    $nota1 = 8;
    $nota2 = 1;

    function Situacao(float $n1, float $n2) : string 
   {
    $media = ($n1+$n2)/2;
    if ($media < 5) {
        return "Média: $media. ".'REPROVADO';
    } elseif ($media < 7) {
        return "Média: $media. ".'RECUPERAÇÃO';
    } 
    return ("Média: $media. ".'APROVADO');
   } 

   echo $res = Situacao($nota1, $nota2);
?>