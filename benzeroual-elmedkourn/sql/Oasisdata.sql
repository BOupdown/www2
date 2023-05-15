DROP DATABASE IF EXISTS Oasisdata;
CREATE DATABASE Oasisdata;
USE Oasisdata;


CREATE TABLE produits (
  id INT PRIMARY KEY AUTO_INCREMENT,
  ref VARCHAR(50) NOT NULL,
  nom VARCHAR(100) NOT NULL,
  prix DECIMAL(10, 2) NOT NULL,
  description TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  categorie VARCHAR(50) NOT NULL
);



INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref5', 'Pain Multigrains', '1.50', 'Un pain aux multiples céréales, riches en fibres et en goût.', 'img/pain multigrains.png', 'boulangerie');
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref10', 'Millefeuilles', '10', 'Millefeuille: Un dessert français classique à base de feuilletage, de crème pâtissière et de glaçage royal.', 'img/img4.png', 'patisserie');
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref15', 'Tarte Tatin', '5.5', 'La tarte Tatin : cette tarte aux pommes renversée est souvent considérée comme une viennoiserie en raison de sa croûte feuilletée et croustillante. ', 'img/img10.png', 'viennoiserie');


