<?php

// Inclui a conexão com o banco de dados
require_once "conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Buscar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Buscar Usuário</h1>

    <!-- Formulário enviado pelo método GET -->
    <form method="GET">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <div class="botoes">
            <a href="index.html" class="botao">Voltar ao Menu</a>
            <button type="submit">Buscar</button>
        </div>

    </form>

    <?php

    // Verifica se foi informado um e-mail para pesquisa
    if(isset($_GET["email"])) {

        $email = $_GET["email"];

        // Consulta o usuário pelo e-mail
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";

        $resultado = mysqli_query($conn, $sql);

        // Verifica se encontrou registros
        if(mysqli_num_rows($resultado) > 0) {

            // Obtém os dados do usuário encontrado
            $usuario = mysqli_fetch_assoc($resultado);

            // Exibe os dados cadastrados
            echo "<div class='resultado'>";
            echo "<h3>Dados Encontrados</h3>";
            echo "<p><strong>Nome:</strong> " . $usuario['nome'] . "</p>";
            echo "<p><strong>Idade:</strong> " . $usuario['idade'] . "</p>";
            echo "<p><strong>Peso:</strong> " . $usuario['peso'] . " kg</p>";
            echo "<p><strong>Altura:</strong> " . $usuario['altura'] . " m</p>";
            echo "<p><strong>IMC:</strong> " . number_format($usuario['imc'], 2, ',', '.') . "</p>";
            echo "</div>";

        } else {

            // Mensagem caso o usuário não seja encontrado
            echo "<div class='resultado'>";
            echo "Nenhum usuário encontrado.";
            echo "</div>";

        }
    }

    // Fecha a conexão com o banco
    mysqli_close($conn);

    ?>

</div>

</body>
</html>