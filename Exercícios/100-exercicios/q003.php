<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q003</title>
</head>
<body>
<form action="#" method="get">
        <p>
            <label for="name">Nome do funcionário: </label>
            <input type="text" name='name' id="name">
        </p>
        <p>
            <label for="sal">Salário: </label>
            <input type="number" name="sal" id="sal" step="0.1">
        </p>
        <input type="submit" value="Confirmar">
    </form>

    <?php 
        if ($_GET['sal'] && $_GET['name']) {
            $name = $_GET['name'];
            $sal = $_GET['sal'];
            echo "O funcionário $name tem um salário de $sal em Junho.";
        }
    ?>
</body>
</html>