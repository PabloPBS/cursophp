<?php 
    $nome = 'Pablo Barbosa Silva';
    $nota1 = 7;
    $nota2 = 10;

    function Media (string $aluno, float $nota1 = 0, float $nota2 = 0) : string
    {
        $media = ($nota1 + $nota2)/2;
        $diferenca = $media - 7;
        if ($media >= 7) {
            return "O aluno $aluno [$media] teve um bom aproveitamento.($diferenca acima da média)";
        } else {
            return "O aluno $aluno [$media] não teve um bom aproveitamento.($diferenca abaixo da média)";
        }
    }

    echo $res = Media($nome, $nota1, $nota2);
?>