<?php
// Definir variáveis de conexão com o banco de dados
$db_host = "us-cluster-east-01.k8s.cleardb.net";
$db_user = "bd4484bc4707c1";
$db_pass = "f6c56a50";
$db_name = "heroku_9076c04e8309ddd";

// Conectar ao banco de dados
$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Verificar a conexão
if (!$connect) {
    die("Erro de conexão com o banco de dados: " . mysqli_connect_error());
}
