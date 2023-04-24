<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q004</title>
</head>
<body>
<form action="#" method="get">
        <p>
            <label for="n1">Digite um valor: </label>
            <input type="number" name='n1' id="n1" step='0.1'>
        </p>
        <p>
            <label for="n2">Digite outro valor: </label>
            <input type="n2" name="n2" id="n2" step="0.1">
        </p>
        <input type="submit" value="Confirmar">
    </form>

    <?php 
        if ($_GET['n1'] && $_GET['n2']) {
            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            echo "A soma entre $n1 e $n2 é igual a ". $n1+$n2;
        }
    ?>
</body>
</html>