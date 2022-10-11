# 
# Description : Script SQL pour créer et initialiser les tables produits et utilisateurs
#               pour la base de données "commerce"
#               utilisée dans les  démos du cours 420-G16-R0
# Date        : 2020/03/11
# Auteur      : Dini Ahamada
#

CREATE DATABASE commerce DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE commerce;

CREATE TABLE produit (
  code         INT(8),
  description  VARCHAR(255),
  marque       VARCHAR(255),
  prix	       FLOAT(8,2),
  quantite     INT(8),
  url_photo    VARCHAR(255),
  CONSTRAINT produit_pk PRIMARY KEY (code)
);

INSERT INTO produit VALUES (101,'Marteau en acier trempé','Stanley',25.55,25,'Marteau_101.png');
INSERT INTO produit VALUES (102,'Marteau en fer','Master Craft',15.55,15,'Marteau_102.png');
INSERT INTO produit VALUES (103,'Marteau en plastique','Fisher Price',14.55,2,'Marteau_103.png');
INSERT INTO produit VALUES (104,'Tournevis plat #2 30cm','Marque maison',16.78,21,'Tournevis_104.png');
INSERT INTO produit VALUES (105,'Tournevis plat #2 45cm','Marque maison',19.78,0,'Tournevis_105.png');
INSERT INTO produit VALUES (106,'Tournevis plat #2 45cm','Stanley',25.78,0,'Tournevis_106.png');
INSERT INTO produit VALUES (107,'Tournevis plat #2 manche court','Fuller',15.99,110,'Tournevis_107.png');
INSERT INTO produit VALUES (108,'Tournevis plat #3 manche long','Fuller',14.99,10,'Tournevis_108.png');
INSERT INTO produit VALUES (109,'Tournevis plat #3 45cm','Stanley',25.45,80,'Tournevis_109.png');
INSERT INTO produit VALUES (110,'Tournevis étoile #1','Marque maison',15.45,16,'Tournevis_110.png');
INSERT INTO produit VALUES (111,'Tournevis étoile #1','Fuller',15.45,0,'Tournevis_111.png');
INSERT INTO produit VALUES (112,'Tournevis étoile #2','Stanley',26.45,17,'Tournevis_112.png');
INSERT INTO produit VALUES (113,'Tournevis étoile #2','Fuller',22.45,14,'Tournevis_113.png');
INSERT INTO produit VALUES (114,'Tournevis carré #1 manche court','Fuller',20.45,0,'Tournevis_114.png');
INSERT INTO produit VALUES (115,'Tournevis carré #1 manche long','Fuller',25.67,86,'Tournevis_115.png');
INSERT INTO produit VALUES (116,'Tournevis carré #1 30cm','Stanley',28.29,160,'Tournevis_116.png');
INSERT INTO produit VALUES (117,'Tournevis carré #1 45cm','Stanley',23.66,6,'Tournevis_117.png');


CREATE TABLE utilisateur (
  nom         VARCHAR(255),
  mot_passe   VARCHAR(255),
  CONSTRAINT user_pk PRIMARY KEY (nom)
);

INSERT INTO utilisateur VALUES ('root','root');
INSERT INTO utilisateur VALUES ('moi','1234');
