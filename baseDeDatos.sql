CREATE DATABASE  IF NOT EXISTS `as0_store` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `as0_store`;
-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: as0_store
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `st_categories`
--

DROP TABLE IF EXISTS `st_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_categories` (
  `pk_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=447 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Categorias';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_categories`
--

LOCK TABLES `st_categories` WRITE;
/*!40000 ALTER TABLE `st_categories` DISABLE KEYS */;
INSERT INTO `st_categories` VALUES (111,'Lacteos'),(222,'Carnicos'),(333,'Electrodomesticos'),(444,'Papeleria'),(445,'Enlatados');
/*!40000 ALTER TABLE `st_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_permissions`
--

DROP TABLE IF EXISTS `st_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_permissions` (
  `pk_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`pk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_permissions`
--

LOCK TABLES `st_permissions` WRITE;
/*!40000 ALTER TABLE `st_permissions` DISABLE KEYS */;
INSERT INTO `st_permissions` VALUES (1,'Productos'),(2,'Categorias'),(3,'Proveedores'),(4,'Usuarios');
/*!40000 ALTER TABLE `st_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_permissions_user`
--

DROP TABLE IF EXISTS `st_permissions_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_permissions_user` (
  `fk_user` varchar(10) NOT NULL,
  `fk_permission` int(11) NOT NULL,
  KEY `fk_user_idx` (`fk_user`),
  KEY `fk_permission_idx` (`fk_permission`),
  CONSTRAINT `fk_permission` FOREIGN KEY (`fk_permission`) REFERENCES `st_permissions` (`pk_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_user` FOREIGN KEY (`fk_user`) REFERENCES `st_users` (`pk_username`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_permissions_user`
--

LOCK TABLES `st_permissions_user` WRITE;
/*!40000 ALTER TABLE `st_permissions_user` DISABLE KEYS */;
INSERT INTO `st_permissions_user` VALUES ('matgra',1),('matgra',2),('matgra',3),('matgra',4),('katsto',1),('katsto',2),('katsto',3),('katsto',4),('melrui',1),('melrui',2),('mauguz',1),('mauguz',3),('edwbar',1),('edwbar',2),('edwbar',3),('carjar',1);
/*!40000 ALTER TABLE `st_permissions_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_products`
--

DROP TABLE IF EXISTS `st_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_products` (
  `pk_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` decimal(19,4) NOT NULL,
  `fk_category` int(11) NOT NULL,
  `fk_supplier` int(11) NOT NULL,
  PRIMARY KEY (`pk_id`),
  KEY `fk_category_idx` (`fk_category`),
  KEY `fk_supplier_idx` (`fk_supplier`),
  CONSTRAINT `fk_category` FOREIGN KEY (`fk_category`) REFERENCES `st_categories` (`pk_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_supplier` FOREIGN KEY (`fk_supplier`) REFERENCES `st_suppliers` (`pk_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_products`
--

LOCK TABLES `st_products` WRITE;
/*!40000 ALTER TABLE `st_products` DISABLE KEYS */;
INSERT INTO `st_products` VALUES (123,'Leche en polvo',2500.0000,111,888),(124,'Leche condensada',50000.0000,111,888),(125,'Leche deslactosada',2200.0000,111,888);
/*!40000 ALTER TABLE `st_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_suppliers`
--

DROP TABLE IF EXISTS `st_suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_suppliers` (
  `pk_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_phone_secondary` varchar(15) DEFAULT NULL,
  `contact_email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabla de proveedores';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_suppliers`
--

LOCK TABLES `st_suppliers` WRITE;
/*!40000 ALTER TABLE `st_suppliers` DISABLE KEYS */;
INSERT INTO `st_suppliers` VALUES (777,'Carnelly','5552144',NULL,NULL),(888,'Colanta','3336985',NULL,NULL),(999,'Marion','2225896',NULL,NULL);
/*!40000 ALTER TABLE `st_suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `st_users`
--

DROP TABLE IF EXISTS `st_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `st_users` (
  `pk_username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  PRIMARY KEY (`pk_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `st_users`
--

LOCK TABLES `st_users` WRITE;
/*!40000 ALTER TABLE `st_users` DISABLE KEYS */;
INSERT INTO `st_users` VALUES ('carjar','$2y$10$.lCaFyMYr0kD0854OsXXC.4UDgOjCnxJ7vuYuSt1zIN0ffvgTzenm','Carolina','Jaramillo','Empleado'),('edwbar','$2y$10$VIGMHUl/fYf9SegxMeCGJeRKePnSN/7RIuDatu7UO4rdY/ggjHBqy','Edwin','Barragán','Administrador'),('katsto','$2y$10$76dZodSlW1k8wmsklVFKlOPhbTkNTH7jEec9.dOEz7OAzpWyhyVde','Katarzyna','Stolarska','Admin'),('matgra','$2y$10$7RFCHy8ePuPg0AhDz91JieEO9MN9CYW5XR.CxF/kITS5ZHRJH8BNe','Mateo','Grajales','Admin'),('mauguz','$2y$10$6pdT5MGqPzbeveXSZ4qUn.vK5Qsm8sxy5uUd9RGOUxNBRMkgsNq3i','Mauricio','Guzman','Contador'),('melrui','$2y$10$7mfxdnCQQp/y9tl6LCi9SOuypOli3CJQ7ndtKGg2Yvc/XSURRrp9K','Melissa','Ruiz','Gerente');
/*!40000 ALTER TABLE `st_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-09  2:22:38
