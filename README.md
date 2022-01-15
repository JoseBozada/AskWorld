- [TÍTULO DE PROYECTO](#título-de-proyecto)
  - [Antecedentes](#antecedentes)
- [REQUISITOS](#requisitos)
  - [Requisitos funcionales](#requisitos-funcionales)
- [ANÁLISIS Y DISEÑO WEB](#análisis-y-diseño-web)
  - [Prototipo web y boceto de la estructura](#prototipo-web-y-boceto-de-la-estructura)
    - [Zona de Administrador](#zona-de-administrador)
      - [Login](#página-login-de-administrador)
      - [Recuperar contraseña](#página-recuperar-contraseña-de-administrador)
      - [Actualizar contraseña](#página-actualizar-contraseña-de-administrador)
      - [Inicio](#página-inicio-de-administrador)
      - [Tablas](#página-tablas-de-administrador)
      - [Acciones](#página-acciones-de-administrador)
      - [Mi cuenta](#página-mi-cuenta-de-administrador)
    - [Página Web y Zona de Usuario](#zona-web-y-zona-de-usuario)
      - [Inicio](#página-inicio-de-página-web)
      - [Detalles](#página-detalles-de-página-web)
      - [Registro](#página-registro-de-usuarios)
      - [Login](#página-login-de-usuarios)
      - [Recuperar contraseña](#página-recuperar-contraseña-de-usuarios)
      - [Actualizar contraseña](#página-actualizar-contraseña-de-usuarios)
      - [Contenido](#página-contenido-de-usuarios)
      - [Acciones](#página-acciones-de-usuarios)
      - [Mi cuenta](#página-mi-cuenta-de-usuarios)
  - [Guía de estilos](#guía-de-estilos)
    - [Logo](#logo)
    - [Colores del logo](#colores-corporativos-del-logo)
    - [Justificación del logo](#justificación-de-diseño-del-logo)
  - [Planificación de tareas](#planificación-de-tareas)
  - [Base de datos](#base-de-datos)
    - [Diseño Entidad Relación de la BBDD](#diseño-entidad-relación-de-la-bbdd)
    - [Modelo relacional BBDD](#modelo-relacional-bbdd)
    - [Script de creación BBDD](#script-de-creación-bbdd)
    - [Consultas](#consultas)
  - [Validación de formularios](#validación-de-formularios)
  - [Proceso de carga](#proceso-de-carga)
  - [Jerarquía de directorios](#jerarquía-de-directorios)
    - [Contenido directorios](#contenido-directorios)
  - [Diseño de la interface](#diseño-de-la-interface)
    - [Estructura gráfica de la interface](#estructura-gráfica-de-la-interface)
- [IMPLEMENTACIÓN](#implementación)
  - [REQUISITO 1: Diseño responsive](#requisito-1-diseño-responsive)
    - [Funcionamiento](#funcionamiento)
    - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 2: ...](#requisito-2-)
- [PRUEBAS](#pruebas)
  - [Metodología de las pruebas](#metodología-de-las-pruebas)
- [DESPLIEGUE](#despliegue)
- [HERRAMIENTAS](#herramientas)
- [LENGUAJES](#lenguajes)
- [PRODUCTO](#producto)
  - [Página de Inicio](#página-de-inicio)
- [BIBLIOGRAFÍA](#bibliografía)

# TÍTULO DE PROYECTO
## Antecedentes

Este proyecto muestra todos los pasos a seguir para recolectar, organizar, tratar y construir un portal Web empezando desde cero, para montar una página web como si fuera un “foro” para comentar diversos temas y valorar sobre ellos.
He optado por un diseño más gráfico que de texto ya que por experiencia personal un foro normal llega a ser tedioso si hay demasiadas páginas junto al texto (como la combinación de colores negros con letra blanca que acaba cansando la vista), por eso prefiero organizarlo por imágenes, facilitando la búsqueda del tema y ver los comentarios más cómodamente.

Se han utilizado distintos lenguajes de programación, como pueden ser PHP y JavaScript para su desarrollo, y para su diseño se ha hecho uso de estilos CSS y de librerías como Boostrap que nos facilita la creación de headers, diseño responsive, o cualquier recurso que necesitemos.

# REQUISITOS

Se describen de forma concisa los requisitos funcionales de vuestra aplicación.
## Requisitos funcionales

- Diseño responsive
- Control de errores en formularios que deben incluir como mínimo un registro de usuario
  - Usuario
  - Contraseña
  - Nombre
  - Apellido1
  - Apellido2
  - Email
  - Imagen
  - DNI
  - Teléfono
  - Fecha de nacimiento
  - Dirección
  - Provincia (elegible desde un desplegable)
  - Población (se rellenará según los datos de la provincia seleccionada.)
  - Rol
- Acceso restringido a usuarios no registrados  
- Que solo los usuarios registrados puedan comentar y valorar positivamente o negativamente sobre el tema. 
- Los usuarios sin registrar tendrán acceso al contenido pero no podrán comentar ni valorar.
- Solo los administradores pueden añadir los temas a tratar (foto, descripción, categoría, etc).
- Añadir filtros para poder ordenar por categoría.
- Cada usuario tendrá su perfil para modificar sus datos (nombre, apellidos, correo...).
- En la noticia aparecerá la foto, descripción, comentarios y valoración.
- Los administradores tendrán un panel que les permita modificar, borrar o añadir contenido a la página y del mismo modo con los usuarios.
- Para acceder al contenido tendrán que clickear en una tarjeta y les mostrará la foto, descripción, valoración y comentarios.

# ANÁLISIS Y DISEÑO WEB

Existen dos secciones de la página:
- Zona Administrador: Solo podrán acceder los usuarios Administradores de la página, tienen control de todo (publicaciones, comentarios y usuarios), pueden crear sus propias publicaciones así como borrar los datos y roles de todos los usuarios.

- Mapa web:

![Mapa web admin](https://user-images.githubusercontent.com/55547053/149623156-7be0fab2-0ab2-4de7-85e4-bf0932a029a0.jpg)

- Página web y Zona Usuario: Se permite a los usuarios no registrado acceder a los detalles de las publicaciones, pero si no se registran o inician sesión no tendrán acceso a sus publicaciones, comentarios ni su cuenta.

- Mapa web:

![Mapa web](https://user-images.githubusercontent.com/55547053/149623159-1e86d25d-8fee-47d5-ad4e-21542da4957f.jpg)

## Prototipo web y boceto de la estructura

### Zona de administrador

#### Página login de administrador

![1](https://user-images.githubusercontent.com/55547053/148784128-3870e474-a8f2-4ab0-bd52-06f768d5bf1a.jpg)

#### Página recuperar contraseña de administrador

![66](https://user-images.githubusercontent.com/55547053/149157028-cf463566-147d-4df4-b5fa-f02ef8d67e54.jpg)

#### Página actualizar contraseña de administrador

![7](https://user-images.githubusercontent.com/55547053/149178147-3bbc8378-fd68-40c5-b4c7-4c7d7f2f42d7.jpg)

#### Página inicio de administrador

![22](https://user-images.githubusercontent.com/55547053/148785564-9a0f246a-0cdf-4ac9-918e-e6359da98cbc.jpg)

#### Página tablas de administrador

![33](https://user-images.githubusercontent.com/55547053/148789231-c08eb9f3-bb4f-4f75-bd45-5a30196e6fb7.jpg)

#### Página acciones de administrador

![4](https://user-images.githubusercontent.com/55547053/148967962-b320850d-35a1-4cc7-a796-7c82aa2075b4.jpg)

#### Página mi cuenta de administrador

![5](https://user-images.githubusercontent.com/55547053/148968217-2d5a97e3-81d5-4f26-856b-e5c51e66a7f1.jpg)

### Zona web y Zona de usuario

#### Página inicio de página web

![1](https://user-images.githubusercontent.com/55547053/149360500-6b31a531-927e-4428-9c0b-42431481f382.jpg)

#### Página detalles de página web

![3](https://user-images.githubusercontent.com/55547053/149360636-6ded9196-29d7-4ef1-aea8-2b5f071527e6.jpg)

#### Página registro de usuarios

![6](https://user-images.githubusercontent.com/55547053/149156064-105cf728-d9ad-4d8e-87ce-1ffa6949110d.jpg)

#### Página login de usuarios

![2](https://user-images.githubusercontent.com/55547053/149156112-90472e01-493b-4575-a71f-8e12f2b922d0.jpg)

#### Página recuperar contraseña de usuarios

![88](https://user-images.githubusercontent.com/55547053/149180287-db433506-8293-49fc-89e4-2261b05ae0ef.jpg)

#### Página actualizar contraseña de usuarios

![99](https://user-images.githubusercontent.com/55547053/149180320-39eb60ad-0f62-4d68-a5ee-8abdcac43619.jpg)

#### Página contenido de usuarios

![5](https://user-images.githubusercontent.com/55547053/149360970-83c6f28b-ffbd-412b-bc47-574692c75e8d.jpg)

#### Página acciones de usuarios

![7](https://user-images.githubusercontent.com/55547053/149360851-723ac81c-ada6-46d1-beb0-2f84bebb547b.jpg)

#### Página mi cuenta de usuarios

![4](https://user-images.githubusercontent.com/55547053/149360681-fa596fc1-37b7-4630-ae60-2918aa4f49d3.jpg)

## Guía de estilos

### Logo

![Logo](https://user-images.githubusercontent.com/55547053/149179394-2f6148f0-9975-490e-ad4d-571615a2d3de.png)

### Colores corporativos del logo

La palabra "Ask" se ha usado el rojo para destacarla y el azul junto al verde en la Tierra para simbolizarla como la misma formando así "AskWorld" 

### Justificación de diseño del logo

La Tierra simboliza la globalidad de las personas que pueden usar la página, es decir, que cualquier persona desde cualquier parte del mundo podrán consultar sus dudas o participar en ellas.

## Planificación de tareas

![Tareas](https://user-images.githubusercontent.com/55547053/149335962-de16e85d-d82a-4f9f-9b4d-904e3cd23e96.jpg)

## Base de datos
### Diseño Entidad Relación de la BBDD

![image](https://user-images.githubusercontent.com/55547053/142044934-2395df99-49d6-48cc-b34f-17a9dabea33b.png)

### Modelo relacional BBDD

![image](https://user-images.githubusercontent.com/55547053/142044574-c3bf059a-8775-4118-9c42-dc02f68edac6.png) 

### Script de creación BBDD

-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: askworld
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `idCategoria` int NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(45) NOT NULL,
  PRIMARY KEY (`idCategoria`),
  UNIQUE KEY `idCategoría_UNIQUE` (`idCategoria`),
  UNIQUE KEY `NombreCategoria_UNIQUE` (`NombreCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentarios` (
  `idComentarios` int NOT NULL AUTO_INCREMENT,
  `IdUsuarios` int NOT NULL,
  `IdPost` int NOT NULL,
  `Comentario` text NOT NULL,
  `Fecha` datetime NOT NULL,
  PRIMARY KEY (`idComentarios`),
  UNIQUE KEY `idComentarios_UNIQUE` (`idComentarios`),
  UNIQUE KEY `IdPost_UNIQUE` (`IdPost`),
  KEY `IdUsuarios_idx` (`IdUsuarios`),
  CONSTRAINT `Esta comentando el post` FOREIGN KEY (`IdPost`) REFERENCES `post` (`idPost`),
  CONSTRAINT `IdUsuarios` FOREIGN KEY (`IdUsuarios`) REFERENCES `usuarios` (`idUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `likes` (
  `idPost` int NOT NULL,
  `idUsuarios` int NOT NULL,
  `Accion` varchar(20) DEFAULT NULL,
  UNIQUE KEY `idPost_UNIQUE` (`idPost`),
  UNIQUE KEY `idUsuarios_UNIQUE` (`idUsuarios`),
  CONSTRAINT `El usuario ` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`),
  CONSTRAINT `Le gusta el post` FOREIGN KEY (`idPost`) REFERENCES `post` (`idPost`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `idPost` int NOT NULL AUTO_INCREMENT,
  `NombrePost` varchar(45) NOT NULL,
  `DescripciónPost` longtext NOT NULL,
  `ImagenPost` varchar(45) NOT NULL,
  `CategoriaPost` int NOT NULL,
  PRIMARY KEY (`idPost`),
  UNIQUE KEY `idPost_UNIQUE` (`idPost`),
  UNIQUE KEY `NombrePost_UNIQUE` (`NombrePost`),
  UNIQUE KEY `CategoriaPost_UNIQUE` (`CategoriaPost`),
  CONSTRAINT `Pertenece a la categoria` FOREIGN KEY (`CategoriaPost`) REFERENCES `categoria` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idUsuarios` int NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(45) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido1` varchar(45) NOT NULL,
  `Apellido2` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Imagen` varchar(45) NOT NULL,
  `Rol` varchar(45) NOT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Telefono` int DEFAULT NULL,
  `Provincia` varchar(45) DEFAULT NULL,
  `Poblacion` varchar(45) DEFAULT NULL,
  `DNI` int unsigned DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`),
  UNIQUE KEY `idUsuarios_UNIQUE` (`idUsuarios`),
  UNIQUE KEY `Usuario_UNIQUE` (`Usuario`),
  UNIQUE KEY `Usuarioscol_UNIQUE` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-16 17:21:08

### Consultas 

Se incluyen y describen todas las consultas que se emplean en el desarrollo del proyecto.

## Validación de formularios

Se incluyen todos los formularios que se emplean en la WEB y se especifican qué tipo de validación se va ha realizar.

## Proceso de carga

Descripción del proceso de carga de vuestra aplicación. Por ejemplo:

> Al introducir la URL proyecto.com en el navegador, el fichero “index.php” carga la plantilla, dependiendo del idioma (Esp, Eus o Ing), cargará una plantilla u otra, por defecto “plantillaEsp.html”.
> 
> El proceso se muestra en el siguiente diagrama:
>
>![ProcesoDeCarga](Imagenes/ProcesoDeCarga.png)

## Jerarquía de directorios

Mostramos el árbol de directorios de nuestro proyecto WEB, tal y como lo visualizaríamos en la carpeta WWW.

Podemos usar la herramienta `tree -d` en entorno linux.

![ArbolDirectorios](Imagenes/ArbolDirectorios.png)

### Contenido directorios

Breve explicación de lo que tenemos contenido en cada directorio. Por ejemplo:

> `./` -> Contiene los ficheros principales “index.php”, “estilos.css”, “realizar_recomendacion.php”, “realizar_enviao.php”, “descargas.php” y “javascript.js”.
> 
> `descargas` -> Contiene los archivo PDF descargables desde el sitio web.
> 
> `Esp` -> Contiene las imágenes y las páginas web en español.
> 
> `Eus` -> Contiene las imágenes y las páginas web en euskera.
> 
> ...

## Diseño de la interface

En base al apartado [Prototipo web y boceto de la estructura](#prototipo-web-y-boceto-de-la-estructura) describimos el contenido de la interface de nuestra aplicación. Por ejemplo:

> El sitio web consta de cinco partes fundamentales. Esta estructura es común en todas las páginas que forman el sitio web.
> 
> **Cabecera**: Contiene el logo de la empresa, que es "AskWorld". También contiene los enlaces a las páginas: inicio, iniciar sesión, registrarme.
> 

### Estructura gráfica de la interface

Mostramos la estructura gráfica de nuestro diseño. Por ejemplo.

![image](https://user-images.githubusercontent.com/55547053/142046444-7a0bea72-12d2-4d3a-81e5-fdfc439d679b.png)

![image](https://user-images.githubusercontent.com/55547053/142046487-d6516e3f-c766-4ecc-9766-c3afa292cc6c.png)

# IMPLEMENTACIÓN

Descripción detallada de cada requisito, incluyendo su funcionamiento, validaciones si fuesen necesarias, y cualqier información relevante.

**Por ejemplo:**

## REQUISITO 1: Diseño responsive

Cada vez hay mas usuarios de Internet que utilizan dispositivos móviles para navegar. Si nos fijamos en la analítica de nuestra web, nos damos cuenta que cada vez hay un gran numero de visitas que provienen de dispositivos móviles, por lo que las resoluciones a las cuales vemos nuestro desarrollo son diferentes.

La principal necesidad que existe para hacer un diseño «adaptable», es porque se pierden bastantes visitantes, al no tener el site adaptable a todos.
### Funcionamiento

Para incluir un diseño responsive en la WEB se ha empleado CSS, y el framework Bootstrap.
### Ejemplo de código

Para la zona de publicacione se ha empleado el siguiente código:

```css
.blog-pagination {
    margin-bottom: 4rem;
}
 
.blog-pagination > .btn {
    border-radius: 2rem;
}
 
 
.blog-footer {
    padding: 2.5rem 0;
    color: #999;
    text-align: center;
    background-color: #f9f9f9;
    border-top: .05rem solid #e5e5e5;
}
```
## REQUISITO 2: ...

Esto se realiza para cada uno de los requisitos de nuestra aplicación.

# PRUEBAS

Breve descripción de cómo se han realizado las pruebas. Por ejemplo:

> Para la realización de las pruebas he montado una máquina virtual con linux + apache + mysql + php.
> 
> A lo largo del desarrollo he subido diferentes versiones y comprobado las diferentes funcionalidades.

## Metodología de las pruebas

Descripción de las pruebas que se han realizado para probar el funcionamiento de toda la aplicación. 

Imprescindible comprobar el CRUD y el acceso público y privado de nuestra aplicación.

# DESPLIEGUE

Creación de un Script en BASH que permita el despliegue en automático de la aplicación en cualquier servidor linux, que contenga un Apache+PHP y una base de datos SQL.

Se copia y describe el funcionamiento del script.

# HERRAMIENTAS

Descripción de todas las herramientas que se han usado para el desarrollo del proyecto. Por ejemplo:

> Para la realización del proyecto se han empleado las siguientes herramientas:
> ## Visual Studio
> 
> Descripción de Visual Studio
> 
> ### Características
> 
> Breve descripción de las características y plugins que hemos usado 
> 

> ## XAMPP
> 
> Descripción de XAMPP
> 
> ### Características
> 
> Breve descripción de las características y plugins que hemos usado 
> 

> ## MySQL Worbench
> 
> Descripción de MySQL Worbench
> 
> ### Características
> 
> Breve descripción de las características y plugins que hemos usado 
> 

# LENGUAJES

Descripción de los lenguajes y frameworks utilizados para el desarrollo del proyecto. Por ejemplo:

> ## HTML
> 
> Descripción de qué es HTML
> 
> ### Características
> 
> Breve descripción de sus características  

> ## PHP
> 
> Descripción de qué es PHP
> 
> ### Características
> 
> Breve descripción de sus características  

> ## JavaScript
> 
> Descripción de qué es JavaScript
> 
> ### Características
> 
> Breve descripción de sus características  
> 

> ## CSS
> 
> Descripción de qué es CSS
> 
> ### Características
> 
> Breve descripción de sus características

# PRODUCTO

Se muestran diferentes pantallas que constituyen el desarrollo final de la aplicación:

## Página de Inicio

![EjemploInicio](Imagenes/EjemploInicio.png)

Y lo vamos realizando con todas las pantallas.
# BIBLIOGRAFÍA

- Comentarios: https://www.youtube.com/watch?v=EHca8OI8ez0
- Sistema de valoración: https://www.youtube.com/watch?v=0bqm-2wLKW4
- Añadir iconos: https://fontawesome.com/ 
- Tablas avanzadas: https://datatables.net/
