create database projetophp;

CREATE TABLE  IF NOT EXISTS projetophp.cadastro(
    id int(11) NOT NULL  AUTO_INCREMENT,
    nome VARCHAR(90) NOT NULL,
    email VARCHAR(90) NOT NULL,
    senha VARCHAR(90) NOT NULL,
    sexo  VARCHAR(90) NOT NULL, 
    cidade VARCHAR(90) NOT NULL,
    PRIMARY KEY (id)
);