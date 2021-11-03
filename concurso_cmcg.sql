-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: banco_def
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `candidato`
--

DROP TABLE IF EXISTS `candidato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidato` (
  `idcandidato` int(11) NOT NULL AUTO_INCREMENT,
  `id_responsavel` int(11) DEFAULT NULL,
  `candidato_nome` varchar(254) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `identidade` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `forca` varchar(45) DEFAULT NULL,
  `data_nacimento` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `serie` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcandidato`)
) ENGINE=ARCHIVE AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidato`
--

LOCK TABLES `candidato` WRITE;
/*!40000 ALTER TABLE `candidato` DISABLE KEYS */;
INSERT INTO `candidato` VALUES (1000,31,'Fulano de Tal','Masculino','123456789','85929620130','Marinha','1985-08-03',0,'1º Ano'),(1001,31,'Fulano de Tal','Masculino','12345678','85929620130','Exército','1958-05-02',0,'1º Ano');
/*!40000 ALTER TABLE `candidato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidatos` (
  `idcandidatos` int(11) NOT NULL AUTO_INCREMENT,
  `id_responsavel` int(45) DEFAULT NULL,
  `candidato_nome` varchar(254) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `identidade` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `forca` varchar(45) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `serie` varchar(45) DEFAULT NULL,
  `boleto_status` varchar(45) DEFAULT NULL,
  `data_pgt` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcandidatos`)
) ENGINE=InnoDB AUTO_INCREMENT=10020 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPRESSED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidatos`
--

LOCK TABLES `candidatos` WRITE;
/*!40000 ALTER TABLE `candidatos` DISABLE KEYS */;
INSERT INTO `candidatos` VALUES (14,44,'Candidato Teste','Masculino','102030405060','85929620130','Marinha','2004-04-03',0,'1º Ano',NULL,NULL),(15,45,'Guto Oliveira','Masculino','10203040','85929620130','Bombeiro','2002-03-05',0,'1º Ano',NULL,NULL),(16,44,'Zico do Flamento','Masculino','1020304050','85929620130','Exército','2003-03-05',0,'1º Ano',NULL,NULL),(17,46,'tiago arantes da silva','Masculino','0925960544','85929620130','Exército','2006-01-06',0,'6º Ano',NULL,NULL),(43,1,'Fulaninha de souza estacio','','123456789','85929620130','Bombeiro','0000-00-00',3,'','100',NULL),(1001,44,'Leticia F. de Souza','Masculino','123456789','85929620130','Exército','2003-03-15',3,'1º Ano','100',NULL),(1002,44,'Aluno Teste de Boleto','Masculino','159357','85929620130','Bombeiro','2007-03-20',1,'1º Ano','100',NULL),(1003,44,'filho 1','Masculino','12456','85929620130','Exército','2007-02-17',1,'6º Ano','100',NULL),(1004,44,'filho 2','Masculino','158357','85929620130','Marinha','2003-02-20',0,'1º Ano','100',NULL),(1005,44,'filho 3','Masculino','147258369','85929620130','Aeronáutica','2007-02-21',0,'6º Ano','100',NULL),(1006,44,'filho 5','Masculino','147852951','85929620130','Exército','2006-02-18',0,'6º Ano','100',NULL),(1007,44,'filho 7','Feminino','123456789','85929620130','Marinha','2006-03-20',0,'1º Ano','100',NULL),(1008,44,'filho 11','Feminino','85929620130','85929620130','Exército','2000-01-13',3,'6º Ano','100',NULL),(1009,44,'FILHO 14','Masculino','15835765','85929620130','Exército','2001-02-21',3,'1º Ano','100',NULL),(1010,44,'Filho 10','Masculino','12345678','85929620130','Marinha','2002-02-20',0,'1º Ano','100',NULL),(10016,1,'Guto Manfredinni Housevel','Feminino','123456789','85929620131','Aeronáutica','2004-03-03',1,'1º Ano','100','11082016'),(10017,1,'Guto Manfredinni Housevel','Masculino','123456789','85929620132','Marinha','2004-03-03',1,'1º Ano','100','11082016'),(10018,1,'dvdfvdfvdf','Feminino','123456789','85929620133','Exército','2006-05-04',1,'6º Ano','100','11082016'),(10019,54,'PEDRO HENRIQUE TORRES FLEXA','Masculino','0195457239','07368156784','Exército','2004-06-21',1,'6º Ano','100','11082016');
/*!40000 ALTER TABLE `candidatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conf`
--

DROP TABLE IF EXISTS `conf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conf` (
  `idconf` int(11) NOT NULL AUTO_INCREMENT,
  `boleto_valor` varchar(45) DEFAULT NULL,
  `boleto_vencimento` date DEFAULT NULL,
  PRIMARY KEY (`idconf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conf`
--

LOCK TABLES `conf` WRITE;
/*!40000 ALTER TABLE `conf` DISABLE KEYS */;
INSERT INTO `conf` VALUES (1,'95','2018-04-04');
/*!40000 ALTER TABLE `conf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','Administrator'),(2,'members','General User'),(3,'dafault','Grupo default'),(4,'Teste','Grupo Teste');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `email_confirma` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned DEFAULT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `parentesco` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `identidade` varchar(255) DEFAULT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `numero` int(254) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `creacao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','admin@admin.com','',NULL,NULL,NULL,1268889823,1498070169,1,'Admin','istrator','ADMIN','0','pai','Nome do Teste do Pai',NULL,'859.296.201.30','0902556075','Rua da Divisão',3012,'Jardim Monte Alegre','79034-740',NULL,'Campo Grande','Ms','3333333','91302726',NULL),(2,'127.0.0.1','teste','$2y$08$yB6lKke2TPbw.PbRdRZJ/uRKRkdjBEXIuyL4crdxRR3VnVS.KQDm2',NULL,'teste@teste.com.br','',NULL,NULL,NULL,NULL,1493303793,NULL,1,'Teste','teste','CMCG','67 991302726',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'127.0.0.1','85929620130','$2y$08$yLIC/m8mFkTLX8FpecwXneEs5TFhyxr/dGmpqJFgaH99wFNnuU3FS',NULL,'guto@x.com.br','',NULL,NULL,NULL,NULL,1493825964,1497377992,1,'Luiz Augusto','OLiveira','CMCG','67 91302726','responsável','Luiz Augusto da Silva Oliveira','1981-05-28','85929620130','123456789','centro',3012,'Jardim Monte Alegre','79074-340','BLoco D 301','Campo grande','Mato Grosso do Sul','67 33467729','67 991302726',NULL),(44,'127.0.0.1','02765748349','$2y$08$Y7e.yJpQvYB9spFXcxU6YOdAS7/IggWktRRTpZa/VqE4L6BiizxqS',NULL,'n0cturn0.debian@gmail.com','',NULL,NULL,NULL,NULL,1495465226,1498046019,1,NULL,NULL,NULL,NULL,NULL,'Pai Teste','1956-04-02','02765748349','123456789','centro',45,'Jardim Monte Alegre','79081-580','BLoco D 301','Campo grande','Mato Grosso do Sul','67 33467729','998950391','2017-05-22 11:00 AM'),(45,'127.0.0.1','06146767468','$2y$08$fzOVDy03qUrMzcEcsltsdO99cgAyaHX8hITnzAX61WWlKLQyyMp7q',NULL,'seu@email.com','',NULL,NULL,NULL,NULL,1495479712,1498060832,1,'Maria Jose','Freitas','CMCG','67 91302726',NULL,'Maria Jose','1971-03-16','06146767468','123456','Rua dos Campeões',58,'Uirapuru','79058545','Sem Complemento','Sao Paulo','São Paulo','67 9999-99999','67 9999-55625','2017-05-22 03:01 PM'),(46,'127.0.0.1','52258467187','$2y$08$iao.4MOHxDMUNbL8o7eNFOgQqzsfbHP78Rp14AdMYIPgmjP1.HRwW',NULL,'arilsonls@hotmail.com','',NULL,NULL,NULL,NULL,1495716624,1495717886,1,NULL,NULL,NULL,NULL,NULL,'arilson lima da silva','1972-06-24','52258467187','0925960544','RUA SANTA MARTA',62,'SANTA LUZIA','79116484','CASA 2','CAMPO GRANDE','Mato Grosso do Sul','67 999488772','981606287','2017-05-25 08:50 AM'),(49,'127.0.0.1','06846998268','$2y$08$MdJCHlX2haZar6.SjrPCCOAgNHm5Syplf9ui6jV2JJYwo50veeAV2',NULL,'n0cturn0.debian@gmail.com','','10',NULL,NULL,NULL,1495733379,1495733421,1,NULL,NULL,NULL,NULL,NULL,'Pedro Ernesto Marinho de Jesus','1971-04-20','06846998268','123456789','fvdv',1020,'Uuguaiana','79081-580','Sem complemento','Campo grande','Mato Grosso do Sul','67 991302726','67 94652215','2017-05-25 01:29 PM'),(53,'127.0.0.1','04257553200','$2y$08$9Z9MoOtjwTTP8B5F0uLaPuxYH1fwpXRT6WfWXJ7ricQ8h9aATzRc6',NULL,'n0cturn0.debian@gmail.com','','10',NULL,NULL,NULL,1497450047,1497450408,1,NULL,NULL,NULL,NULL,'Responsavel','Otavio de Andrada Almeida','1968-03-21','04257553200','123456789','Rua Guaicurus',100,'Vila Piratininga','79081580','Sem Complemento','Bonito','Mato Grosso do Sul',' 67 91302726','67 91302726','2017-06-14 10:20 AM'),(54,'127.0.0.1','07368156784','$2y$08$WiEzJbnry.5uEsaRg5e.Uep3nyuLy3UtqkAuaD/e2t0Ndfn.Nc34e',NULL,'alessander.flexa@ig.com.br','','10',NULL,NULL,NULL,1497465284,1497465815,1,NULL,NULL,NULL,NULL,'Responsavel','ALESSANDER ANASTACIO FLEXA','1978-07-31','07368156784','0195457239','RUA MARIO DE ANDRADE ',251,'CARANDÁ','79032260','CASA 12','Campo grande','Mato Grosso do Sul','(67) 992814661','(67) 32113248','2017-06-14 02:34 PM');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (1,1,1),(2,1,2),(58,2,2),(59,26,2),(50,44,2),(65,45,2),(52,46,2),(55,49,2),(63,53,2),(64,54,2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-21 14:50:08
