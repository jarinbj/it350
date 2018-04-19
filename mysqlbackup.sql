-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: coolroms
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1-log

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `username` varchar(255) NOT NULL,
  `password` varchar(512) DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES ('gradeuser','$2y$10$a/JytYfD8qVSwJ.xB5KHp./4DSoAwpV5ZfkIjBpWCfkCLPCsGD5/S','tagrader@350.com',0),('it350','$2y$10$OYqvvgp55EhKRucW6h35/.9pr9m9RTp9SKqc9khX9zTdz2LMO2jXO','justin_giboney@byu.edu',1),('j','$2y$10$G5eIPzZxcM4SGF7H7dFGROqFcyARiOFdNz3PrC92BGdJpEyJRx6Hi','j@j.com',0),('jarinbj','$2y$10$LzN71cM57ezieZPdkMiqWOWMLEQ8mSAAWFmQkUvkk.Db98guJD2fG','jarinbj@byu.edu',1);
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrator` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `rights` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrator`
--

LOCK TABLES `administrator` WRITE;
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `creditcard`
--

DROP TABLE IF EXISTS `creditcard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `creditcard` (
  `ccnumber` varchar(255) DEFAULT NULL,
  `expdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creditcard`
--

LOCK TABLES `creditcard` WRITE;
/*!40000 ALTER TABLE `creditcard` DISABLE KEYS */;
/*!40000 ALTER TABLE `creditcard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `streetnumber` varchar(255) DEFAULT NULL,
  `housenumber` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `usstate` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `ccnumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (2,'example st ','53','provo','UT','84604','jj','4458654868'),(3,'3rd st ','53','provo','UT','84604','jarinbj','4458654868');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `developer`
--

DROP TABLE IF EXISTS `developer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `developer` (
  `name` varchar(255) NOT NULL,
  `royalties` double DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developer`
--

LOCK TABLES `developer` WRITE;
/*!40000 ALTER TABLE `developer` DISABLE KEYS */;
INSERT INTO `developer` VALUES ('Capcom',35),('Nintendo',135),('Sony',70);
/*!40000 ALTER TABLE `developer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gamesystem`
--

DROP TABLE IF EXISTS `gamesystem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gamesystem` (
  `systemID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `releasedate` varchar(255) DEFAULT NULL,
  `developer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`systemID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gamesystem`
--

LOCK TABLES `gamesystem` WRITE;
/*!40000 ALTER TABLE `gamesystem` DISABLE KEYS */;
INSERT INTO `gamesystem` VALUES (1,'NES','1984','Nintendo'),(2,'Gamegear','1995','1995'),(8,'Playstation 1','1996','Sony'),(15,'Playstation 2','2002','Sony');
/*!40000 ALTER TABLE `gamesystem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rom`
--

DROP TABLE IF EXISTS `rom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rom` (
  `name` varchar(255) NOT NULL,
  `releasedate` varchar(255) DEFAULT NULL,
  `description` varchar(1023) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `timessold` int(11) DEFAULT NULL,
  `systemID` int(11) DEFAULT NULL,
  `developer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rom`
--

LOCK TABLES `rom` WRITE;
/*!40000 ALTER TABLE `rom` DISABLE KEYS */;
INSERT INTO `rom` VALUES ('Punchout','1986','punchout!!!',2.99,0,1,'Nintendo'),('Smash','1996','Super!',10.99,5,1,'Hal Labs'),('Zelda','1985','great game',15.99,0,1,'Nintendo');
/*!40000 ALTER TABLE `rom` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER soldcheck BEFORE INSERT ON rom FOR EACH ROW IF NEW.timessold < 0 THEN SET NEW.timessold = 0; END IF */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sale` (
  `saleID` int(11) NOT NULL AUTO_INCREMENT,
  `dateofsale` date DEFAULT NULL,
  `romname` varchar(255) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `ccnumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`saleID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale`
--

LOCK TABLES `sale` WRITE;
/*!40000 ALTER TABLE `sale` DISABLE KEYS */;
INSERT INTO `sale` VALUES (1,'2018-03-07','Zelda',3,'4458654868');
/*!40000 ALTER TABLE `sale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `short`
--

DROP TABLE IF EXISTS `short`;
/*!50001 DROP VIEW IF EXISTS `short`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `short` AS SELECT 
 1 AS `name`,
 1 AS `price`,
 1 AS `releasedate`,
 1 AS `description`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `shortinfo`
--

DROP TABLE IF EXISTS `shortinfo`;
/*!50001 DROP VIEW IF EXISTS `shortinfo`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `shortinfo` AS SELECT 
 1 AS `name`,
 1 AS `price`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `userrom`
--

DROP TABLE IF EXISTS `userrom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userrom` (
  `userID` int(11) DEFAULT NULL,
  `romname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userrom`
--

LOCK TABLES `userrom` WRITE;
/*!40000 ALTER TABLE `userrom` DISABLE KEYS */;
/*!40000 ALTER TABLE `userrom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `short`
--

/*!50001 DROP VIEW IF EXISTS `short`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `short` AS select `rom`.`name` AS `name`,`rom`.`price` AS `price`,`rom`.`releasedate` AS `releasedate`,`rom`.`description` AS `description` from `rom` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `shortinfo`
--

/*!50001 DROP VIEW IF EXISTS `shortinfo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `shortinfo` AS select `rom`.`name` AS `name`,`rom`.`price` AS `price` from `rom` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-18 19:54:01
