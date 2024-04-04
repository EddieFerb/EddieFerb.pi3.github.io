CREATE DATABASE cadastro_de_clientes;

USE cadastro_de_clientes;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    telefone VARCHAR(20),
    sexo ENUM('Feminino', 'Masculino', 'Outro'),
    data_nasc DATE,
    cidade VARCHAR(100),
    estado VARCHAR(2),
    endereco VARCHAR(255)
);
