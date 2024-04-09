<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercícios - Aula 05</title>
</head>
<body>
    <main class="container">
        <div class="title">
            <h1>Exercícios - Aula 05</h1>
            <h2>Desenvolvimento de Sistemas</h2>
        </div>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 01</h3>
            </div>

            <?php
                function calcularMedia($notas) {
                    $soma = array_sum($notas);
                    $media = $soma / count($notas);
                    return $media;
                }

                function determinarStatus($media) {
                    if ($media >= 7) {
                        return "Aprovado";
                    } elseif ($media >= 5) {
                        return "Recuperação";
                    } else {
                        return "Reprovado";
                    }
                }

                $alunos = [
                    "Aluno1" => [7, 8, 6, 7],
                    "Aluno2" => [5, 6, 7, 6],
                    "Aluno3" => [3, 4, 2, 6]
                ];

                foreach ($alunos as $nome => $notas) {
                    $media = calcularMedia($notas);
                    $status = determinarStatus($media);
                    echo "$nome tem uma média de $media e está $status.<br>";
                }
            ?>


        </section>

        <section class="exercise02">
            <div class="titleExercise">
                <h3>Exercício 02</h3>
            </div>

            <?php
                function somaOuZero($valor1, $valor2) {
                    $soma = $valor1 + $valor2;
                    return $soma < 0 ? 0 : $soma;
                }

                $valor1 = 5; 
                $valor2 = -10; 

                $resultado = somaOuZero($valor1, $valor2);

                echo "O resultado é $resultado.";
            ?>


        </section>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 03</h3>
            </div>

            <?php
                function calcular($operacao, $num1, $num2) {
                    switch ($operacao) {
                        case 'soma':
                            $resultado = $num1 + $num2;
                            break;
                        case 'subtracao':
                            $resultado = $num1 - $num2;
                            break;
                        case 'multiplicacao':
                            $resultado = $num1 * $num2;
                            break;
                        case 'divisao':
                            $resultado = $num1 / $num2;
                            break;
                        case 'exponenciacao':
                            $resultado = pow($num1, $num2);
                            break;
                        default:
                            echo "Operação inválida.";
                            return;
                    }
                    echo "O resultado da $operacao é $resultado.";
                }

                $operacao = 'soma'; // substitua pela operação: 'soma', 'subtracao', 'multiplicacao', 'divisao', 'exponenciacao'
                $num1 = 5; 
                $num2 = 3; 

                calcular($operacao, $num1, $num2);
            ?>
            
        </section>

        <section class="exercise02">
            <div class="titleExercise">
                <h3>Exercício 04</h3>
            </div>

            <?php
                function calcularMedia1($notas) {
                    $soma = array_sum($notas);
                    $media = $soma / count($notas);
                    return $media;
                }

                function determinarStatus1($media) {
                    if ($media > 10) {
                        return "Nota(s) inválida(s)";
                    } elseif ($media >= 6) {
                        return "Aprovado";
                    } else {
                        return "Reprovado";
                    }
                }

                $notas = [7, 8, 6, 7]; 

                $media = calcularMedia1($notas);
                $status = determinarStatus1($media);

                echo "A média é $media e o aluno está $status.";
            ?>


        </section>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 05</h3>
            </div>

            <?php
                function fatorial($num) {
                    $resultado = 1;
                    for ($i = $num; $i > 1; $i--) {
                        $resultado *= $i;
                    }
                    return $resultado;
                }

                $num = 5; 

                $resultado = fatorial($num);

                echo "!$num = $resultado.";
            ?>


        </section>
    </main>
</body>
</html>