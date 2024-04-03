<?php

$dbHost = 'cadastro-de-clientes.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234.';
$dbName = 'formulario-gustavo';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($conexao->connect_errno) 
{
    echo "Erro na conexão";
} 
else 
{
    echo "Conexão efetuada com sucesso";
}

?>
