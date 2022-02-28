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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (2,'Borrar'),(3,'Informática'),(1,'Películas');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,1,1,'Os recomiendo ver esta película si os gusta la ciencia ficción ya que trata de...','2022-02-16 15:25:05'),(2,3,1,'Yo también la recomiendo.','2022-02-16 15:27:22'),(3,3,2,'Aclaro también que tengo un prespuesto pequeño.','2022-02-12 18:31:40'),(4,3,2,'Después de este post hare otro para comentaros una nueva novedad sobre los ordenadores gamers.','2022-02-12 18:33:57'),(5,2,3,'Allí conoce al dueño Bob Hanson; Jeep (el hijo de Bob; Percy, el cocinero; Charlie, una camarera embarazada; el matrimonio de Howard y Sandra Anderson, varados allí por una avería, y a Audrey, su rebelde hija adolescente. Cuando la televisión, la radio y el teléfono del lugar fallan, una anciana llamada Gladys Foster ingresa al lugar y de pronto se deforma y se vuelve anormalmente hostil antes de morder un pedazo del cuello de Howard, por lo que Kyle le dispara.','2022-02-09 16:00:11'),(6,2,3,'El hombre misterioso llega al lugar y se presenta como Michael. Tras explicar que desea ayudarlos, advierte que sucederá algo muy peligroso y les entrega armas, mientras que el cielo se vuelve negro. Se acercan cientos de automóviles, llenos de personas poseídas que comienzan a atacar el edificio. Michael lidera a los clientes en la pelea, pero Howard es arrastrado fuera. Más tarde, Michael explica que Dios ha perdido la fe en la humanidad y ha enviado a sus ángeles a destruir a la raza humana.','2022-02-09 16:01:18'),(7,1,3,'Gracias por dar mas detalles de la película en los comentarios.','2022-02-09 16:04:33');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaciones`
--

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
INSERT INTO `publicaciones` VALUES (1,1,1,'Terminator','En 2029, después de devastar la Tierra y esclavizar a la humanidad, las máquinas, gobernadas por la inteligencia artificial conocida como Skynet, están a punto de perder la guerra contra la resistencia humana liderada por John Connor. Frente a esa situación, las máquinas entienden que asesinar a John Connor en el presente sería irrelevante, dado que ya ha conducido a la resistencia humana a la victoria.','1985-01-18','../../../img/publicaciones/Terminator.jpg'),(2,3,3,'Duda con tarjeta gráfica','Estoy montando un ordenador y me gustaría saber que tarjeta gráfica debería usar para que los juegos se vean mejor.','2022-02-12','../../../img/publicaciones/TarjetaGrafica.jpg'),(3,2,2,'Legión','Una noche, un hombre alado y con peculiares tatuajes en todo su cuerpo cae desde el cielo en un callejón de Los Ángeles, tras lo cual se arranca sus alas. Tras saquear un almacén de armas y robar un coche de policía, viaja hacia un restaurante de carretera llamado Paradise Falls, cerca del borde del Desierto de Mojave. Mientras tanto, Kyle (Tyrese Gibson), un padre soltero que conduce a Los Ángeles, se detiene en el restaurante.','2010-01-22','../../../img/publicaciones/Legion.jpg'),(4,1,3,'Saga A Nightmare on Elm Street','Quería hacer una crítica sobre esta película ya que fue una de las sagas que vi desde niño...','2022-02-15','../../../img/publicaciones/ElmStreet.jpg');
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Jose20','f0482c1b407fb3109ee3dca919175bad47eeea60','Jose','Bozada','Montanés','josebozadamontanes@gmail.com','../../img/usuarios/Broly LSSJ 2.jpg','1998-03-04','PadreLerchundi',654024147,'Melilla','Melilla','45316056F','5a065813082c8ed960b84c9165ead3','Admin'),(2,'Test11','f0482c1b407fb3109ee3dca919175bad47eeea60','test','test','test','test@gmail.com','img/usuarios/test.png','1993-01-01','Calle General Barceló 41, Melilla',123456789,'Ceuta','Ceuta','12345678A','5a065813082232d960b84c9165ead3','Usuario'),(3,'Borrar22','f0482c1b407fb3109ee3dca919175bad47eeea60','Borrar','Borrar','Borrar','Borrar@gmail.com','img/usuarios/avatar.png','1990-03-11','Sin direccion',213456789,'Madrid','Madrid','21345678E','5a0sdsdg3082232d960b84c9165ead3','Usuario');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valoracion`
--

LOCK TABLES `valoracion` WRITE;
/*!40000 ALTER TABLE `valoracion` DISABLE KEYS */;
INSERT INTO `valoracion` VALUES (1,1,1,5),(2,1,2,3),(3,1,3,4),(4,4,3,1),(5,2,1,1),(6,2,2,2),(7,2,3,3),(8,3,1,4),(9,3,2,3);
/*!40000 ALTER TABLE `valoracion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-28 15:43:24
