<?php

$dbHost = 'server-paio-pi3.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234.';
$dbName = 'formulario-paio';
$port = 3306;

// Habilitar o transporte seguro
$sslOptions = array(
    "sslmode" => MYSQLI_SSL_MODE_REQUIRED,
    "sslcert" => "path/to/client-cert.pem",
    "sslkey" => "path/to/client-key.pem",
    "sslca" => "path/to/ca-cert.pem"
);

// Estabelecer a conexão com o banco de dados no Azure com opções de SSL
$conexao = mysqli_init();
mysqli_ssl_set($conexao, NULL, NULL, "path/to/ca-cert.pem", NULL, NULL);
mysqli_real_connect($conexao, $dbHost, $dbUsername, $dbPassword, $dbName, $port, NULL, $sslOptions);

// Verificar se houve erro na conexão
if (mysqli_connect_errno()) {
    echo "Erro na conexão: " . mysqli_connect_error();
    exit();
} else {
    echo "Conexão efetuada com sucesso";
}

?>
