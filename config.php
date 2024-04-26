<?php

$dbHost = 'server-paio-pi3.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234.';
$dbName = 'formulario-paio';
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
$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName, $port);

// Verificando se houve erro na conexão
if (mysqli_connect_errno()) {
    echo "Erro na conexão: " . mysqli_connect_error();
    exit();
} else {
    echo "Conexão efetuada com sucesso";
}

?>
