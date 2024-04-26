<?php

$dbHost = 'server-paio-pi3.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234.';
$dbName = 'formulario-paio';
$port = 3306;

// Caminho para o certificado CA
$sslCa = '/Users/eddieferb/Desktop/EddieFerb.github.io/DigiCertGlobalRootCA.crt.pem';

// Configurações SSL/TLS
$sslOptions = array(
    "sslmode" => MYSQLI_SSL_MODE_REQUIRED,
    "sslca" => $sslCa
);

// Estabelecer a conexão com o banco de dados no Azure com opções de SSL
$conexao = mysqli_init();
mysqli_ssl_set($conexao, NULL, NULL, $sslCa, NULL, NULL);
mysqli_real_connect($conexao, $dbHost, $dbUsername, $dbPassword, $dbName, $port, NULL, $sslOptions);

// Verificar se houve erro na conexão
if (mysqli_connect_errno()) {
    echo "Erro na conexão: " . mysqli_connect_error();
    exit();
} else {
    echo "Conexão efetuada com sucesso";
}

?>
