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


INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref1', 'Baguette', '1.0 euros', 'La baguette traditionnelle française, croustillante à l'extérieur et moelleuse à l'intérieur.', 'img/baguette.jpg', 'boulangerie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref2', 'Pain rond', '1.50 euros', 'Un pain rond aux notes légèrement sucrées, parfait pour les sandwiches ou les tartines.', 'img/painrond.jpeg', 'boulangerie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref3', 'Couronne Bordelaise', '1.5 euros', 'Une couronne de pain aux accents de vin rouge de Bordeaux, idéale pour accompagner une planche de charcuterie.', 'img/couronneBordelaise.jpg', 'boulangerie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref4', 'Bagel', '1.0 euros', 'Un petit pain rond et moelleux, avec un trou au milieu, parfait pour y mettre du fromage frais, du saumon fumé ou du bacon.', 'img/bagel.png', 'boulangerie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref5', 'Pain Multigrains', '1.50 euros', 'Un pain aux multiples céréales, riches en fibres et en goût.', 'img/pain multigrains.png', 'boulangerie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref6', 'Paris-Brest', '6 euros', 'Paris Brest: Une pâtisserie française en forme de couronne, faite de pâte à choux, garnie de crème pralinée et d'amandes effilées.', 'img/img1.png', 'patisserie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref7', 'Macaron', '2.5 euros', 'Macarons: Des petits biscuits ronds et colorés, avec une coque croquante et une ganache fondante au milieu, originaires de France.', 'img/img2.png', 'patisserie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref8', 'Eclair', '3 euros', 'Éclairs: Des pâtisseries allongées en forme de tube, faites de pâte à choux, remplies de crème pâtissière et garnies de glaçage au chocolat.', 'img/img3.png', 'patisserie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref9', 'Foret Noire', '5 euros', 'Forêt Noire: Un gâteau allemand en couches, composé de génoise au chocolat, de crème fouettée et de cerises, souvent décoré de copeaux de chocolat noir.', 'img/img5.png', 'patisserie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref10', 'Millefeuilles', '10 euros', 'Millefeuille: Un dessert français classique à base de feuilletage, de crème pâtissière et de glaçage royal.', 'img/img4.png', 'patisserie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref11', 'Croissant', '1.5 euros', 'Le croissant : une viennoiserie en forme de croissant, feuilletée et croustillante, traditionnellement mangée au petit-déjeuner.', 'img/img6.png', 'viennoiserie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref12', 'Baguette Viennoise', '2 euros', 'La baguette viennoise : une viennoiserie en forme de baguette, moelleuse et légèrement sucrée, souvent servie au petit-déjeuner ou au goûter.', 'img/img7.png', 'viennoiserie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref13', 'Chocolatine', '1.5 euros', 'Le pain au chocolat : une viennoiserie en forme de bâtonnet, feuilletée et fourrée de chocolat, souvent mangée au petit-déjeuner ou en collation.', 'img/img8.png', 'viennoiserie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref14', 'Brioche', '2.5 euros', 'La brioche : une viennoiserie en forme de boule ou de tresse, moelleuse et sucrée, souvent servie au petit-déjeuner ou en dessert.', 'img/img9.png', 'viennoiserie')
INSERT INTO produits (ref, nom, prix, description, image, categorie) VALUES ('ref15', 'Tarte Tatin', '5.5 euros', 'La tarte Tatin : cette tarte aux pommes renversée est souvent considérée comme une viennoiserie en raison de sa croûte feuilletée et croustillante. ', 'img/img10.png', 'viennoiserie')
