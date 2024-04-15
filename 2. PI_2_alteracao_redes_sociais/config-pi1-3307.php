<?php

$dbHost = 'serv-cadastro-de-clientes.mysql.database.azure.com';
$dbUsername = 'PI3';
$dbPassword = 'Paio1234';
$dbName = 'cadastro_de_clientes';
$dbPort = 3306;




# de 'formulario-gustavo' para 'cadastro-de-clientes' #

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


