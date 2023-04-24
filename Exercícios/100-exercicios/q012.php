<?php 
    $precoProduto = 100;
    $desc = 5;
    function Promo (float $preco, float $desc) : float
    {
        return $precoPromo = $preco - (($preco*$desc)/100);
    }

    $precoPromo = Promo ($precoProduto, $desc);

    echo "O preço promocional, com $desc% de desconto, é R$$precoPromo";
?>