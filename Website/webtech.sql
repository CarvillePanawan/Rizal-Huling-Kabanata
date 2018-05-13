-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: webtech
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (1,'hello','hello','5d41402abc4b2a76b9719d911017c592'),(2,'nice one','nice one','f97c5d29941bfb1b2fdab0874906ab82');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `java_answers`
--

DROP TABLE IF EXISTS `java_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `java_answers` (
  `java_id` int(11) NOT NULL AUTO_INCREMENT,
  `answers` varchar(100) NOT NULL,
  PRIMARY KEY (`java_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `java_answers`
--

LOCK TABLES `java_answers` WRITE;
/*!40000 ALTER TABLE `java_answers` DISABLE KEYS */;
INSERT INTO `java_answers` VALUES (1,'getAttributeNames'),(2,'getParameterNames'),(3,'getWriter'),(4,'resetBuffer'),(5,'isSecure'),(6,'flushBuffer'),(7,'getScheme'),(8,'ContentLength'),(9,'Committed'),(10,'reset'),(11,'pavni diwanji'),(12,'servlet 4.0'),(13,'initialization,request handling,destruction'),(14,'ServletContextListener,ServletContextEvent'),(15,'ServletContextAttributeListener,ServletContextAttributeEvent'),(16,'ServletRequestAttributeListener, ServletRequestAttributeEvent'),(17,'service()'),(18,'init()'),(19,'init(),service(),destroy()'),(20,'doGet(),doPost(),doPut(),doDelete()');
/*!40000 ALTER TABLE `java_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `java_leaderboard`
--

DROP TABLE IF EXISTS `java_leaderboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `java_leaderboard` (
  `javalead_id` int(11) NOT NULL AUTO_INCREMENT,
  `javalead_name` varchar(45) NOT NULL,
  `javalead_scorre` int(11) NOT NULL,
  `javalead_date` date NOT NULL,
  PRIMARY KEY (`javalead_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `java_leaderboard`
--

LOCK TABLES `java_leaderboard` WRITE;
/*!40000 ALTER TABLE `java_leaderboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `java_leaderboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jsp_answers`
--

DROP TABLE IF EXISTS `jsp_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jsp_answers` (
  `jsp_id` int(11) NOT NULL AUTO_INCREMENT,
  `answers` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`jsp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jsp_answers`
--

LOCK TABLES `jsp_answers` WRITE;
/*!40000 ALTER TABLE `jsp_answers` DISABLE KEYS */;
INSERT INTO `jsp_answers` VALUES (1,'scriptet'),(2,'javaserver pages'),(3,'dynamic'),(4,'<%  %>'),(5,'<%--  --%>'),(6,'directive'),(7,'declarations'),(8,'expressions'),(9,'page,include,tag library');
/*!40000 ALTER TABLE `jsp_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jsp_leaderboard`
--

DROP TABLE IF EXISTS `jsp_leaderboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jsp_leaderboard` (
  `jsplead_id` int(11) NOT NULL AUTO_INCREMENT,
  `jsplead_name` varchar(45) NOT NULL,
  `jsplead_score` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`jsplead_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jsp_leaderboard`
--

LOCK TABLES `jsp_leaderboard` WRITE;
/*!40000 ALTER TABLE `jsp_leaderboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `jsp_leaderboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nodejs_answers`
--

DROP TABLE IF EXISTS `nodejs_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nodejs_answers` (
  `nodejs_id` int(11) NOT NULL AUTO_INCREMENT,
  `answers` varchar(45) NOT NULL,
  PRIMARY KEY (`nodejs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nodejs_answers`
--

LOCK TABLES `nodejs_answers` WRITE;
/*!40000 ALTER TABLE `nodejs_answers` DISABLE KEYS */;
INSERT INTO `nodejs_answers` VALUES (1,'buffer'),(2,'crypto'),(3,'dgram'),(4,'events'),(5,'child proces'),(6,'domain'),(7,'cluster'),(8,'assert'),(9,'fs'),(10,'dns');
/*!40000 ALTER TABLE `nodejs_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nodejs_leaderboard`
--

DROP TABLE IF EXISTS `nodejs_leaderboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nodejs_leaderboard` (
  `nodelead_id` int(11) NOT NULL AUTO_INCREMENT,
  `nodelead_name` varchar(45) NOT NULL,
  `nodelead_score` int(11) NOT NULL,
  `nodelead_date` date NOT NULL,
  PRIMARY KEY (`nodelead_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nodejs_leaderboard`
--

LOCK TABLES `nodejs_leaderboard` WRITE;
/*!40000 ALTER TABLE `nodejs_leaderboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `nodejs_leaderboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `php_answers`
--

DROP TABLE IF EXISTS `php_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `php_answers` (
  `php_id` int(11) NOT NULL AUTO_INCREMENT,
  `answers` varchar(100) NOT NULL,
  PRIMARY KEY (`php_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `php_answers`
--

LOCK TABLES `php_answers` WRITE;
/*!40000 ALTER TABLE `php_answers` DISABLE KEYS */;
INSERT INTO `php_answers` VALUES (1,'rasmus lerdorf'),(2,'personal home pages tools '),(3,'server side'),(4,'web server'),(5,'superglobal'),(6,'variable'),(7,'concatenation'),(8,'cookie'),(9,'web server'),(10,'array'),(11,'true'),(12,'false'),(13,'true'),(14,'true'),(15,'true'),(16,'false'),(17,'true'),(18,'false'),(19,'true'),(20,'false');
/*!40000 ALTER TABLE `php_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `php_leaderboard`
--

DROP TABLE IF EXISTS `php_leaderboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `php_leaderboard` (
  `phplead_id` int(11) NOT NULL AUTO_INCREMENT,
  `phplead_name` varchar(45) NOT NULL,
  `phplead_score` int(11) NOT NULL,
  `phplead_date` date NOT NULL,
  PRIMARY KEY (`phplead_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `php_leaderboard`
--

LOCK TABLES `php_leaderboard` WRITE;
/*!40000 ALTER TABLE `php_leaderboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `php_leaderboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `websec_answers`
--

DROP TABLE IF EXISTS `websec_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `websec_answers` (
  `websec_id` int(11) NOT NULL AUTO_INCREMENT,
  `websec_answers` varchar(300) NOT NULL,
  PRIMARY KEY (`websec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `websec_answers`
--

LOCK TABLES `websec_answers` WRITE;
/*!40000 ALTER TABLE `websec_answers` DISABLE KEYS */;
INSERT INTO `websec_answers` VALUES (1,'injection'),(2,'open web application security project'),(3,'cross-site scripting'),(4,'broken access control'),(5,'broken authentication'),(6,'sensitive data exposure'),(7,'XML external entities'),(8,'security misconfiguration'),(9,'cross-site scripting'),(10,'XML external entities'),(11,'injection,broken authentication,sensitive data exposure,xml external entities,broken access control,security misconfiguration,cross-site scripting,insecure deserialization,using components with known vulnerabilities,insufficient logging and monitoring');
/*!40000 ALTER TABLE `websec_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `websec_leaderboard`
--

DROP TABLE IF EXISTS `websec_leaderboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `websec_leaderboard` (
  `webseclead_id` int(11) NOT NULL AUTO_INCREMENT,
  `webseclead_name` varchar(45) NOT NULL,
  `webseclead_score` int(11) NOT NULL,
  `webseclead_date` date NOT NULL,
  PRIMARY KEY (`webseclead_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `websec_leaderboard`
--

LOCK TABLES `websec_leaderboard` WRITE;
/*!40000 ALTER TABLE `websec_leaderboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `websec_leaderboard` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-13 16:25:39
