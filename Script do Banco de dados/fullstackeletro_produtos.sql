CREATE DATABASE  IF NOT EXISTS `fullstackeletro` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `fullstackeletro`;
-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: fullstackeletro
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `estoque` int NOT NULL,
  `preco` float NOT NULL,
  `preco_venda` float NOT NULL,
  `nome_imagem` varchar(50) NOT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `id_pedido_idx` (`nome`,`preco_venda`,`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Fogão Stone Prata',NULL,19,2389,1389,'/fogao_stone_prata.jpg'),(2,'Fogão Tecnogas Max',NULL,12,3259,2489,'/fogao_tecnogas_max.jpg'),(3,'Lava-louças Bosch',NULL,10,3259,2489,'/lavadora_de_louca_bosch.jpg'),(4,'Lava-louças Consul','12 comandos',12,3859,3089,'/lavadora_de_louca_consul.jpg'),(5,'Lavadora de Roupas EcoBubble','Inox - 12 litros',10,3389,2389,'/lavadora_EcoBubble_Inox.jpg'),(6,'Lavadora Colombia Moderna','20 litros',9,4259,3289,'/lavadora_colombia_moderna.jpg'),(7,'Microondas Samsung','black 20 litros',18,2389,1889,'/microondas_samsung_black20L.jpg'),(8,'Microondas Brastemp','Inox 38 litros',10,4389,3389,'/microondas_brastemp_inox38L.jpg'),(9,'Microondas Consul','Inox 30 litros',16,3000,2289,'/microondas_consul_inox30L.jpg'),(10,'Geladeira Frost Free Brastemp Side Inverse','540 litros',15,6389,5019,'/geladeira_brastemp.jpg'),(11,'Geladeira Digital Max Inteligente',NULL,2,9259,7289,'/geladeira_digitalmax.jpg'),(12,'Geladeira Moderna Black',NULL,7,2859,2089,'/geladeira_mod_black.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-21 23:31:56
