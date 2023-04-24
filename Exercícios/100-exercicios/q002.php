<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q002</title>
</head>
<body>

    <form action="#" method="get">
        <label for="name">Qual é o seu nome?</label>
        <input type="text" name='name' id="name">
        <input type="submit" value="Confirmar">
    </form>

    <?php 
        if ($_GET['name']) {
            $nome = $_GET['name'];
            echo "Olá $nome!, é um prazer te conhecer!";
        }
    ?>
</body>
</html>