<?php

// Dados de conexão com o banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema_web";
$porta = 3307;

// Cria a conexão com o MySQL
$conn = mysqli_connect($host, $usuario, $senha, $banco, $porta);

// Verifica se houve erro na conexão
if(!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Define o conjunto de caracteres UTF-8
mysqli_set_charset($conn, "utf8mb4");

?>