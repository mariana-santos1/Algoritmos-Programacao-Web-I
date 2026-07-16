<?php

// Inclui o arquivo de conexão com o banco
require_once "conexao.php";

$mensagem = "";

// Verifica se o formulário foi enviado
if(isset($_POST["nome"])) {

    // Recebe os dados informados pelo usuário
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Calcula o IMC no servidor 
    $imc = round($peso / ($altura * $altura), 2);

    // Verifica se o email inserido já está cadastrado
    $sqlVerifica = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conn, $sqlVerifica);

    // Retorna mensagem caso haja usuário cadastrado com esse email
    if(mysqli_num_rows($resultado) > 0){
        $mensagem = "Já existe um usuário cadastrado com este e-mail.";
    } else {
        
        // Comando SQL para inserir o usuário no banco
        $sql = "INSERT INTO usuarios
                (nome, idade, peso, altura, imc, email, senha)
                VALUES
                ('$nome', '$idade', '$peso', '$altura', '$imc', '$email', '$senha')";

        // Executa a inserção e exibe mensagem ao usuário
        if(mysqli_query($conn, $sql)){
            $mensagem = "Usuário cadastrado com sucesso!";
        } else {
            $mensagem = "Erro ao cadastrar.";
        }
    }
}

// Fecha a conexão com o banco
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div class="container">

    <h1>Cadastro de Usuário</h1>

    <!-- Formulário enviado pelo método POST -->
    <form method="POST" onsubmit="return validarIdade();">

    <!-- Campos de entrada dos dados do usuário -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <label for="peso">Peso:</label>
        <input type="number" step="0.01" id="peso" name="peso" required>

        <label for="altura">Altura:</label>
        <input type="number" step="0.01" id="altura" name="altura" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <!-- Botões de navegação e envio -->
        <div class="botoes">
            <a href="index.html" class="botao">Voltar ao Menu</a>
            <button type="submit">Cadastrar</button>
        </div>

    </form>

    <?php
    // Verifica se existe alguma mensagem gerada pelo processamento do formulário.
    // Caso exista, exibe a mensagem dentro da caixa de resultado.
    if(!empty($mensagem)){
        echo "<div class='resultado'>$mensagem</div>";
    }
    ?>

</div>

</body>
</html>