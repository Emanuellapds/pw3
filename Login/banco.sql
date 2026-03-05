CREATE DATABASE banco;
USE banco;
CREATE TABLE usuarios(
    id INT primary key auto_increment, 
    nome varchar(100),
    email varchar(100),
    senha varchar(100)
)
