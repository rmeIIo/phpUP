<!DOCTYPE html>
<html lang="pt-vr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Aula 02</title>
</head>
<body>
    <?php
        $numero1 = 10;
        $numero2 = 5;

        echo "Número 1: " . $numero1 . "<br>";
        echo "Número 2: " . $numero2 . "<br>";

        echo "<hr>";

        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;
        $modulo = abs($subtracao);
        $resto = $numero1 % $numero2;
        $exponenciacao = pow($numero1, $numero2);
        $media = ($numero1 + $numero2) / 2;
        $raiz = sqrt($soma);

        echo "Soma: " . $soma . "<br>";
        echo "Subtração: " . $subtracao . "<br>";
        echo "Multiplicação: " . $multiplicacao . "<br>";
        echo "Divisão: " . $divisao . "<br>";
        echo "Módulo do sinal da subtração: " . $modulo . "<br>";
        echo "Resto da divisão: " . $resto . "<br>";
        echo "Exponenciação: " . $exponenciacao . "<br>";
        echo "Média: " . $media . "<br>";
        echo "Raiz quadrada da soma: " . $raiz . "<br>";
    ?>

</body>
</html>