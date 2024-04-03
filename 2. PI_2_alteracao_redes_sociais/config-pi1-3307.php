<?php

$dbHost = 'cadastro-de-clientes.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234';
$dbName = 'formulario-paio';
$dbPort = 3306;


$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

if ($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão efetuada com sucesso";
}

?>


