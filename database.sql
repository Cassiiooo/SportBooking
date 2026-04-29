CREATE DATABASE sportbooking;

USE sportbooking;

CREATE TABLE utenti(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50),
email VARCHAR(50),
password VARCHAR(255)
);

CREATE TABLE campi(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50),
sport VARCHAR(30),
prezzo DECIMAL(6,2)
);

CREATE TABLE prenotazioni(
id INT AUTO_INCREMENT PRIMARY KEY,
idUtente INT,
idCampo INT,
data DATE,
ora TIME
);

INSERT INTO campi(nome,sport,prezzo) VALUES
('Campo A','Calcetto',40),
('Campo B','Tennis',25),
('Campo C','Padel',30);