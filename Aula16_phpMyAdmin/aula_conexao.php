<?php

require_once "conexao.php";

echo "<h2>Conexão com o banco realizada com sucesso!</h2>";

$sql = "SELECT * FROM produtos ORDER BY criado_em DESC";
$resultado = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultado) > 0) {
    echo "<h3>Lista de Produtos:</h3>";
    echo "<table boarder='1' cellpadding='8'>";
    echo "<tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Criado Em</th>
        </tr>";

    while ($produto = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $produto['id'] . "</td>";
        echo "<td>" . $produto['nome'] . "</td>";
        echo "<td> R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
        echo "<td>" . $produto['catogoria'] . "</td>";
        echo "<td>" . $produto['criado_em'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum produto cadastrado ainda.</p>";
}

mysqli_close($conn);

?>