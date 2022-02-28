CREATE DATABASE  IF NOT EXISTS `askworld` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `askworld`;
-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: askworld
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(20) NOT NULL,
  PRIMARY KEY (`idCategoria`),
  UNIQUE KEY `NombreCategoria_UNIQUE` (`NombreCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idPublicacion` int(11) NOT NULL,
  `Comentario` text COLLATE utf8_bin NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idComentario`),
  KEY `fk_Usuario_idx` (`idUsuario`),
  KEY `fk_Usuario_idx1` (`idPublicacion`),
  KEY `fk_Usuario_idx_Comentario` (`idUsuario`),
  CONSTRAINT `fk_idPublicacion` FOREIGN KEY (`idPublicacion`) REFERENCES `publicaciones` (`idPublicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicaciones` (
  `idPublicacion` int(11) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `NombrePublicacion` varchar(45) NOT NULL,
  `DescripcionPublicacion` text NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `ImagenPublicacion` varchar(255) NOT NULL,
  PRIMARY KEY (`idPublicacion`),
  KEY `fk_Categoria_idx` (`idCategoria`),
  KEY `fk_Usuario_idx` (`idUsuario`),
  CONSTRAINT `fk_Categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `Contrasena` varchar(255) COLLATE utf8_bin NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `Apellido1` varchar(20) COLLATE utf8_bin NOT NULL,
  `Apellido2` varchar(20) COLLATE utf8_bin NOT NULL,
  `Email` varchar(80) COLLATE utf8_bin NOT NULL,
  `Imagen` varchar(255) COLLATE utf8_bin NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Direccion` varchar(255) COLLATE utf8_bin NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Provincia` varchar(45) COLLATE utf8_bin NOT NULL,
  `Poblacion` varchar(45) COLLATE utf8_bin NOT NULL,
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `Token` varchar(255) COLLATE utf8_bin NOT NULL,
  `Rol` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `Usuario_UNIQUE` (`Usuario`),
  UNIQUE KEY `Email_UNIQUE` (`Email`),
  UNIQUE KEY `Telefono_UNIQUE` (`Telefono`),
  UNIQUE KEY `DNI_UNIQUE` (`DNI`),
  UNIQUE KEY `Token_UNIQUE` (`Token`),
  KEY `fk_Publicacion` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `valoracion`
--

DROP TABLE IF EXISTS `valoracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valoracion` (
  `idValoracion` int(11) NOT NULL AUTO_INCREMENT,
  `idPublicacion` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `valoracion` int(1) NOT NULL,
  PRIMARY KEY (`idValoracion`),
  KEY `fk_Publicacion_idx` (`idPublicacion`),
  KEY `fk_Usuario_idx` (`idUsuario`),
  CONSTRAINT `fk_Publicacion_idx` FOREIGN KEY (`idPublicacion`) REFERENCES `publicaciones` (`idPublicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Usuario_idx` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-21 22:44:44
