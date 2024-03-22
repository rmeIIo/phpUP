<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Aula 02</title>
</head>
<body>
    <?php
        $x = 3;

        $parteSuperiorEsquerda = (2 * pow($x, 2) - 3 * pow($x, ($x + 1))) / (2 * $x);
        $parteSuperiorDireita = sqrt($x + 1) / 4;
        $parteInferior = sqrt(4 * $x + pow(2, $x));

        $z = ($parteSuperiorEsquerda + $parteSuperiorDireita) / $parteInferior;

        echo "O resultado da equação é: " . $z . "<br>";
    ?>

</body>
</html>