#
# Description : Script SQL pour supprimer les tables produits et utilisateurs, et la 
#               base de données "commerce"
#               utilisée dans les  démos du cours 420-G16-R0
# Date        : 2020/03/11
# Auteur      : Dini Ahamada
#
USE commerce;

DELETE FROM produit;
DROP TABLE produit;

DELETE FROM utilisateur;
DROP TABLE utilisateur;

DROP DATABASE commerce;

