<?php

// Importar a constante MYSQLI_SSL_MODE_REQUIRED manualmente
if (!defined('MYSQLI_SSL_MODE_REQUIRED')) {
    define('MYSQLI_SSL_MODE_REQUIRED', 1);
}

// Dados de conexão ao banco de dados
$dbHost = 'server-paio-pi3.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234.';
$dbName = 'formulario-paio';
$port = 3306;

// Configurações SSL/TLS
$sslOptions = MYSQLI_SSL_MODE_REQUIRED;

// Habilitar o transporte seguro
$sslCa = '/Users/eddieferb/Desktop/EddieFerb.github.io/DigiCertGlobalRootCA.crt.pem';

// Estabelecer a conexão com o banco de dados no Azure com opções de SSL
$con = mysqli_init();
mysqli_ssl_set($con, NULL, NULL,'/Users/eddieferb/Desktop/EddieFerb.github.io/DigiCertGlobalRootCA.crt.pem', NULL, NULL);
mysqli_real_connect($con, "server-paio-pi3.mysql.database.azure.com", "PI3", "Paio1234.", "formulario-paio", 3306, MYSQLI_CLIENT_SSL);

// Verificar se houve erro na conexão
if (mysqli_connect_errno()) {
    echo "Erro na conexão: " . mysqli_connect_error();
    exit();
} else {
    echo "Conexão efetuada com sucesso";
}

// Restante do seu código aqui...

?>
