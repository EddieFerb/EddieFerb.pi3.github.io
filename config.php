<?php

$dbHost = 'cadastro-de-clientes.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234.';
$dbName = 'cadastro_de_clientes';

# de 'formulario-gustavo' para 'cadastro-de-clientes' #

// Estabelecendo a conexão com o banco de dados
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificando se houve erro na conexão
if ($conexao->connect_errno) {
    echo "Erro na conexão: " . $conexao->connect_error;
    exit();
} else {
    echo "Conexão efetuada com sucesso";
}
?>