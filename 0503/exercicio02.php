<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Aula 02</title>
</head>
<body>
    <?php
        $raio = 5;

        $perimetro = 2 * pi() * $raio;
        $area = pi() * $raio ** 2;

        echo "Raio: " . $raio . " (Tipo: " . gettype($raio) . ")<br>";
        echo "Perímetro: " . $perimetro . " (Tipo: " . gettype($perimetro) . ")<br>";
        echo "Área: " . $area . " (Tipo: " . gettype($area) . ")<br>";
    ?>

</body>
</html>