-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour mds
CREATE DATABASE IF NOT EXISTS `mds` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `mds`;

-- Listage de la structure de la table mds. actualite
CREATE TABLE IF NOT EXISTS `actualite` (
  `idActu` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) DEFAULT NULL,
  `Contenu` text,
  PRIMARY KEY (`idActu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.actualite : ~0 rows (environ)
/*!40000 ALTER TABLE `actualite` DISABLE KEYS */;
/*!40000 ALTER TABLE `actualite` ENABLE KEYS */;

-- Listage de la structure de la table mds. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCat` int(11) NOT NULL AUTO_INCREMENT,
  `libelleCat` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.categorie : ~2 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`idCat`, `libelleCat`) VALUES
	(1, 'e-liquide'),
	(2, 'accessoires');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table mds. client
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Telephone` varchar(15) DEFAULT NULL,
  `Connexion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idClient`),
  KEY `connexion_client` (`Connexion_id`),
  CONSTRAINT `connexion_client` FOREIGN KEY (`Connexion_id`) REFERENCES `connexion` (`idConnexion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.client : ~0 rows (environ)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage de la structure de la table mds. commande
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.commande : ~0 rows (environ)
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;

-- Listage de la structure de la table mds. commander
CREATE TABLE IF NOT EXISTS `commander` (
  `Commande_id` int(11) NOT NULL,
  `Produit_id` int(11) DEFAULT NULL,
  `Quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`Commande_id`),
  KEY `commander_produit` (`Produit_id`),
  CONSTRAINT `commander_commande` FOREIGN KEY (`Commande_id`) REFERENCES `commande` (`idCommande`),
  CONSTRAINT `commander_produit` FOREIGN KEY (`Produit_id`) REFERENCES `produit` (`idPdt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.commander : ~0 rows (environ)
/*!40000 ALTER TABLE `commander` DISABLE KEYS */;
/*!40000 ALTER TABLE `commander` ENABLE KEYS */;

-- Listage de la structure de la table mds. connexion
CREATE TABLE IF NOT EXISTS `connexion` (
  `idConnexion` int(11) NOT NULL AUTO_INCREMENT,
  `Identifiant` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idConnexion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.connexion : ~0 rows (environ)
/*!40000 ALTER TABLE `connexion` DISABLE KEYS */;
/*!40000 ALTER TABLE `connexion` ENABLE KEYS */;

-- Listage de la structure de la table mds. gout
CREATE TABLE IF NOT EXISTS `gout` (
  `IdGout` int(11) NOT NULL AUTO_INCREMENT,
  `libelleGout` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`IdGout`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.gout : ~8 rows (environ)
/*!40000 ALTER TABLE `gout` DISABLE KEYS */;
INSERT INTO `gout` (`IdGout`, `libelleGout`) VALUES
	(1, 'Miel'),
	(2, 'Citron'),
	(3, 'Fleur de cerisier'),
	(4, 'Fraise'),
	(5, 'Cerise noire'),
	(6, 'Thé noir'),
	(7, 'Fruit du dragon'),
	(8, 'Thé vert');
/*!40000 ALTER TABLE `gout` ENABLE KEYS */;

-- Listage de la structure de la table mds. gouter
CREATE TABLE IF NOT EXISTS `gouter` (
  `Perso_id` int(11) NOT NULL,
  `Gout_id` int(11) NOT NULL,
  PRIMARY KEY (`Perso_id`,`Gout_id`),
  KEY `gouter_gout` (`Gout_id`),
  CONSTRAINT `gouter_gout` FOREIGN KEY (`Gout_id`) REFERENCES `gout` (`IdGout`),
  CONSTRAINT `gouter_perso` FOREIGN KEY (`Perso_id`) REFERENCES `personnalisation` (`idPdtP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.gouter : ~6 rows (environ)
/*!40000 ALTER TABLE `gouter` DISABLE KEYS */;
INSERT INTO `gouter` (`Perso_id`, `Gout_id`) VALUES
	(15, 1),
	(17, 1),
	(13, 2),
	(16, 2),
	(20, 6),
	(19, 8),
	(21, 8);
/*!40000 ALTER TABLE `gouter` ENABLE KEYS */;

-- Listage de la structure de la table mds. personnalisation
CREATE TABLE IF NOT EXISTS `personnalisation` (
  `idPdtP` int(11) NOT NULL AUTO_INCREMENT,
  `qteGout` int(11) DEFAULT NULL,
  `qteVapeur` int(11) DEFAULT NULL,
  `doseNicotine` int(11) DEFAULT NULL,
  `qteLiquideP` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPdtP`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.personnalisation : ~21 rows (environ)
/*!40000 ALTER TABLE `personnalisation` DISABLE KEYS */;
INSERT INTO `personnalisation` (`idPdtP`, `qteGout`, `qteVapeur`, `doseNicotine`, `qteLiquideP`) VALUES
	(1, 83, NULL, 12, 50),
	(2, 83, NULL, 12, 50),
	(3, 83, NULL, 12, 50),
	(4, 83, 17, 100, 50),
	(5, 0, 100, 50, 10),
	(6, 86, 14, 22, 100),
	(7, 83, 17, 23, 50),
	(8, 81, 19, 18, 10),
	(9, 24, 76, 68, 10),
	(10, 24, 76, 68, 10),
	(11, 24, 76, 68, 10),
	(12, 24, 76, 68, 10),
	(13, 40, 60, 72, 50),
	(14, 50, 50, 50, 10),
	(15, 77, 23, 11, 50),
	(16, 80, 20, 20, 100),
	(17, 79, 21, 50, 50),
	(18, 50, 50, 50, 10),
	(19, 50, 50, 50, 10),
	(20, 50, 50, 50, 10),
	(21, 50, 50, 50, 10),
	(22, 50, 50, 50, 10);
/*!40000 ALTER TABLE `personnalisation` ENABLE KEYS */;

-- Listage de la structure de la table mds. produit
CREATE TABLE IF NOT EXISTS `produit` (
  `idPdt` int(11) NOT NULL AUTO_INCREMENT,
  `libellePdt` varchar(250) DEFAULT NULL,
  `QteLiquide` int(11) DEFAULT NULL,
  `prixPdt` float DEFAULT NULL,
  `stockPdt` int(11) DEFAULT NULL,
  `Cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPdt`),
  KEY `produit_categorie` (`Cat_id`),
  CONSTRAINT `produit_categorie` FOREIGN KEY (`Cat_id`) REFERENCES `categorie` (`idCat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table mds.produit : ~2 rows (environ)
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` (`idPdt`, `libellePdt`, `QteLiquide`, `prixPdt`, `stockPdt`, `Cat_id`) VALUES
	(1, 'Citron', 50, 12, 100, 1),
	(2, 'chargeur', NULL, 5, 500, 2);
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
