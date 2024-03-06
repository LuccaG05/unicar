CREATE DATABASE unicar;
USE unicar;

CREATE TABLE usuarios(
    email VARCHAR (50) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    preferencias VARCHAR(10) NOT NULL,
    cep VARCHAR (20) NOT NULL,
    rua VARCHAR(50) NOT NULL,
    bairro VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado CHAR(2),
    PRIMARY KEY (email)
);


SELECT * FROM usuarios;

CREATE TABLE veiculos(
	placa VARCHAR(10) NOT NULL,
    tipo VARCHAR(10) NOT NULL,
    modelo VARCHAR(20),
    cor CHAR(12),
    capacidade INT NOT NULL,
    ra INT NOT NULL,
    motorista VARCHAR(50) NOT NULL,
    PRIMARY KEY (placa)
);

INSERT INTO veiculos
VALUES ('BRA2E19', 'CARRO', 'BMW', 'Preto', '5', 1919191, 'LK');

SELECT * FROM veiculos;

CREATE TABLE recuperar_senha(
	email VARCHAR(50) NOT NULL,
    ra INT NOT NULL,
    nome VARCHAR(50) NOT NULL
);

CREATE TABLE perfil(
	ra INT NOT NULL,
	nome VARCHAR(50) NOT NULL,
    email VARCHAR (50),
    descricao VARCHAR(50),
    editar_perfil VARCHAR(50),
    nascimento DATE,
    PRIMARY KEY (ra)
);

CREATE TABLE avaliacao(
	usuario VARCHAR (50),
    num DECIMAL (2,1),
    descricao VARCHAR(50)
);

