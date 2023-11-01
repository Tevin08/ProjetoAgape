-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: ptcc
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
-- Table structure for table `tb_ong`
--

DROP TABLE IF EXISTS `tb_ong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_ong` (
  `cd_ong` int NOT NULL AUTO_INCREMENT,
  `cd_cidade` int NOT NULL,
  `nm_ong` varchar(30) DEFAULT NULL,
  `nm_representante` varchar(80) DEFAULT NULL,
  `endereco` varchar(130) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `cnpj` char(14) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `sobre` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`cd_ong`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ong`
--

LOCK TABLES `tb_ong` WRITE;
/*!40000 ALTER TABLE `tb_ong` DISABLE KEYS */;
INSERT INTO `tb_ong` VALUES (1,1,'Vovó Walquíria','Walquíria Moura de Souza','Av. João Francisco Bensdorp, 1555 - Cidade Náutica','ana.marc@uol.com.br','02754279000124','12345','(13)34696499','Lar de Amparo Vovó Walquiria','@lardeamparovovowalquiria','Instituição de Longa Permanência para idosos.'),(2,2,'Gota de Leite','Guilherme Golçalves Barbarisi','Av. Conselheiro Nébias 388, Encruzilhada','gotadeleite@gotadeleite.org.br','58222910000107','12345','(13)32020220','Gota de Leite','@gotadeleite','Oportunizar educação, esporte e cultura para crianças e adolescentes na Baixada Santista, contribuindo para formação de cidadãos críticos, criativos, conscientes e solidários ao seu papel na sociedade.'),(3,1,'APAE - SV','Nilza Ribeiro Fernandes Afonso','R. Feliciana Narcondes da Silva, 205, Catiapoã','apae@apaesaovicente.org.br','57730087000170','12345','(13)34677828','APAE São Vicente','@apaesaovicente','Organização social, cujo objetivo principal é promover a atenção integral à pessoa com deficiência, prioritariamente aquela com deficiência intelectual e múltipla.');
/*!40000 ALTER TABLE `tb_ong` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-01 17:16:49
