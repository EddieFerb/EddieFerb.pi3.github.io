<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configurações do ClearDB MySQL
$db_host = "us-cdbr-east-01.cleardb.com";
$db_user = "bd4484bc4707c1";
$db_pass = "f6c56a50";
$db_name = "heroku_9076c04e8309ddd";

// Conexão com o banco de dados MySQL
$conexao = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Verificar se o formulário foi enviado
if(isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Evitar SQL Injection usando prepared statements
    $query = "INSERT INTO clientes (nome, email) VALUES (?, ?)";
    
    // Preparar a declaração
    $stmt = mysqli_prepare($conexao, $query);
    if ($stmt) {
        // Vincular parâmetros
        mysqli_stmt_bind_param($stmt, "ss", $nome, $email);
        
        // Executar a declaração
        $result = mysqli_stmt_execute($stmt);
        
        // Verificar se a inserção foi bem-sucedida
        if ($result) {
            echo "Registro inserido com sucesso.";
        } else {
            echo "Erro ao inserir o registro: " . mysqli_error($conexao);
        }
        
        // Fechar a declaração
        mysqli_stmt_close($stmt);
    } else {
        echo "Erro na preparação da declaração: " . mysqli_error($conexao);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro de Clientes | GN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário Cadastro de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" class="inputUser" required>
                    <label for="email">E-mail</label>
                </div>
                <br><br>
                <!-- Adicione outros campos conforme necessário -->
                <input type="submit" name="submit" id="enviar" value="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
