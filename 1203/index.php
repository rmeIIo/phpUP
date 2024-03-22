<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercícios - Aula 03</title>
</head>
<body>
    <main class="container">
        <div class="title">
            <h1>Exercícios - Aula 03</h1>
            <h2>Desenvolvimento de Sistemas</h2>
        </div>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 01</h3>
            </div>

            <?php 
                $nota1 = 7.0; // Digite a primeira nota aqui
                $nota2 = 8.5; // Digite a segunda nota aqui
                $nota3 = 9.0; // Digite a terceira nota aqui
                
                $media = ($nota1 + $nota2 + $nota3) / 3;
                
                echo "A média do aluno é: " . $media . "<br>";
                echo "O tipo da variável média é: " . gettype($media) . "<br>";
                
                // Usando IF, ELSE, ELSEIF
                if ($media < 4.0) {
                    echo "Aluno reprovado <br>";
                } elseif ($media >= 4.0 && $media < 6.0) {
                    echo "Aluno aguardando prova substitutiva <br>";
                } elseif ($media >= 6.0 && $media < 10.0) {
                    echo "Aluno aprovado <br>";
                } else {
                    echo "Aluno aprovado sem dificuldades <br>";
                }
                
                // Usando MATCH
                $status = match (true) {
                    $media < 4.0 => "Aluno reprovado",
                    $media >= 4.0 && $media < 6.0 => "Aluno aguardando prova substitutiva",
                    $media >= 6.0 && $media < 10.0 => "Aluno aprovado",
                    default => "Aluno aprovado sem dificuldades",
                };
                
                echo "Status do aluno (usando MATCH): " . $status . " <br>";
            ?>
        </section>

        <section class="exercise02">
            <div class="titleExercise">
                <h3>Exercício 02</h3>
            </div>

            <?php 
                $lado1 = 5; 
                $lado2 = 5; 
                $lado3 = 5;
                
                if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
                    if ($lado1 == $lado2 && $lado2 == $lado3) {
                        echo "O triângulo é equilátero <br>";
                    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                        echo "O triângulo é isósceles <br>";
                    } else {
                        echo "O triângulo é escaleno <br>";
                    }
                } else {
                    echo "Os valores informados não formam um triângulo <br>";
                }
            ?>
        </section>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 03</h3>
            </div>

            <?php 
                $numero = 7;

                // Usando IF, ELSE
                if ($numero % 2 == 0) {
                    echo "O número é par <br>";
                } else {
                    echo "O número é ímpar <br>";
                }
                
                // Usando ELSEIF
                if ($numero % 2 == 0) {
                    echo "O número é par <br>";
                } elseif ($numero % 2 != 0) {
                    echo "O número é ímpar <br>";
                }
                
                // Usando SWITCH
                switch ($numero % 2) {
                    case 0:
                        echo "O número é par <br>";
                        break;
                    default:
                        echo "O número é ímpar <br>";
                }
                
                // Usando MATCH
                $status = match ($numero % 2) {
                    0 => "O número é par",
                    default => "O número é ímpar",
                };
                
                echo $status . " <br>";
            ?>
        </section>

        <section class="exercise02">
            <div class="titleExercise">
                <h3>Exercício 04</h3>
            </div>

            <?php 
                $anoNascimento = 2000; 

                $anoAtual = date("Y");
                $idade = $anoAtual - $anoNascimento;
                
                if ($idade < 16) {
                    echo "Você tem " . $idade . " anos e não está apto a votar. <br>";
                } elseif ($idade >= 16 && $idade < 18 || $idade > 70) {
                    echo "Você tem " . $idade . " anos e seu voto é facultativo. <br>";
                } else {
                    echo "Você tem " . $idade . " anos e seu voto é obrigatório. <br>";
                }
            ?>
        </section>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 05</h3>
            </div>

            <?php 
                $numero = 5; 

                $operacao = 2;
                
                switch ($operacao) {
                    case 1:
                        $resultado = $numero * 2;
                        echo "O dobro do número é: $resultado <br>";
                        break;
                    case 2:
                        $resultado = $numero ** 3;
                        echo "O cubo do número é: $resultado <br>";
                        break;
                    case 3:
                        $resultado = sqrt($numero);
                        echo "A raiz quadrada do número é: $resultado <br>";
                        break;
                    default:
                        echo "Operação inválida. <br>";
                }
                
                // Usando a estrutura MATCH
                $resultado = match ($operacao) {
                    1 => $numero * 2,
                    2 => $numero ** 3,
                    3 => sqrt($numero),
                    default => "Operação inválida. <br>"
                };
                
                echo "Resultado: $resultado <br>";
            ?>
        </section>
    </main>
</body>
</html>