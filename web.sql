-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: web
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `instancias2`
--

DROP TABLE IF EXISTS `instancias2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `instancias2` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `asunto` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instancias2`
--

LOCK TABLES `instancias2` WRITE;
/*!40000 ALTER TABLE `instancias2` DISABLE KEYS */;
INSERT INTO `instancias2` VALUES (1,'test','test','info_instancia','teata');
/*!40000 ALTER TABLE `instancias2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `iduser_UNIQUE` (`iduser`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'daeq','daedea','daed','dae'),(3,'14','1231','1231','312'),(4,'Samuel','Mendez','samuel@gmail.com','pass123'),(5,'nacho','teton','teti@gmail.com','pass123'),(6,'test','treast','test@gmail.com','123'),(7,'testing','testing','testing@yahoo.com','$2y$10$7Mfo3yUNTCE9DWWgQ4UCkeThRyZfXVXcEsID6iNwZQPrG9.W2Q0ii'),(8,'nachete','nacehte','nachete@uem.es','$2y$10$Vtr8JJLGMifcBHoyspA0Y.oIBz/ai6P..z0/7jv2ZYTwubzLbmoSW'),(9,'testtes','test','taett','$2y$10$Md8x5vkxjrYr/i0aN4vJuuzJyBcumCV7eMMNwPF6ONmB7jaBrEUJy'),(10,'qer','qwe','qwe','$2y$10$/ORFFRd2CWuX9Ew60YIIHOSbu3rUZKyLc65poDowP7riED7toSrry');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-14 18:10:44
