<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Aula 02</title>
</head>
<body>
<?php
    $A = 4;
    $B = 5;
    $C = 6;

    $R = pow(($A + $B), 2);
    $S = pow(($B + $C), 2);

    $D = ($R + $S) / 2;

    echo "O resultado é: " . $D;
?>

</body>
</html>