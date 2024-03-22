<!DOCTYPE html>
<html lmng="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Aula 02</title>
</head>
<body>
    <?php 
        $a = 2;
        $b = 4;
        $c = 6;

        $m = (($c + $b) / 2) ** (--$c);
        $t = --$c ** ($b + $a);
        $x = --$c + $b;
        $y = $b++ + $a;
        $z = $a - $b--;

        $a = (double)$a;
        $b = (double)$b;
        $c = (string)$c;

        echo "Valor de \$a: " . $a . "<br>";
        echo "Valor de \$b: " . $b . "<br>";
        echo "Valor de \$c: " . $c . "<br>";
        echo "Valor de \$m: " . $m . "<br>";
        echo "Valor de \$t: " . $t . "<br>";
        echo "Valor de \$x: " . $x . "<br>";
        echo "Valor de \$y: " . $y . "<br>";
        echo "Valor de \$z: " . $z . "<br>";

    ?>
</body>
</html>