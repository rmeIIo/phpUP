<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercícios - Aula 06</title>
</head>
<body>
    <main class="container">
        <div class="title">
            <h1>Exercícios - Aula 06</h1>
            <h2>Desenvolvimento de Sistemas</h2>
        </div>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 01</h3>
            </div>

            <?php
                $vetor = array(1, 2, 3, 4, 5);

                $maior_numero_for = $vetor[0];
                for ($i = 1; $i < count($vetor); $i++) {
                    if ($vetor[$i] > $maior_numero_for) {
                        $maior_numero_for = $vetor[$i];
                    }
                }
                echo "O maior número usando for é: " . $maior_numero_for . "<br>";

                $maior_numero_foreach = $vetor[0];
                foreach ($vetor as $numero) {
                    if ($numero > $maior_numero_foreach) {
                        $maior_numero_foreach = $numero;
                    }
                }

                echo "O maior número usando foreach é: " . $maior_numero_foreach . "<br>";
            ?>

        </section>

        <section class="exercise02">
            <div class="titleExercise">
                <h3>Exercício 02</h3>
            </div>

            <?php
                $carros = array(
                    array("Mustang", "Ford", "Vermelho", 2022),
                    array("Argo", "Fiat", "Branco", 2023),
                    array("Onix", "GM", "Prata", 2024),
                    array("Corolla", "Toyota", "Preto", 2020),
                    array("Versa", "Nissan", "Cinza", 2018),
                    array("HB20", "Hyundai", "Marrom", 2023),
                    array("Prius", "Toyota", "Prata", 2024),
                    array("Endeavor", "Mitsubishi", "Azul", 2019),
                    array("Lamborghini Revuelto", "Lamborghini", "Amarelo", 2024),
                    array("Impreza", "Subaru", "Azul", 2019)
                );

                echo "Listagem de todos os registros:<br>";
                foreach ($carros as $carro) {
                    echo "Nome do carro: $carro[0], Fabricante: $carro[1], Cor: $carro[2], Ano de fabricação: $carro[3]<br>";
                }

                echo "<br>Listagem após a remoção do ano de fabricação dos carros fabricados antes de 2023:<br>";
                foreach ($carros as $carro) {
                    if ($carro[3] < 2023) {
                        unset($carro[3]);
                    }
                    echo "Nome do carro: $carro[0], Fabricante: $carro[1], Cor: $carro[2]";
                    if (isset($carro[3])) {
                        echo ", Ano de fabricação: $carro[3]";
                    }
                    echo "<br>";
                }
            ?>

        </section>

        <section class="exercise01">
            <div class="titleExercise">
                <h3>Exercício 03</h3>
            </div>

            <?php
                $texto = "&u gosto d& estudar a linguag&m PHP &m finais de semana";

                $texto_corrigido = str_replace("&u", "Eu", $texto);
                $texto_corrigido = str_replace("d&", "de", $texto_corrigido);
                $texto_corrigido = str_replace("linguag&m", "linguagem", $texto_corrigido);
                $texto_corrigido = str_replace("&m", "em", $texto_corrigido);

                echo $texto_corrigido;
            ?>

        </section>

        <section class="exercise02">
            <div class="titleExercise">
                <h3>Exercício 04</h3>
            </div>

            <?php
                $string = "ARARA";

                $frequencia = count_chars($string, 1);
                
                $repetidos = "";
                foreach ($frequencia as $char => $freq) {
                    if ($freq > 1) {
                        $repetidos .= str_repeat(chr($char), $freq);
                    }
                }
                
                echo $repetidos;
            ?>

        </section>
    </main>
</body>
</html>