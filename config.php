<?php

$dbHost = 'serv-paio-banco-de-dados.postgres.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234.';
$dbName = 'clientes';
$port = 3306;

# de 'formulario-gustavo' para 'cadastro-de-clientes' #

// Estabelecendo a conexão com o banco de dados no azure
//$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificando se houve erro na conexão
//if ($conexao->connect_errno) {
//    echo "Erro na conexão: " . $conexao->connect_error;
//    exit();
//} else {
//    echo "Conexão efetuada com sucesso";
//}
// Estabelecendo a conexão com o banco de dados no Azure
$conexao = pg_connect("host=$dbHost port=$port dbname=$dbName user=$dbUsername password=$dbPassword");

// Verificando se houve erro na conexão
if (!$conexao) {
    echo "Erro na conexão: " . pg_last_error($conexao);
    exit();
} else {
    echo "Conexão efetuada com sucesso";
}

?>
