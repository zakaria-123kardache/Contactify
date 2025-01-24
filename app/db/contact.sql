CREATE DATABASE Contactify ; 
USE Contactify ; 

CREATE TABLE Contacts(
    id INT PRIMARY KEY AUTO_INCREMENT ,
    photo VARCHAR (250), 
    lastname VARCHAR (5O), 
    firstname VARCHAR (5O), 
    email VARCHAR (5O), 
    numero  VARCHAR (5O) 
);

INSERT INTO contacts (photo, nom, prenom, email, numero)
VALUES
('https://cdn.sofifa.net/flags/ar.png', 'kardache' ,'zakaria' , 'ardache.@mail.cc','63456756'),
('https://cdn.sofifa.net/flags/ar.png', 'kardache' , 'ahmed' , 'dache.@mail.cc','63456756');