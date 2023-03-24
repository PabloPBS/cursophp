<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            if ($_GET) {
                $nome = $_GET["nome"];
                $sobrenome = $_GET["sobrenome"];
                echo "Seu nome é <strong>$nome $sobrenome</strong> ! Bem vindo ao meu site!" ;
            }
            else {
                echo "Error, campo de login não preenchido. Volte e preenncha os campos com suas informações.";
            }
        ?>
        <p><a href="index.php">Voltar para a página anterior</a></p>
    </main>
</body>
</html>