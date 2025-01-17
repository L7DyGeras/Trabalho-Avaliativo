CREATE DATABASE floresta_verde;

USE floresta_verde;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    mensagem TEXT
);
