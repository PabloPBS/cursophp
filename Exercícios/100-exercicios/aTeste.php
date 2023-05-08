<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php 
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "<tr><td style='background-color: green;'>$i</td></tr>";
            } else {
                echo "<tr><td>$i</td></tr>";
            }
        }
        echo "</table>"

        /*echo "<table><tr>";
        for ($i = 1; $i <=10; $i++) {
            echo "<td>$i</td>";
        }
        echo "<tr/></table>"*/
    ?>
</body>
</html>







<?php 
    /*$a = "10";
    $b = 20;
    Echo $a.$b;
    
    $a = "10";
    $b = "20 vinte";
    echo $a+$b;

    $a = 10;
    $b = "20";
    echo $a+$b;

    echo "\"I'm the best PHP programmer in the world!\""

    /*$id = "fruta";
    $fruta = "laranja";
    echo $id."<br>";
    echo $$id."<br>";
    
    $language = 'PHP';
    echo 'Programar em $language é muito legal!<br>';
    echo "Programar em $language é muito legal!<br>";

    /*$nome = 'Pablo';
    $idade = 17;
    echo "Eu sou $nome e tenho $idade anos.";

    $obj1 = "1 melancia";
    $obj2 = '80 manga';
    print $obj2 . ' e '. $obj1;

    $e = '';
    if ($e == true) {
        echo ('true');
    } else {
        echo ('False');
    }*/
?>