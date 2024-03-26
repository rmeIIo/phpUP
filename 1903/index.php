<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercícios - Aula 04</title>
</head>
<body>
    <main class="container">
        <div class="title">
            <h1>Exercícios - Aula 04</h1>
            <h2>Desenvolvimento de Sistemas</h2>
        </div>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 01</h3>
            </div>

            <?php
                $numero = 10;

                function ehPrimo($num) {
                    if($num == 1)
                        return false;
                    for ($i = 2; $i <= sqrt($num); $i++) {
                        if ($num % $i == 0) {
                            return false;
                        }
                    }
                    return true;
                }
                
                function encontrarMultiplos($num) {
                    $multiplos = array();
                    for ($i = 1; $i <= $num; $i++) {
                        if ($num % $i == 0) {
                            $multiplos[] = $i;
                        }
                    }
                    return $multiplos;
                }
                
                if (ehPrimo($numero)) {
                    echo "O número $numero é primo.<br>";
                } else {
                    echo "O número $numero não é primo.<br>";
                }
                
                $multiplos = encontrarMultiplos($numero);
                echo "Os múltiplos de $numero são: " . implode(", ", $multiplos) . "<br>";
                echo "O total de múltiplos é: " . count($multiplos) . "<br>";
            ?>
        </section>

        <section class="exercise02">
            <div class="titleExercise">
                <h3>Exercício 02</h3>
            </div>

            <?php
                function imprimirTabuada($num) {
                    for ($i = 1; $i <= 10; $i++) {
                        echo "$num x $i = " . $num * $i . "<br>";
                    }
                    echo "\n";
                }

                echo "Tabuada do 7:<br>";
                imprimirTabuada(7);

                echo "<br>";

                echo "Tabuada do 9:<br>";
                imprimirTabuada(9);
            ?>

        </section>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 03</h3>
            </div>

            <?php
                $idades = array(15, 20, 17, 18, 21, 16, 19, 22, 23, 24, 25, 26, 27, 28, 29);

                $maiores = 0;
                $menores = 0;

                foreach ($idades as $idade) {
                    if ($idade >= 18) {
                        $maiores++;
                    } else {
                        $menores++;
                    }
                }

                echo "Número de pessoas maiores de idade: $maiores <br>";
                echo "Número de pessoas menores de idade: $menores <br>";
            ?>

        </section>

        <section class="exercise02">
            <div class="titleExercise">
                <h3>Exercício 04</h3>
            </div>

            <?php
                echo "Usando WHILE: <br> ";
                $i = 1;
                while ($i <= 10) {
                    echo "$i x 10 = " . $i * 10 . " <br> ";
                    $i++;
                }

                echo " <br> Usando DO-WHILE: <br> ";
                $i = 1;
                do {
                    echo "$i x 10 = " . $i * 10 . " <br> ";
                    $i++;
                } while ($i <= 10);

                echo " <br> Usando FOR: <br> ";
                for ($i = 1; $i <= 10; $i++) {
                    echo "$i x 10 = " . $i * 10 . " <br> ";
                }

                echo " <br> Usando FOREACH: <br> ";
                $numbers = range(1, 10);
                foreach ($numbers as $i) {
                    echo "$i x 10 = " . $i * 10 . " <br> ";
                }
            ?>

        </section>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 05</h3>
            </div>

            <?php
                $base = 5;
                $expoente = 4;

                echo "Usando a função pow: <br>";
                echo "$base elevado a $expoente é: " . pow($base, $expoente) . " <br> <br>";

                echo "Usando FOR: <br>";
                $resultado = 1;
                for ($i = 0; $i < $expoente; $i++) {
                    $resultado *= $base;
                }
                echo "$base elevado a $expoente é: $resultado <br> <br>";

                echo "Usando WHILE: <br>";
                $resultado = 1;
                $i = 0;
                while ($i < $expoente) {
                    $resultado *= $base;
                    $i++;
                }
                echo "$base elevado a $expoente é: $resultado <br> <br>";

                echo "Usando DO-WHILE: <br>";
                $resultado = 1;
                $i = 0;
                do {
                    $resultado *= $base;
                    $i++;
                } while ($i < $expoente);
                echo "$base elevado a $expoente é: $resultado <br>";
            ?>

        </section>
    </main>
</body>
</html>