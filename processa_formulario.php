<?php
// Conexão com o banco de dados
$servername = "server-paio-pi3.mysql.database.azure.com";
$username = "PI3";
$password = "Paio1234.";
$dbname = "formulario-paio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
// Adicione os outros campos aqui...

// Insere os dados no banco de dados
$sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
// Execute a query
if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
