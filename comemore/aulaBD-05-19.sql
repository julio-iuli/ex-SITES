-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: comemore
-- ------------------------------------------------------
-- Server version	5.7.11-log

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
-- Table structure for table `tb_bairro`
--

DROP TABLE IF EXISTS `tb_bairro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_bairro` (
  `id_bairro` int(11) NOT NULL AUTO_INCREMENT,
  `ds_bairro` varchar(60) DEFAULT NULL,
  `tb_cidade_id_cidade` int(11) NOT NULL,
  PRIMARY KEY (`id_bairro`),
  KEY `fk_tb_bairro_tb_cidade1_idx` (`tb_cidade_id_cidade`),
  CONSTRAINT `fk_tb_bairro_tb_cidade1` FOREIGN KEY (`tb_cidade_id_cidade`) REFERENCES `tb_cidade` (`id_cidade`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bairro`
--

LOCK TABLES `tb_bairro` WRITE;
/*!40000 ALTER TABLE `tb_bairro` DISABLE KEYS */;
INSERT INTO `tb_bairro` VALUES (1,'Asa Sul',21),(2,'Asa Norte',21),(3,'Lago Sul',21),(4,'Taguatinga Norte',22),(5,'Praça do Relógio',22),(6,'Taguatinga Sul',22),(7,'Guariroba',23),(8,'Centro',23),(9,'Setor O',23),(10,'Furnas',24),(11,'Samabaia Sul',24),(12,'Samambaia Norte',24),(13,'Setor Sul',25),(14,'Setor Norte',25),(15,'Gama Centro',25);
/*!40000 ALTER TABLE `tb_bairro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cargo`
--

DROP TABLE IF EXISTS `tb_cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `ds_cargo` varchar(60) NOT NULL,
  `ds_salario` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cargo`
--

LOCK TABLES `tb_cargo` WRITE;
/*!40000 ALTER TABLE `tb_cargo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `ds_nome` varchar(60) NOT NULL,
  `ds_preco` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_categoria`
--

LOCK TABLES `tb_categoria` WRITE;
/*!40000 ALTER TABLE `tb_categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cidade`
--

DROP TABLE IF EXISTS `tb_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cidade` (
  `id_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `ds_cidade` varchar(60) DEFAULT NULL,
  `tb_uf_id_uf` char(2) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `fk_tb_cidade_tb_uf1_idx` (`tb_uf_id_uf`),
  CONSTRAINT `fk_tb_cidade_tb_uf1` FOREIGN KEY (`tb_uf_id_uf`) REFERENCES `tb_uf` (`id_uf`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cidade`
--

LOCK TABLES `tb_cidade` WRITE;
/*!40000 ALTER TABLE `tb_cidade` DISABLE KEYS */;
INSERT INTO `tb_cidade` VALUES (1,'Rio de Janeiro','RJ'),(2,'Niterói','RJ'),(3,'Macaé','RJ'),(4,'Cabo frio','RJ'),(5,'Rio das Ostras','RJ'),(6,'São Paulo','SP'),(7,'Jundiaí','SP'),(8,'Campinas','SP'),(9,'Piracicaba','SP'),(10,'Paulínia','SP'),(11,'João Pessoa','PB'),(12,'Capina Grande','PB'),(13,'Bom Sucesso','PB'),(14,'Lastro','PB'),(15,'Juru','PB'),(16,'Porto Alegre','RS'),(17,'Cachoeira do Sul','RS'),(18,'Pinhal','RS'),(19,'Pedras Altas','RS'),(20,'Passo Fundo','RS'),(21,'Brasília','DF'),(22,'Taguatingua','DF'),(23,'Ceilândia','DF'),(24,'Samambaia','DF'),(25,'Gama','DF');
/*!40000 ALTER TABLE `tb_cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `ds_nome` varchar(80) NOT NULL,
  `ds_ddd` tinyint(2) unsigned DEFAULT NULL,
  `ds_telefone_res` int(9) unsigned DEFAULT NULL,
  `ds_telefone_cel` int(9) unsigned DEFAULT NULL,
  `ds_cpf` bigint(11) unsigned zerofill DEFAULT NULL,
  `ds_cnpj` bigint(11) unsigned zerofill DEFAULT NULL,
  `ds_pf_pj` tinyint(1) NOT NULL,
  `ds_email` varchar(80) DEFAULT NULL,
  `ds_data_nasc` date DEFAULT NULL,
  `ds_end_complemento` varchar(20) NOT NULL,
  `ds_recomendacao_nome` varchar(80) DEFAULT NULL,
  `ds_recomendacao_data_nasc` date DEFAULT NULL,
  `tb_logradouro_id_logradouro` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `ds_cpf_UNIQUE` (`ds_cpf`),
  UNIQUE KEY `ds_cnpj_UNIQUE` (`ds_cnpj`),
  KEY `fk_tb_cliente_tb_logradouro1_idx` (`tb_logradouro_id_logradouro`),
  CONSTRAINT `fk_tb_cliente_tb_logradouro1` FOREIGN KEY (`tb_logradouro_id_logradouro`) REFERENCES `tb_logradouro` (`id_logradouro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_funcionario`
--

DROP TABLE IF EXISTS `tb_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `ds_nome` varchar(80) DEFAULT NULL,
  `ds_ddd` tinyint(2) unsigned DEFAULT NULL,
  `ds_telefone_res` int(9) unsigned DEFAULT NULL,
  `ds_telefone_cel` int(9) unsigned DEFAULT NULL,
  `ds_rg` int(7) unsigned zerofill NOT NULL,
  `ds_cpf` bigint(11) unsigned zerofill NOT NULL,
  `ds_pis` bigint(11) unsigned zerofill DEFAULT NULL,
  `ds_data_contratacao` date NOT NULL,
  `ds_email` varchar(80) DEFAULT NULL,
  `ds_end_complementos` char(8) DEFAULT NULL,
  `ds_login` char(8) NOT NULL,
  `ds_senha` char(8) NOT NULL,
  `tipo_adm` tinyint(1) DEFAULT NULL,
  `tb_logradouro_id_logradouro` int(11) NOT NULL,
  `tb_cargo_id_cargo` int(11) NOT NULL,
  PRIMARY KEY (`id_funcionario`),
  UNIQUE KEY `ds_cpf_UNIQUE` (`ds_cpf`),
  UNIQUE KEY `ds_pis_UNIQUE` (`ds_pis`),
  KEY `fk_tb_funcionario_tb_logradouro1_idx` (`tb_logradouro_id_logradouro`),
  KEY `fk_tb_funcionario_tb_cargo1_idx` (`tb_cargo_id_cargo`),
  CONSTRAINT `fk_tb_funcionario_tb_cargo1` FOREIGN KEY (`tb_cargo_id_cargo`) REFERENCES `tb_cargo` (`id_cargo`),
  CONSTRAINT `fk_tb_funcionario_tb_logradouro1` FOREIGN KEY (`tb_logradouro_id_logradouro`) REFERENCES `tb_logradouro` (`id_logradouro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_funcionario`
--

LOCK TABLES `tb_funcionario` WRITE;
/*!40000 ALTER TABLE `tb_funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_item`
--

DROP TABLE IF EXISTS `tb_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_item` (
  `id_tema` int(11) NOT NULL AUTO_INCREMENT,
  `ds_nome` varchar(60) NOT NULL,
  `ds_tipo` varchar(60) NOT NULL,
  `tb_tema_id_tema` int(11) NOT NULL,
  PRIMARY KEY (`id_tema`),
  KEY `fk_tb_item_tb_tema1_idx` (`tb_tema_id_tema`),
  CONSTRAINT `fk_tb_item_tb_tema1` FOREIGN KEY (`tb_tema_id_tema`) REFERENCES `tb_tema` (`id_tema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_item`
--

LOCK TABLES `tb_item` WRITE;
/*!40000 ALTER TABLE `tb_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_logradouro`
--

DROP TABLE IF EXISTS `tb_logradouro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_logradouro` (
  `id_logradouro` int(11) NOT NULL AUTO_INCREMENT,
  `ds_logradouro` varchar(60) DEFAULT NULL,
  `ds_cep` int(8) unsigned DEFAULT NULL,
  `tb_bairro_id_bairro` int(11) NOT NULL,
  PRIMARY KEY (`id_logradouro`),
  KEY `fk_tb_logradouro_tb_bairro1_idx` (`tb_bairro_id_bairro`),
  CONSTRAINT `fk_tb_logradouro_tb_bairro1` FOREIGN KEY (`tb_bairro_id_bairro`) REFERENCES `tb_bairro` (`id_bairro`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_logradouro`
--

LOCK TABLES `tb_logradouro` WRITE;
/*!40000 ALTER TABLE `tb_logradouro` DISABLE KEYS */;
INSERT INTO `tb_logradouro` VALUES (1,'SQS 304',NULL,1),(2,'SQS 104',NULL,1),(3,'SCS',NULL,1),(4,'SQN 304',NULL,2),(5,'SQN 104',NULL,2),(6,'SCN',NULL,2),(7,'QI 3',NULL,3),(8,'QL 4',NULL,3),(9,'QI 6',NULL,3),(10,'CNB 12',NULL,4),(11,'CNH 4',NULL,4),(12,'Colonia Agrícola Samabaia',NULL,4),(13,'QI 24',NULL,5),(14,'C 2',NULL,5),(15,'C 6',NULL,5),(16,'CSB 5',NULL,6),(17,'CSC 4 4',NULL,6),(18,'CSG 7',NULL,6),(19,'QNN 24',NULL,8),(20,'QNP 12',NULL,8),(21,'QNP 14',NULL,8);
/*!40000 ALTER TABLE `tb_logradouro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pedido`
--

DROP TABLE IF EXISTS `tb_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `ds_data_pedido` date DEFAULT NULL,
  `ds_data_entrega` datetime NOT NULL,
  `ds_obs_pedido` text,
  `ds_end_complemento` varchar(20) DEFAULT NULL,
  `tb_cliente_id_cliente` int(11) NOT NULL,
  `tb_funcionario_id_funcionario` int(11) NOT NULL,
  `tb_logradouro_id_logradouro` int(11) NOT NULL,
  `tb_tema_id_tema` int(11) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_tb_pedido_tb_logradouro1_idx` (`tb_logradouro_id_logradouro`),
  KEY `fk_tb_pedido_tb_funcionario1_idx` (`tb_funcionario_id_funcionario`),
  KEY `fk_tb_pedido_tb_tema1_idx` (`tb_tema_id_tema`),
  KEY `fk_tb_pedido_tb_cliente1_idx` (`tb_cliente_id_cliente`),
  CONSTRAINT `fk_tb_pedido_tb_cliente1` FOREIGN KEY (`tb_cliente_id_cliente`) REFERENCES `tb_cliente` (`id_cliente`),
  CONSTRAINT `fk_tb_pedido_tb_funcionario1` FOREIGN KEY (`tb_funcionario_id_funcionario`) REFERENCES `tb_funcionario` (`id_funcionario`),
  CONSTRAINT `fk_tb_pedido_tb_logradouro1` FOREIGN KEY (`tb_logradouro_id_logradouro`) REFERENCES `tb_logradouro` (`id_logradouro`),
  CONSTRAINT `fk_tb_pedido_tb_tema1` FOREIGN KEY (`tb_tema_id_tema`) REFERENCES `tb_tema` (`id_tema`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pedido`
--

LOCK TABLES `tb_pedido` WRITE;
/*!40000 ALTER TABLE `tb_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tema`
--

DROP TABLE IF EXISTS `tb_tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tema` (
  `id_tema` int(11) NOT NULL AUTO_INCREMENT,
  `ds_nome` varchar(80) DEFAULT NULL,
  `ds_status` varchar(45) DEFAULT NULL,
  `ds_descricao` text,
  `ds_data_compra` date DEFAULT NULL,
  `img_tema` varchar(150) DEFAULT NULL,
  `tb_categoria_id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_tema`),
  KEY `fk_tb_tema_tb_categoria1_idx` (`tb_categoria_id_categoria`),
  CONSTRAINT `fk_tb_tema_tb_categoria1` FOREIGN KEY (`tb_categoria_id_categoria`) REFERENCES `tb_categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tema`
--

LOCK TABLES `tb_tema` WRITE;
/*!40000 ALTER TABLE `tb_tema` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_uf`
--

DROP TABLE IF EXISTS `tb_uf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_uf` (
  `id_uf` char(2) NOT NULL,
  `ds_estado` char(20) NOT NULL,
  PRIMARY KEY (`id_uf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_uf`
--

LOCK TABLES `tb_uf` WRITE;
/*!40000 ALTER TABLE `tb_uf` DISABLE KEYS */;
INSERT INTO `tb_uf` VALUES ('AC','Acre'),('AL','Alagoas'),('AM','Amazonas'),('AP','Amapá'),('BA','Bahia'),('CE','Ceará'),('DF','Distrito Federal'),('ES','Espírito Santo'),('GO','Goiás'),('MA','Maranhão'),('MG','Minas Gerais'),('MS','Mato Grosso do Sul'),('MT','Mato Grosso'),('PA','Pará'),('PB','Pernambuco'),('PE','Pernambuco'),('PI','Piauí'),('PR','Paraná'),('RJ','Rio de Janeiro'),('RN','Rio Grande do Norte'),('RO','Rondônia'),('RR','Roraima'),('RS','Rio Grande do Sul'),('SC','Santa Catarina'),('SE','Sergipe'),('SP','São Paulo'),('TO','Tocantins');
/*!40000 ALTER TABLE `tb_uf` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-19 21:14:38
