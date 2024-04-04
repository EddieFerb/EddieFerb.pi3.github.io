<?php

$dbHost = 'cadastro-de-clientes.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234.';
$dbName = 'cadastro-de-clientes';

# de 'formulario-gustavo' para 'cadastro-de-clientes' #

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($conexao->connect_errno) 
{
    echo "Erro na conexão";
} 
else 
{
    echo "Conexão efetuada com sucesso";
}

// Testar a conexão com o banco de dados
if ($conn->ping()) {
    echo "Conexão bem-sucedida!";
} else {
    echo "Erro ao conectar: " . $conn->error;
}



?>
