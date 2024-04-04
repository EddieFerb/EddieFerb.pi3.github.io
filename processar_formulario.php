<?php
include_once('config.php');

if(isset($_POST['submit'])) {
    $query = "INSERT INTO clientes (nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $conexao->prepare($query)) {
        $stmt->bind_param("ssssssss", $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['genero'], $_POST['data_nascimento'], $_POST['cidade'], $_POST['estado'], $_POST['endereco']);
        
        if ($stmt->execute()) {
            echo "Registro inserido com sucesso.";
        } else {
            echo "Erro ao inserir o registro: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Erro na preparação da declaração: " . $conexao->error;
    }
}
?>
