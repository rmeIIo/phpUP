<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Dados do Formulário</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $estado_civil = $_POST['estado_civil'];
    $sexo = $_POST['sexo'];
    $veiculos = isset($_POST['veiculos']) ? $_POST['veiculos'] : [];
    $senha = $_POST['senha'];
    $confirm_senha = $_POST['confirmar_senha'];

    if (empty($veiculos)) {
        echo "Você não informou nenhum veículo.";
    } else {
        echo "<p>Nome: $nome</p>";
        echo "<p>Data de Nascimento: $data_nascimento</p>";
        echo "<p>Endereço: $endereco</p>";
        echo "<p>Estado Civil: $estado_civil</p>";
        echo "<p>Sexo: $sexo</p>";
        echo "<p>Veículos:</p>";
        echo "<ul>";
        foreach ($veiculos as $veiculo) {
            echo "<li>$veiculo</li>";
        }
        echo "</ul>";

        if ($senha === $confirm_senha) {
            echo "<p>Senha: $senha</p>";
        } else {
            echo "As senhas não coincidem.";
        }
    }
    ?>

    <br>
    <a href="index.html">Voltar</a>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se algum campo foi preenchido
        if (!empty($_POST)) {
            // Percorre todos os campos do formulário
            foreach ($_POST as $key => $value) {
                // Limpa apenas os campos que foram preenchidos
                $_POST[$key] = '';
            }
        }
    }
    ?>

</body>
</html>
