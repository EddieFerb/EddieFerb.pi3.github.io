<?php

$dbHost = 'server-paio-pi3.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234.';
$dbName = 'formulario-paio';
$port = 3306;

// Estabelecer a conexão com o banco de dados no Azure sem SSL/TLS
$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName, $port);

// Verificar se houve erro na conexão
if (mysqli_connect_errno()) {
    echo "Erro na conexão: " . mysqli_connect_error();
    exit();
} else {
    echo "Conexão efetuada com sucesso";
}

?>
