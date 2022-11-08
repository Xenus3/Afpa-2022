-- MySQL dump 10.13  Distrib 5.6.51, for Win64 (x86_64)
--
-- Host: localhost    Database: vroomissimo
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avoir` (
  `id_voiture` int NOT NULL,
  `id_caracteristiques_technique` int NOT NULL,
  PRIMARY KEY (`id_voiture`,`id_caracteristiques_technique`),
  KEY `id_caracteristiques_technique` (`id_caracteristiques_technique`),
  CONSTRAINT `avoir_ibfk_1` FOREIGN KEY (`id_voiture`) REFERENCES `voiture` (`id_voiture`),
  CONSTRAINT `avoir_ibfk_2` FOREIGN KEY (`id_caracteristiques_technique`) REFERENCES `caracteristiques_technique` (`id_caracteristiques_technique`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avoir`
--

LOCK TABLES `avoir` WRITE;
/*!40000 ALTER TABLE `avoir` DISABLE KEYS */;
/*!40000 ALTER TABLE `avoir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bonne_affaire`
--

DROP TABLE IF EXISTS `bonne_affaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bonne_affaire` (
  `id_bonne_affaire` int NOT NULL AUTO_INCREMENT,
  `niveau` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_bonne_affaire`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bonne_affaire`
--

LOCK TABLES `bonne_affaire` WRITE;
/*!40000 ALTER TABLE `bonne_affaire` DISABLE KEYS */;
INSERT INTO `bonne_affaire` VALUES (1,'Très bon prix'),(2,'Bon prix'),(3,'Prix correct'),(4,'Pas d\'information');
/*!40000 ALTER TABLE `bonne_affaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caracteristiques_technique`
--

DROP TABLE IF EXISTS `caracteristiques_technique`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caracteristiques_technique` (
  `id_caracteristiques_technique` int NOT NULL AUTO_INCREMENT,
  `nom_caracteristique` varchar(50) DEFAULT NULL,
  `valeur_caracteristique` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_caracteristiques_technique`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caracteristiques_technique`
--

LOCK TABLES `caracteristiques_technique` WRITE;
/*!40000 ALTER TABLE `caracteristiques_technique` DISABLE KEYS */;
/*!40000 ALTER TABLE `caracteristiques_technique` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenir` (
  `id_voiture` int NOT NULL,
  `id_equipement` int NOT NULL,
  PRIMARY KEY (`id_voiture`,`id_equipement`),
  KEY `id_equipement` (`id_equipement`),
  CONSTRAINT `contenir_ibfk_1` FOREIGN KEY (`id_voiture`) REFERENCES `voiture` (`id_voiture`),
  CONSTRAINT `contenir_ibfk_2` FOREIGN KEY (`id_equipement`) REFERENCES `equipement` (`id_equipement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenir`
--

LOCK TABLES `contenir` WRITE;
/*!40000 ALTER TABLE `contenir` DISABLE KEYS */;
/*!40000 ALTER TABLE `contenir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `description`
--

DROP TABLE IF EXISTS `description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `description` (
  `id_description` int NOT NULL AUTO_INCREMENT,
  `description` text,
  `id_voiture` int NOT NULL,
  PRIMARY KEY (`id_description`),
  UNIQUE KEY `id_voiture` (`id_voiture`),
  CONSTRAINT `description_ibfk_1` FOREIGN KEY (`id_voiture`) REFERENCES `voiture` (`id_voiture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `description`
--

LOCK TABLES `description` WRITE;
/*!40000 ALTER TABLE `description` DISABLE KEYS */;
/*!40000 ALTER TABLE `description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipement`
--

DROP TABLE IF EXISTS `equipement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipement` (
  `id_equipement` int NOT NULL AUTO_INCREMENT,
  `nom_equipement` varchar(50) DEFAULT NULL,
  `category_equipment` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_equipement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipement`
--

LOCK TABLES `equipement` WRITE;
/*!40000 ALTER TABLE `equipement` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `garantie`
--

DROP TABLE IF EXISTS `garantie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `garantie` (
  `id_garantie` int NOT NULL AUTO_INCREMENT,
  `longueur_garantie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_garantie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `garantie`
--

LOCK TABLES `garantie` WRITE;
/*!40000 ALTER TABLE `garantie` DISABLE KEYS */;
INSERT INTO `garantie` VALUES (1,'3 mois'),(2,'6 mois'),(3,'12 mois'),(4,'24 mois');
/*!40000 ALTER TABLE `garantie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localisation` (
  `id_localisation` int NOT NULL AUTO_INCREMENT,
  `ville` varchar(50) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_localisation`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localisation`
--

LOCK TABLES `localisation` WRITE;
/*!40000 ALTER TABLE `localisation` DISABLE KEYS */;
INSERT INTO `localisation` VALUES (1,'Bruxelle','Belgique'),(2,'Zurich','Suisse'),(3,'Amsterdam','Pays-bas'),(4,'Rome','Italie'),(5,'Madrid','Espagne'),(6,'Paris','France'),(7,'Marseille','France'),(8,'Lille','France'),(9,'Lyon','France'),(10,'Bordeaux','France');
/*!40000 ALTER TABLE `localisation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendeur` (
  `id_vendeur` int NOT NULL AUTO_INCREMENT,
  `type_vendeur` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_vendeur`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendeur`
--

LOCK TABLES `vendeur` WRITE;
/*!40000 ALTER TABLE `vendeur` DISABLE KEYS */;
INSERT INTO `vendeur` VALUES (1,'Pro','Verrill','Faure','04.04.57.17.98'),(2,'Particulier','Astolpho','Dupéré','04.01.45.07.87'),(3,'Pro','Soren','Gagné','01.87.05.19.95'),(4,'Pro','Bellamy','Leroy','04.09.26.31.82'),(5,'Particulier','Pierrette','Lanteigne','01.83.33.68.27'),(6,'Particulier','Franck','Marier','01.33.94.79.98'),(7,'Pro','Charles','Monjeau','05.77.26.87.70'),(8,'Particulier','Garland','Grondin','03.33.61.18.24'),(9,'Particulier','Clementine','Breton','04.51.15.52.88'),(10,'Pro','Clothilde','LeBatelier','05.21.23.66.40');
/*!40000 ALTER TABLE `vendeur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voiture` (
  `id_voiture` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) DEFAULT NULL,
  `modele` varchar(50) DEFAULT NULL,
  `annee_modele` int DEFAULT NULL,
  `mise_en_circulation` date DEFAULT NULL,
  `carroserie` varchar(50) DEFAULT NULL,
  `kilometrage` varchar(50) DEFAULT NULL,
  `carburant` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `prix` decimal(19,2) DEFAULT NULL,
  `id_garantie` int DEFAULT NULL,
  `id_bonne_affaire` int DEFAULT NULL,
  `id_vendeur` int DEFAULT NULL,
  `id_localisation` int DEFAULT NULL,
  `photos_1` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_voiture`),
  KEY `id_garantie` (`id_garantie`),
  KEY `id_bonne_affaire` (`id_bonne_affaire`),
  KEY `id_vendeur` (`id_vendeur`),
  KEY `id_localisation` (`id_localisation`),
  CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`id_garantie`) REFERENCES `garantie` (`id_garantie`),
  CONSTRAINT `voiture_ibfk_2` FOREIGN KEY (`id_bonne_affaire`) REFERENCES `bonne_affaire` (`id_bonne_affaire`),
  CONSTRAINT `voiture_ibfk_3` FOREIGN KEY (`id_vendeur`) REFERENCES `vendeur` (`id_vendeur`),
  CONSTRAINT `voiture_ibfk_4` FOREIGN KEY (`id_localisation`) REFERENCES `localisation` (`id_localisation`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voiture`
--

LOCK TABLES `voiture` WRITE;
/*!40000 ALTER TABLE `voiture` DISABLE KEYS */;
INSERT INTO `voiture` VALUES (22,'Renault','Megane',2010,'2012-03-25','Berline','150000 km','Essence','Marron',3000.00,2,3,6,5,'assets/photos/Renault_Megane_II.jfif'),(24,'Peugeot','206',2005,'2006-05-10','Berline','112000 km','Diesel','Blanc',2500.00,3,4,10,2,'assets/photos/Peugeot_206.jpg'),(25,'Dacia','Logan',2006,'2008-11-26','Berline','170000 km','Essence','Noire',3200.00,4,1,4,1,'assets/photos/dacia-logan-2.jpg'),(26,'Audi','A4',2000,'2003-11-20','Berline','252000 km','Diesel','Metal',5000.00,2,2,1,4,'assets/photos/Audi-A4.jpg'),(27,'Renault','Twingo',2000,'2000-11-10','Berline','173000 km','Essence','Blanc',1990.00,2,2,4,6,'assets/photos/Renault_twingo.jpg'),(28,'Citroen','C3',2000,'2004-06-17','Berline','205000 km','Essence','Bleu',3000.00,1,4,8,10,'assets/photos/Citroën_C3.jpg'),(29,'Ford','Mondeo',1995,'1998-08-02','Berline','150000 km','Essence','Gris',1490.00,1,4,9,9,'assets/photos/Ford_Mondeo.jpg');
/*!40000 ALTER TABLE `voiture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'vroomissimo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-08 11:38:10
