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
      - [Database](#database)
      - [Categoría](#categoría)  
      - [Comentarios](#comentarios)
      - [Publicaciones](#publicaciones)
      - [Usuarios](#usuarios)
      - [Valoración](#valoración)
    - [Consultas](#consultas)
      - [Seleccionar](#seleccionar) 
      - [Insertar](#insertar) 
      - [Modificar](#modificar) 
      - [Eliminar](#eliminar)
  - [Validación de formularios](#validación-de-formularios)
  - [Proceso de carga](#proceso-de-carga)
  - [Jerarquía de directorios](#jerarquía-de-directorios)
    - [Contenido directorios](#contenido-directorios)
  - [Diseño de la interface](#diseño-de-la-interface)
    - [Estructura gráfica de la interface](#estructura-gráfica-de-la-interface)
    	- [Zona Administrador](#zona-administrador) 
    	- [Página Web y Zona Usuario](#página-web-y-zona-usuario)
- [IMPLEMENTACIÓN](#implementación)
  - [REQUISITO 1: Diseño responsive](#requisito-1-diseño-responsive---conseguido)
    - [Funcionamiento](#funcionamiento)
    - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 2: Control de errores en formularios](#requisito-2-control-de-errores-en-formularios---conseguido)
    - [Funcionamiento](#funcionamiento)
    - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 3: Acceso restringido a usuarios no registrados](#requisito-3-acceso-restringido-a-usuarios-no-registrados---conseguido)
    - [Funcionamiento](#funcionamiento)
    - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 4: Que solo los usuarios registrados puedan comentar y valorar positivamente o negativamente sobre el tema](#requisito-4-que-solo-los-usuarios-registrados-puedan-comentar-y-valorar-positivamente-o-negativamente-sobre-el-tema---conseguido)
    - [Funcionamiento](#funcionamiento)
    - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 5: Los usuarios sin registrar tendrán acceso al contenido pero no podrán comentar ni valorar](#requisito-5-los-usuarios-sin-registrar-tendrán-acceso-al-contenido-pero-no-podrán-comentar-ni-valorar---conseguido)
    - [Funcionamiento](#funcionamiento)
    - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 6: Solo los administradores pueden añadir los temas a tratar (foto, descripción, categoría, etc)](#requisito-6-solo-los-administradores-pueden-añadir-los-temas-a-tratar-foto-descripción-categoría-etc---conseguido)
    - [Funcionamiento](#funcionamiento)
    - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 7: Añadir filtros para poder ordenar por categoría](#requisito-7-añadir-filtros-para-poder-ordenar-por-categoría---conseguido)
    - [Funcionamiento](#funcionamiento)
    - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 8: Cada usuario tendrá su perfil para modificar sus datos (nombre, apellidos, correo, etc)](#requisito-8-cada-usuario-tendrá-su-perfil-para-modificar-sus-datos-nombre-apellidos-correo-etc---conseguido-parcialmente)
    - [Funcionamiento](#funcionamiento)
    - [Ejemplo de código](#ejemplo-de-código)
   - [REQUISITO 9: En la noticia aparecerá la foto, descripción, comentarios y valoración](#requisito-9-en-la-noticia-aparecerá-la-foto-descripción-comentarios-y-valoración---conseguido)
      - [Funcionamiento](#funcionamiento)
      - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 10: Los administradores tendrán un panel que les permita modificar, borrar o añadir contenido a la página y del mismo modo con los usuarios](#requisito-10-los-administradores-tendrán-un-panel-que-les-permita-modificar-borrar-o-añadir-contenido-a-la-página-y-del-mismo-modo-con-los-usuarios---conseguido)
      - [Funcionamiento](#funcionamiento)
      - [Ejemplo de código](#ejemplo-de-código)
  - [REQUISITO 11: Para acceder al contenido tendrán que clickear en una tarjeta y les mostrará la foto, descripción, valoración y comentarios](#requisito-11-para-acceder-al-contenido-tendrán-que-clickear-en-una-tarjeta-y-les-mostrará-la-foto-descripción-valoración-y-comentarios---conseguido)
    - [Funcionamiento](#funcionamiento)	 
    - [Ejemplo de código](#ejemplo-de-código)
  - [Requisitos no contemplados](#requisitos-no-contemplados)
    - [REQUISITO 12: Los usuarios registrados pueden crear publicaciones](#requisito-12-los-usuarios-registrados-pueden-crear-publicaciones---conseguido)
- [PRUEBAS](#pruebas)
     - [Metodología de las pruebas](#metodología-de-las-pruebas)
       - [REQUISITO 1: Diseño Responsive](#requisito-1-diseño-responsive)
       - [REQUISITO 2: Control de errores en formularios](#requisito-2-control-de-errores-en-formularios)
       - [REQUISITO 3: Acceso restringido a usuarios no registrados](#requisito-3-acceso-restringido-a-usuarios-no-registrados)
       - [REQUISITO 4: Que solo los usuarios registrados puedan comentar y valorar positivamente o negativamente sobre el tema](#requisito-4-que-solo-los-usuarios-registrados-puedan-comentar-y-valorar-positivamente-o-negativamente-sobre-el-tema)
       - [REQUISITO 5: Los usuarios sin registrar tendrán acceso al contenido pero no podrán comentar ni valorar](#requisito-5-los-usuarios-sin-registrar-tendrán-acceso-al-contenido-pero-no-podrán-comentar-ni-valorar)
       - [REQUISITO 6: Solo los administradores pueden añadir los temas a tratar (foto, descripción, categoría, etc)](#requisito-6-solo-los-administradores-pueden-añadir-los-temas-a-tratar-foto-descripción-categoría-etc)
       - [REQUISITO 7: Añadir filtros para poder ordenar por categoría](#requisito-7-añadir-filtros-para-poder-ordenar-por-categoría)
       - [REQUISITO 8: Cada usuario tendrá su perfil para modificar sus datos (nombre, apellidos, correo, etc)](#requisito-8-cada-usuario-tendrá-su-perfil-para-modificar-sus-datos-nombre-apellidos-correo-etc)
       - [REQUISITO 9: En la noticia aparecerá la foto, descripción, comentarios y valoración](#requisito-9-en-la-noticia-aparecerá-la-foto-descripción-comentarios-y-valoración)
       - [REQUISITO 10: Los administradores tendrán un panel que les permita modificar, borrar o añadir contenido a la página y del mismo modo con los usuarios](#requisito-10-los-administradores-tendrán-un-panel-que-les-permita-modificar-borrar-o-añadir-contenido-a-la-página-y-del-mismo-modo-con-los-usuarios)
       - [REQUISITO 11: Para acceder al contenido tendrán que clickear en una tarjeta y les mostrará la foto, descripción, valoración y comentarios](#requisito-11-para-acceder-al-contenido-tendrán-que-clickear-en-una-tarjeta-y-les-mostrará-la-foto-descripción-valoración-y-comentarios)
- [DESPLIEGUE](#despliegue)
- [HERRAMIENTAS](#herramientas)
- [LENGUAJES](#lenguajes)
- [PRODUCTO](#producto)
  - [Zona Administrador](#zonaadmin)  
    - [Página de Login (sin código)](#página-de-login-sin-código)
    - [Página de Login (con código)](#página-de-login-con-código)
    - [Página de Recuperar Contraseña](#página-de-recuperar-contraseña)
    - [Página de Actualizar Contraseña](#página-de-actualizar-contraseña)
    - [Página de Inicio](#página-de-inicio)
    - [Página de Usuarios](#página-de-usuarios)
    - [Página de Publicaciones](#página-de-publicaciones)
    - [Página de Comentarios](#página-de-comentarios)
    - [Página de Valoraciones](#página-de-valoraciones)
    - [Página de Categorias](#página-de-categorías)
    - [Página de Mi Cuenta](#página-de-mi-cuenta)
  - [Página Web](#página-web)
    - [Página Inicio](#página-inicio)
    - [Página Registro](#página-registro)
    - [Página detalles (sin login)](#página-detalles-sin-login)
    - [Página detalles (con login)](#página-detalles-con-login)
    - [Página Recuperar Contraseña](#página-recuperar-contraseña)
    - [Página Actualizar Contraseña](#página-actualizar-contraseña)
  - [Zona Usuario](#zonausuario)
    - [Mis Publicaciones](#mis-publicaciones)
    - [Mis Comentarios](#mis-comentarios)
    - [Mis Valoraciones](#mis-valoraciones)
    - [Mi Cuenta](#mi-cuenta)
- [BIBLIOGRAFÍA](#bibliografía)

# TÍTULO DE PROYECTO
## Antecedentes

Este proyecto muestra todos los pasos a seguir para recolectar, organizar, tratar y construir un portal Web empezando desde cero, para montar una página web como si fuera un “foro” para comentar diversos temas y valorar sobre ellos.
He optado por un diseño más gráfico que de texto ya que por experiencia personal un foro normal llega a ser tedioso si hay demasiadas páginas junto al texto (como la combinación de colores negros con letra blanca que acaba cansando la vista), por eso prefiero organizarlo por imágenes, facilitando la búsqueda del tema y ver el texto más cómodamente.

Se han utilizado distintos lenguajes de programación, como pueden ser PHP y JavaScript para su desarrollo, y para su diseño se ha hecho uso de estilos CSS y de librerías como Boostrap que nos facilita la creación de diseño responsive, columnas o cualquier recurso que necesitemos.

# REQUISITOS

Queremos crear una página que mantenga la esencia de un foro que nos permita publicar, comentar y realizar acciones en ella de manera sencilla para la mayoría de los usuarios.

También queremos permitir que el Usuario pueda filtrar sus publicaciones, valoraciones o comentarios que ha realizado para encontrarlos rápidamente y poder realizar modificaciones o eliminaciones.

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
- Zona Administrador: Solo podrán acceder los usuarios con rol Administrador, tienen control de todo el contenido de la página (publicaciones, comentarios, valoraciones y usuarios), pueden crear sus propias publicaciones, comentarios, valoraciones e insertar usuarios así como borrar los datos de todos los usuarios.

- Mapa Web Zona Administrador:

![156462259-93005acf-516e-403c-90ef-d502807a9093](https://user-images.githubusercontent.com/55547053/157489731-67e00258-f79b-4dbd-82f5-a47d3feb3762.jpg)

- Página Web y Zona Usuario: Se permite a los usuarios no registrados acceder a los detalles de las publicaciones, pero si no inician sesión no podrán comentar, valorar y tampoco tendrán acceso a sus publicaciones, comentarios, valoraciones ni acceder a su cuenta.

- Mapa Web Página Web y Zona Usuario:

![Mapa Web Usuario](https://user-images.githubusercontent.com/55547053/157490285-ffb9c68c-d7c0-4758-8a77-067881347ba4.jpg)

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

La palabra "Ask" se ha usado el rojo para destacarla como primer nombre y el azul junto al verde en la Tierra para simbolizarla como la misma formando así "AskWorld" 

### Justificación de diseño del logo

La Tierra simboliza la globalidad de las personas que pueden usar la página, es decir, que cualquier persona desde cualquier parte del mundo podrán consultar sus dudas, participar en las publicaciones de los demás usuarios valorando o comentando sobre ellas asi como crear sus propias publicaciones.

## Planificación de tareas

![Tareas](https://user-images.githubusercontent.com/55547053/149335962-de16e85d-d82a-4f9f-9b4d-904e3cd23e96.jpg)

## Base de datos
### Diseño Entidad Relación de la BBDD

**Nota:** No he añadido los campos de las tablas para simplificar el modelo Entidad-Relación.

![Diseño Entidad Relación de la BBDD](https://user-images.githubusercontent.com/55547053/157253583-f5cc8078-8012-486e-9256-f2b15ac6d312.png)

### Modelo relacional BBDD

![Modelo Relacional BBDD](https://user-images.githubusercontent.com/55547053/155227960-844b9623-c924-4b0e-812b-7073c4da834f.png)

### Script de creación BBDD

#### Database

```
CREATE DATABASE  IF NOT EXISTS `askworld` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `askworld`;

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
```

#### Categoría

```
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
```

#### Comentarios

```
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
```

#### Publicaciones

```
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
```

#### Usuarios

```
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
```

#### Valoración

```
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
```

### Consultas 

Las consultas a continuación se utilizan para todas las tablas del proyecto (Categoría, Comentarios, Publicaciones, Usuarios y Valoración) y se pondrá ejemplos distintos para explicar su funcionamiento.

#### Seleccionar:

Si queremos mostrar todos los datos de los usuarios que tenemos registrados usaremos: `SELECT * FROM 'usuarios';`

Si necesitamos solo unos datos o mostrar datos de un usuario en concreto utilizamos una condición: `SELECT * FROM usuarios WHERE ('Email' = '$email');`

#### Insertar:
Se utiliza `INSERT INTO` para insertar datos a la BD.

**Ejemplo:** `INSERT INTO categoria ('NombreCategoria') VALUES ('$nombreCategoria');`

#### Modificar:
Para modificar datos se utiliza `UPDATE **tabla** SET **datos**` y también mediante su ID.

**Ejemplo:** `UPDATE publicaciones SET 'idCategoria' = '$idCategoria', 'NombrePublicacion' = '$nombrePublicacion', 'DescripcionPublicacion' = '$descripcionPublicacion', 'FechaPublicacion' = '$fechaPublicacion', 'ImagenPublicacion' = '$imagenPublicacion' WHERE ('idPublicacion' = '$idPublicacion');`

#### Eliminar:
Para eliminar datos de la BD se utiliza `DELETE FROM` junto al ID que queremos eliminar.

**Ejemplo:** `DELETE FROM valoracion WHERE ('idValoracion' = '$idValoracion');`

## Validación de formularios

Para valir los formularios del proyecto utilizaremos Javascript. Se ha utilizado el mismo funcionamiento del script para cada uno de los casos que necesitemos (usuarios, login, registro...) pero separados por archivos para cada caso. Tanto la zonaAdmin como la zonaUsuario tiene scripts y se ha hecho diferentes pruebas con expresiones regulares para evitar escribir contenido no permitido en ciertos campos (por ejemplo que no se pueda usar números en el nombre) y evitar que el botón submit funcione si los campos o un solo campo esté incorrecto. Se adjunta imágenes de los diferentes formularios (se evita repetir formularios que funcionan igual como insertar Usuario con registro).

**Nota:** Algunos datos como la contraseña, DNI y población no pueden ser modificados.

**Formularios de la página:** 

Login: 

![Login](https://user-images.githubusercontent.com/55547053/156065309-931ddb1d-c679-48bb-b7e2-04473d0839d3.png)

Registro:

![Registro](https://user-images.githubusercontent.com/55547053/156065584-467cd22c-3dc6-4e96-929b-407af67854f2.png)

Insertar categorías: 

![Insertar Categoria](https://user-images.githubusercontent.com/55547053/156065864-fdc1999f-d90e-4cb3-a375-61ddc634f0a7.png)

Insertar Comentaios: 

![Insertar Comentario](https://user-images.githubusercontent.com/55547053/156065998-7a33b03e-d43b-43c8-b9d2-db9c7ed3bfe7.png)

Insertar Publicaciones: 

![Insertar Publicacion](https://user-images.githubusercontent.com/55547053/156066271-e34ab616-404b-490f-b44e-367096f27b15.png)

Modificar cuenta: 

![Modificar Cuenta](https://user-images.githubusercontent.com/55547053/156066392-175fcb8e-881a-499e-8ca6-d369bd57beb4.png)

Recuperar contraseña:

![Recuperar Password](https://user-images.githubusercontent.com/55547053/156066636-b7305718-2e52-43f3-97d2-d9e4cc3680bf.png)

Actualizar contraseña:

![Nueva Password](https://user-images.githubusercontent.com/55547053/156066620-f9a7db20-8d21-42e1-a9a9-6104f68e33df.png)

**Imagen del funcionamiento del script:** 

![Script](https://user-images.githubusercontent.com/55547053/156067086-8dcf49f4-839e-42b1-92e7-712ca649ddb1.png)

## Proceso de carga

Descripción del proceso de carga de vuestra aplicación. Por ejemplo:

> Al introducir la URL proyecto.com en el navegador, el fichero “index.php” carga la plantilla, dependiendo del idioma (Esp, Eus o Ing), cargará una plantilla u otra, por defecto “plantillaEsp.html”.
> 
> El proceso se muestra en el siguiente diagrama:
>
>![ProcesoDeCarga](Imagenes/ProcesoDeCarga.png)

## Jerarquía de directorios

![Directorios](https://user-images.githubusercontent.com/55547053/156375756-ead4f5db-fbfc-4d43-8858-b55c853ff9db.JPG)

### Contenido directorios

Breve explicación de lo que tenemos contenido en cada directorio. Por ejemplo:

> `./` -> Contiene los ficheros principales “index.php”, detallesPublicación” que serán las encargadas de mostrar el contenido de la página y los detalles de una publicación.
> 
> `img` -> Contiene las imágenes que se utilizan en los formularios, las de los usuarios y las de las publicaciones.
> 
> `Includes` -> Contiene el header y footer que cambiará de manera dinámica según el estado de la sesión y también contiene el sidebar que carga las categorías de las publicaciones.
> 
> `js` -> Contiene los archivos javascript para validar los formularios.
> 

Explicación directorios zonaAdmin
>`zonaAdmin` -> Contiene los ficheros Index.php y login.php. Al entrar cargará directamente el archivo login.php ya que debemos iniciar sesión para poder acceder al index.php
>  
> `administrar` -> Contiene los archivos php que utilizaremos para crear, editar y eliminar las categorías, usuarios, valoraciones, publicaciones y comentarios de la página.
>
> `includes` -> Contiene el header y footer y también los archivos DAO con las consultas que necesitaremos.
> 
> `librerias` -> Contiene los framework bootstrap, jquery y PHPMailer.
> 
> `sesion` -> Contiene los archivos php que se encargan de comprobar datos del login, modificar datos, eliminar cuenta, crear la sesión, recuperar y actualizar contreaseña y cerrar la sesión.

Explicación directorios zonaUsuario
> 
> `comentarios` -> Contiene los archivos php que utilizaremos para editar y eliminar nuestros comentarios.
>
> `cuenta` -> Contiene los archivos php para modificar o eliminar cuenta.
> 
> `includes` -> Contiene el header y footer.
> 
> `publicaciones` -> Contiene los archivos php que utilizaremos para crear, editar y eliminar nuestras publicaciones.
> 
> `recuperacion` -> Contiene los archivos php que se encargan de recuperar nuestra contraseña por correo y actualizar la contraseña.
> 
> `sesion` -> Contiene los archivos php que se encargan de crear y cerrar la sesion.
> 
> `valoraciones` -> Contiene los archivos php que utilizaremos para editar y eliminar nuestras valoraciones.
> 

## Diseño de la interface

En base al apartado [Prototipo web y boceto de la estructura](#prototipo-web-y-boceto-de-la-estructura) describimos el contenido de la interface de nuestra aplicación. Por ejemplo:

> El sitio web consta de tres partes fundamentales. Esta estructura es común en todas las páginas que forman el sitio web.
> 
> **Header**: Contiene el logo de la empresa, que es "AskWorld". También contiene la barra de navegación para ir a las páginas que cambiarán dinámicamente si el usuario inicia sesión.
> 
> **Sin iniciar sesión:** Inicio, Iniciar Sesión, Registrarme y Recuperar Contraseña.
> 
> **Iniciando sesión:** Inicio, Mis publicaciones, Mis comentarios, Mis valoraciones, Mi cuenta y salir
> 
>**Contenido body**: Se actualizará acorde a la página que visitemos, si miramos una publicación mostrará sus datos, si vamos a nuestra cuenta mostrará nuestros datos como usuario y así con las demás.
> 
>**Footer:** Encontraremos la sección del usuario con las páginas que se encuentran en el header y también las cinco publicaciones más recientes.
>

### Estructura gráfica de la interface

#### Zona Administrador

Esta estructura es la misma para todas las páginas.

![148785564-9a0f246a-0cdf-4ac9-918e-e6359da98cbc](https://user-images.githubusercontent.com/55547053/157492195-e118261c-dad6-481e-870e-af4b2888f17b.jpg)

#### Página Web y Zona Usuario

Esta estructura es únicamente para la página index.

![149360500-6b31a531-927e-4428-9c0b-42431481f382](https://user-images.githubusercontent.com/55547053/157492877-7c3c843e-2a13-4ab4-8791-909c231698d6.jpg)

Esta estructura es la misma para todas las páginas.

![149156064-105cf728-d9ad-4d8e-87ce-1ffa6949110d](https://user-images.githubusercontent.com/55547053/157493170-15971bd1-0b8a-46d1-9733-278e97717b04.jpg)

# IMPLEMENTACIÓN

Descripción detallada de cada requisito, incluyendo su funcionamiento, validaciones si fuesen necesarias, y cualquier información relevante.

## REQUISITO 1: Diseño responsive - Conseguido

Cada vez hay mas usuarios de Internet que utilizan dispositivos móviles para navegar. Si nos fijamos en la analítica de nuestra web, nos damos cuenta que cada vez hay un gran numero de visitas que provienen de dispositivos móviles, por lo que las resoluciones a las cuales vemos nuestro desarrollo son diferentes.

La principal necesidad que existe para hacer un diseño «adaptable», es porque se pierden bastantes visitantes, al no tener el site adaptable a todos.

### Funcionamiento

Para incluir un diseño responsive en la WEB se ha empleado el framework Bootstrap.

### Ejemplo de código

Para la página de publicaciones se ha empleado el siguiente código:

```

<div class="col-md-3">

```

Para entender el funcionamiento de esta línea de código debemos tener en mente que tenemos 12 columnas que podemos ocupar en la página, indicando que queremos 3 nos permite coger hasta 4 más para colocar por ejemplo botones, tarjetas... y con md (existen mas tamaños) indicamos que si un dispositivo tiene una determinada pantalla (un móvil) queremos que se adapte a su dispositivo (logrando así el diseño responsive).

## REQUISITO 2: Control de errores en formularios - Conseguido

Necesitamos evitar que se pueda introducir cualquier tipo de dato así como datos erróneos en los formularios (por ejemplo escribir números en el nombre) y mediante iconos y mensajes de error ayudar al usuario en los mismos.

### Funcionamiento

Para incluirlo se ha empleado JavaScript y el framework Bootstrap.

### Ejemplo de código

```

function validarNombre() {
  const nombre = document.querySelector('#nombreCategoria');
  const expresion = /^[a-zA-Z á é í ó ú 0-9]{4,20}$/;
  if (expresion.test(nombre.value)) {
    nombre.classList.remove('is-invalid');
    nombre.classList.add('is-valid');
    return true;
  } else {
    nombre.classList.add('is-invalid');
    nombre.classList.remove('is-valid');
    return false;
  }
}

```

## REQUISITO 3: Acceso restringido a usuarios no registrados - Conseguido

No queremos que los usuarios no registrados tengan acceso a funciones de un usuario registrado como por ejemplo acceder a sus publicaciones.

### Funcionamiento

Para incluirlo se ha utilizado PHP.

### Ejemplo de código

```

<?php
    
    if(!isset($_SESSION['Usuario'])){
        
        echo "<script>alert('Debes iniciar sesión para entrar aquí.')</script>";

        echo "<script>window.open('../sesion/login.php','_self')</script>";
        
    }else{
?>

```

Lo que hace este código es que si detecta que la sesión no se ha creado y por tanto no encuentra el campo Usuario nos echará de la página llevándonos al Login.

## REQUISITO 4: Que solo los usuarios registrados puedan comentar y valorar positivamente o negativamente sobre el tema - Conseguido

Solo podrán hacerlo los registrados ya que de esta manera incentivamos a que los usuarios se registren.

### Funcionamiento

Para incluirlo se ha empleado PHP y HTML.

### Ejemplo de código

```

<form name="formularioValorar" method="POST">
	<p class="clasificacion text-center">
		<input onclick="this.form.submit()" id="rat5"  name="rate" value="5" type="radio" class="star"<?php if ($media==5) echo "checked='checked'"; ?>/>

		<label class="star" for="rat5"></label>
		<input onclick="this.form.submit()" id="rat4"  name="rate" value="4" type="radio" class="star"<?php if ($media==4) echo "checked='checked'"; ?>/>
						
		<label class="star" for="rat4"></label> 
		<input onclick="this.form.submit()" id="rat3"  name="rate" value="3" type="radio" class="star"<?php if ($media==3) echo "checked='checked'"; ?>/>

		<label class="star" for="rat3"></label>
		input onclick="this.form.submit()" id="rat2"  name="rate" value="2" type="radio" class="star"<?php if ($media==2) echo "checked='checked'"; ?>/>

		<label class="star" for="rat2"></label> 
		<input onclick="this.form.submit()" id="rat1" name="rate" value="1" type="radio" class="star"<?php if ($media==1) echo "checked='checked'"; ?>/>

		<label class="star" for="rat1"></label>
	</p>
</form>

```

Mediante un input y una función al tocar una estrella de la valoración se insertará la escogida, si volviesemos a valorar se actualizaría con la nueva.

## REQUISITO 5: Los usuarios sin registrar tendrán acceso al contenido pero no podrán comentar ni valorar - Conseguido

Igual que en el acceso restringuido queremos evitar que puedan valorar y comentar publicaciones. Pero no por ello queremos que no puedan acceder al contenido, es decir, podrán visualizar todos los datos como son la descripción de la publicación, los comentarios, la valoración... pero no podrán interactuar.

### Funcionamiento

Para incluirlo se ha empleado PHP.

### Ejemplo de código

```

<div align="center">
	<div class="form-floating">
		h3>Para comentar necesita una cuenta</h3>
		<div class="form-group">
			<div class="col-12">
			<br>
				<a style="color: white; text-decoration:none;" href="login.php" class="btn btn-lg btn-success"><i class="fas fa-sign-in-alt"></i>  Iniciar Sesión</a>
				<a style="color: white; text-decoration:none;" href="registro.php" class="btn btn-lg btn-danger"><i class="fas fa-user-plus"></i> Registrarme</a>  
			</div>
		</div>
	</div>
</div>

```

A diferencia de como evitamos acceder a las páginas de un usuario registrado, en este caso lo tenemos al contrario. Si existiera la sesión nos dejaría en este caso comentar, en caso contrario nos aparecerá el mensaje indicado dándo la opción de registrarse o iniciar sesión.

## REQUISITO 6: Solo los administradores pueden añadir los temas a tratar (foto, descripción, categoría, etc) - Conseguido

Queremos que los usuarios administradores sean los únicos en añadir publicaciones y categorías en la página.

### Funcionamiento

Para incluirlo se ha empleado PHP.

### Ejemplo de código

Se emplearía consultas dependiendo de los datos a insertar.

## REQUISITO 7: Añadir filtros para poder ordenar por categoría - Conseguido

Queremos que los usuarios puedan filtrar las publicaciones a sus intereses y por tanto al acceder a una categoría solo mostrará publicaciones pertenecientes a la misma.

### Funcionamiento

Para incluirlo se ha empleado PHP.

### Ejemplo de código

```
	if($_GET['categoria']==$row_publicaciones['idCategoria']){
                                
		//Consulta de publicaciones
                $idPublicaciones = $row_publicaciones['idPublicacion'];

                $get_publicaciones_id = mostrarPublicacionesPorID($conexion, $idPublicaciones);

                $row_publicaciones_id = mysqli_fetch_assoc($get_publicaciones_id);
                                            
                $publicaciones_id = $row_publicaciones_id['idPublicacion'];

                $publicaciones_nombre = $row_publicaciones_id['NombrePublicacion'];

                $publicaciones_img = $row_publicaciones_id['ImagenPublicacion'];

                $imagen = str_replace("../", "", $publicaciones_img);
                                                                            
                //Consulta de categorias
                $idCategorias = $row_publicaciones_id['idCategoria'];

                $get_categorias = mostrarCategoriasPorID($conexion, $idCategorias);

                $row_categorias = mysqli_fetch_assoc($get_categorias);
                                            
                $categorias_id = $row_categorias['idCategoria'];
                                            
                $categorias_nombre = $row_categorias['NombreCategoria'];
                                        
                echo "
                                        
                	<div class='col-md-4 col-sm-6 center-responsive'>
                                    
                        	<div class='product'>
                                        
                                        <p class='bg-warning text-center text-uppercase' style=' border: 2.0px solid black'>$categorias_nombre</p>
                    
                                        <img class='img-thumbnail' style='border: 2.5px solid black' src='$imagen'>
                                            
                                        <div>
                                            
                                            <div class='text'>
                                                    
                                                <h4 class='text-center'>
                                                    
                                                    <strong>$publicaciones_nombre</strong>
                                                    
                                                </h4>

                                                <p>
                                                    
                                                    <a class='btn btn-success' href='detallesPublicacion.php?publicacion=$idPublicaciones'>
                                                            
                                                        Ver Detalles
                                                                
                                                    </a>

                                                </p>

                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                        
                                </div>
                                
                            ";
                          }

```

## REQUISITO 8: Cada usuario tendrá su perfil para modificar sus datos (nombre, apellidos, correo, etc) - Conseguido Parcialmente

Queremos que el usuario pueda modificar sus datos y por tanto necesita un perfil.

Se ha conseguido parcialmente debido a un error a la hora de guardar la contraseña, si el usuario no introducía la anterior o una nueva, la contraseña original se volvía a cifrar haciendo así que no pudiera ser modificada y por tanto ha tenido que pasar a ser un dato de solo lectura en página de mi cuenta.

### Funcionamiento

Para incluirlo se ha empleado PHP.

### Ejemplo de código

```

//Si el usuario elige una foto nueva se borrará la anterior, en caso contrario se mantendrá la original.
	if ($_FILES["img"]["name"] != '') {
		
		if(is_uploaded_file($_FILES["img"]["tmp_name"])) {
			
			$ruta= "../../img/usuarios/".$_FILES["img"]["name"];
			
			move_uploaded_file($_FILES["img"]["tmp_name"], $ruta);
			
			echo "<script>alert('Actualizando la cuenta...')</script>";
			
			unlink($Imagen);
			
			$consulta = ActualizarUsuario($conexion, $usuario, $nombre, $apellido1, $apellido2, $email, $ruta, $fecha, $direccion, $telefono, $provincia, $poblacion, $idUsuario);
			
			echo "<script>alert('La cuenta se ha actualizado correctamente.')</script>";

			echo "<script>window.open('perfil.php','_self')</script>";

		} else {
			
			echo "<script>alert('No se puede actualizar tu cuenta.')</script>";
			
			echo "<script>window.open('perfil.php','_self')</script>";
		}

```

## REQUISITO 9: En la noticia aparecerá la foto, descripción, comentarios y valoración - Conseguido

Queremos que al acceder a una publicación aparezcan los datos correctos de cada una.

### Funcionamiento

Para incluirlo se ha empleado PHP.

### Ejemplo de código

```

<?php

	//Recogemos el ID de la URL
	$idURL = $_GET['publicacion'];

	$get_publicacion = mostrarPublicacionesPorID($conexion, $idURL);

	$row_publicacion = mysqli_fetch_assoc($get_publicacion);

	$idPublicacion = $row_publicacion['idPublicacion'];

	$nombrePublicacion = $row_publicacion['NombrePublicacion'];

	$descripcionPublicacion = $row_publicacion['DescripcionPublicacion'];

	$fechaPublicacion = $row_publicacion['FechaPublicacion'];

	$imagenPublicacion = $row_publicacion['ImagenPublicacion'];

	//Eliminamos la ruta antigua de la imagen
	$imagen = str_replace("../", "", $imagenPublicacion);

	//Consulta de usuarios: Necesitamos el nombre para mostrarlo.
    	$id_Usuario =  $row_publicacion['idUsuario'];

	$get_usuarios = mostrarUsuariosPorID($conexion, $id_Usuario);

	$row_usuarios = mysqli_fetch_assoc($get_usuarios);

	$nombreUsuario = $row_usuarios['Usuario'];

	//Consulta de categorías: Necesitamos el nombre para mostrarlo.
	$id_categoria =  $row_publicacion['idCategoria'];

	$get_categorias = mostrarCategoriasPorID($conexion, $id_categoria);

	$row_categorias = mysqli_fetch_assoc($get_categorias);

	$nombreCategoria = $row_categorias['NombreCategoria'];

	//Si la publicacion coincide con el ID mostrará el contenido, sino nos devolverá al index.
	if($_GET['publicacion']=="$idPublicacion"){

?>

```

## REQUISITO 10: Los administradores tendrán un panel que les permita modificar, borrar o añadir contenido a la página y del mismo modo con los usuarios - Conseguido

Necesitamos que un usuario administrador tenga acceso a todo el contenido de la página (publicaciones, usuarios, categorías...) y pueda insertar, modificar o eliminar cualquiera de ellas. Para ello tendrán diferentes páginas con tablas que muestren los datos y tendrán botones para insertar, editar y eliminar.

### Funcionamiento

Para incluirlo se ha empleado PHP.

### Ejemplo de código

```

<div class="row">
	<div class="col-sm-12">
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered table-sm" id="TablaCategorias">
				<thead>
					<tr style="text-align: center; border: black 1px solid; background: orange">
						<td>#</td>
						<td>Nombre</td>
						<td>Editar</td>
						<td>Eliminar</td>
					</tr>
				</thead>
				<tbody>
					<?php
						//Contador
						$i=0;

    						$consulta = mostrarCategorias($conexion);
    					
						//Recorreremos la tabla de las categorias y mostraremos sus datos
	                   			while($mostrar = mysqli_fetch_array($consulta)) {

	                    				$id_categoria = $mostrar['idCategoria'];

							//Aumentamos el contador
							$i++;
                			?>
					<tr style="text-align: center;">
						<td><strong><?php echo $i; ?></strong></td>
						<td><strong><?php echo $mostrar['NombreCategoria'] ?></strong></td>
						<td>
							<a class="btn btn-warning btn-sm" href="editarCategoria.php?id=<?php echo $id_categoria; ?>">
								<span class="fas fa-edit"></span>
							</a>
						</td>
						<td> 
							<a class="btn btn-danger btn-sm" onClick="return confirm('¿Estas seguro de que quieres eliminar esta categoría?');" href="eliminarCategoria.php?id=<?php echo $id_categoria; ?>">
								<span class="fas fa-trash-alt"></span>
							</a> 
						</td>
					</tr>
					<?php
                		}
                	?>
				</tbody>
			</table>
		</div>
	</div>
</div>

```

## REQUISITO 11: Para acceder al contenido tendrán que clickear en una tarjeta y les mostrará la foto, descripción, valoración y comentarios - Conseguido

Para acceder al contenido de una publicación será necesario darle al botón ver detalles.

### Funcionamiento

Para incluirlo se ha empleado PHP.

### Ejemplo de código

```

echo "
                                    
                            <div class='col-md-4 col-sm-6 center-responsive'>
                                
                                <div>

                                    <p class='bg-warning text-center text-uppercase' style=' border: 2.0px solid black'>$categorias_nombre</p>
                        
                                    <img class='img-thumbnail' style='border: 2.5px solid black' src='$imagen'>
                                            
                                    <div>
                                            
                                        <div>
                                                    
                                            <h4 class='text-center'>
                                                    
                                                $publicaciones_nombre
                                                    
                                            </h4>
                                                    
                                            <p>
                                                    
                                                <a class='btn btn-success' href='detallesPublicacion.php?publicacion=$idPublicaciones'>
                                                        
                                                    Ver Detalles
                                                            
                                                </a>
                                                    
                                            </p>
                                                
                                        </div>
                                            
                                    </div>
                                    
                                </div>
                                        
                            </div>
                                  
                            ";

```

# Requisitos no contemplados

## REQUISITO 12: Los usuarios registrados pueden crear publicaciones - Conseguido

Queremos darle un privilegio más a los usuarios que se registran en nuestra web, por tanto, los usuarios registrados podrán crear sus propias publicaciones y se les permitirá editarlas, borrarlas y demás.

### Funcionamiento

Para incluirlo se ha empleado PHP.

# PRUEBAS

## Metodología de las pruebas

Se realiza de manera manual para comprobar que se cumplen los requisitos especificados, por tanto, no se realizan pruebas unitarias, se realizan pruebas de integración trabajando sobre el código directamente.

### REQUISITO 1: Diseño Responsive

```

Se emplea la herramienta para desarrolladores de Google y se confirma que la página se adapta al dispositivo.

```

### REQUISITO 2: Control de errores en formularios

```

Se emplea diferentes pruebas de datos (ej: números en el nombre) y se confirma que se impide la entrega del formulario si 1 campo o varios son incorrectos.

```

### REQUISITO 3: Acceso restringido a usuarios no registrados

```

Se intenta acceder desde la URL a páginas restringidas sin iniciar sesión y se confirma que impide el acceso.

```

### REQUISITO 4: Que solo los usuarios registrados puedan comentar y valorar positivamente o negativamente sobre el tema

```

Se confirma al iniciar sesión que el botón de valoración y el textarea para comentar aparecen y funcionan correctamente.

```

### REQUISITO 5: Los usuarios sin registrar tendrán acceso al contenido pero no podrán comentar ni valorar

```

Se confirma al acceder sin iniciar sesión que aparece todos los datos de la publicación pero no aparece el botón de valoración ni el textarea para comentar.

```

### REQUISITO 6: Solo los administradores pueden añadir los temas a tratar (foto, descripción, categoría, etc)

```

Se prueban diferentes inserciones (categorías, publicaciones, usuarios...) y se confirma que funciona.

```

### REQUISITO 7: Añadir filtros para poder ordenar por categoría

```

Se confirma que al acceder a una categoría se filtran las publicaciones.

```

### REQUISITO 8: Cada usuario tendrá su perfil para modificar sus datos (nombre, apellidos, correo, etc)

```

Se prueban diferentes cambios de datos y se confirma que se aplican correctamente.

```

### REQUISITO 9: En la noticia aparecerá la foto, descripción, comentarios y valoración

```

Se prueba acceder a diferentes publicaciones y se confirma que aparecen los campos correctamente.

```

### REQUISITO 10: Los administradores tendrán un panel que les permita modificar, borrar o añadir contenido a la página y del mismo modo con los usuarios

```

Se prueba insertar, modificar y eliminar diferentes datos y se confirma que funcionan correctamente.

```

### REQUISITO 11: Para acceder al contenido tendrán que clickear en una tarjeta y les mostrará la foto, descripción, valoración y comentarios

```

Se prueba el botón ver detalles para acceder a una publicación y se confirma que accede correctamente a la publicación.

```

# DESPLIEGUE

## Variables de entorno

> USERDB="root"
> 
> PASSDB="root"
> 
> HOST=$(hostname -I)
> 
> WWW="/var/www/html/"
> 

## Nombre del fichero de los datos en el proyecto 

> DATOS="datos.sql"
>
> BBDD="askworld"
>

## Se toman los parámetros como USER y PASS de la BBDD

>if [ $# = 2 ];
>
>then
>
   >USERDB=$1
   >
   >PASSDB=$2
   >
>fi
>

## Copiamos el contenido de la carpeta proyecto a la página html

> cp -r ../Codigo/ $WWW
> 

## Restauramos los datos de ejemplo a la BBDD

> mysqladmin -u $USERDB -p$USERDB create $BBDD
> 
> mysql -u $USERDB -p$USERDB $BBDD < ../DataBase/$DATOS
>

## Mostramos url de carga

> echo "http://$HOST/Codigo/AskWorld/index.php"
>

## Cambiamos los permisos de las carpetas que contienen las imágenes

> sudo chmod -R +777 /var/www/html/Codigo/AskWorld/img
> 

# HERRAMIENTAS

Descripción de todas las herramientas que se han usado para el desarrollo del proyecto.

> Para la realización del proyecto se han empleado las siguientes herramientas:
> ## Visual Studio Code
> 
> Es un editor de código fuente desarrollado por Microsoft para Windows, Linux, macOS y Web. Incluye soporte para la depuración, control integrado de Git, resaltado de sintaxis, finalización inteligente de código, fragmentos y refactorización de código.
> 
> ### Características
> 
> Se ha utilizado como editor de texto.
> 

> ## MAMP
> 
> El acrónimo MAMP se refiere al conjunto de programas software comúnmente usados para desarrollar sitios web dinámicos sobre sistemas operativos Apple Macintosh, MAC OS X. - macOS: Sistema operativo. - Apache: Servidor Web. - MySQL: Sistema de gestión de bases de datos.
> 
> ### Características
> 
> Se ha utilizado como servidor Apache y como soporte para MySQL Workbench para la BD.
> 

> ## MySQL Workbench
> 
> MySQL Workbench es una herramienta visual de diseño de bases de datos que integra desarrollo de software, administración de bases de datos, diseño de bases de datos, gestión y mantenimiento para el sistema de base de datos MySQL.
> 
> ### Características
> 
> Creación de la BD y gestionarla. 
> 

> ## OVA Lamp
> 
> **OVA** es un Objeto Virtual de Aprendizaje, que algunas empresas ponen en funcionamiento y suben a internet para ser usadas. 
> 
> **LAMP:** es el acrónimo usado para describir un sistema de infraestructura de internet que usa las siguientes herramientas: Linux, Apache, MySQL/MariaDB y PHP.
> 
> ### Características
> 
> Se utiliza como máquina de pruebas de nuestro proyecto para instalar el SCRIPT de despliegue y probar el despliegue de nuestra aplicación.
> 


# LENGUAJES

Descripción de los lenguajes y frameworks utilizados para el desarrollo del proyecto. Por ejemplo:

> ## HTML
> 
> Es un estándar que sirve de referencia del software que conecta con la elaboración de páginas web en sus diferentes versiones, define una estructura básica y un código (denominado código HTML) para la definición de contenido de una página web, como texto, imágenes, videos, juegos, entre otros.
> 
> ### Características
> 
> Utilizado para crear las páginas de nuestra web. 

> ## PHP
> 
> Es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web.
> 
> ### Características
> 
> 

> ## JavaScript
> 
> Es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos, basado en prototipos, imperativo, débilmente tipado y dinámico.
> 
> ### Características
> 
> Se utiliza para validar los formularios. 
> 

> ## Bootstrap
> 
> Es una biblioteca multiplataforma o conjunto de herramientas de código abierto para diseño de sitios y aplicaciones web.
> 
> ### Características
> 
> Se ha utilizado para crear el diseño de la página y el diseño responsive.

> ## PHPMailer
> 
> Es una biblioteca de códigos para enviar correos electrónicos de forma segura y sencilla a través de código PHP desde un servidor web.
> 
> ### Características
> 
> Se utiliza para mandar correos al correo del usuario.

# PRODUCTO

## ZonaAdmin

### Página de Login (sin código)

![Login 1](https://user-images.githubusercontent.com/55547053/156387699-9322af73-6724-4a28-b31c-d23ee7373049.png)

### Página de Login (con código)

![Login 2](https://user-images.githubusercontent.com/55547053/156387725-50d07746-f021-4734-85c1-dfa7b7f14789.png)

### Página de Recuperar Contraseña

![Recuperar Contraseña](https://user-images.githubusercontent.com/55547053/156388158-3050238a-fe20-4357-8348-b10dac799311.png)

### Página de Actualizar Contraseña

![Actualizar Contraseña](https://user-images.githubusercontent.com/55547053/156388180-8dbcb32d-8b8f-404f-b05b-935b47f9af89.png)

### Página de Inicio

![Pagina Inicio Admin](https://user-images.githubusercontent.com/55547053/156388373-6ed139b9-148a-45fd-aa78-45cd037b9280.png)

### Página de Usuarios

![Pagina de Usuarios](https://user-images.githubusercontent.com/55547053/156389136-1db55cd3-b37c-425e-be46-02479bc0bfa4.png)

### Página de Publicaciones

![Pagina de Publicaciones](https://user-images.githubusercontent.com/55547053/156389417-c003d8cb-c8de-463f-9583-62aac0fa872a.png)

### Página de Comentarios

![Pagina de Comentarios](https://user-images.githubusercontent.com/55547053/156391094-4be3c28a-ed0a-4517-aa32-1f7523b375e1.png)

### Página de Valoraciones

![Pagina de Valoraciones](https://user-images.githubusercontent.com/55547053/156391116-4874c741-ca59-4ac9-9d4a-6aff10dd6f4f.png)

### Página de Categorías

![Pagina de Categorías](https://user-images.githubusercontent.com/55547053/156391131-8bbbad89-64be-47ad-ad50-3ca4b3f8fbc4.png)

### Página de Mi Cuenta

![Pagina de mi cuenta](https://user-images.githubusercontent.com/55547053/156391164-fe2646c2-4f4b-4511-9da7-c2eb77ef80e2.png)

## Página Web

### Página inicio

![Página Inicio](https://user-images.githubusercontent.com/55547053/156410230-07b96298-4ab8-41a4-97f5-5bf0200bedd7.png)

### Página Registro

![Registro](https://user-images.githubusercontent.com/55547053/156467409-41dc7e3c-2390-41a9-b857-8e656aa6af15.png)

### Página detalles (sin login)

![Página detalles 1](https://user-images.githubusercontent.com/55547053/156410247-aa4a4faf-b03f-4ede-b1fd-fbb9ed11ede7.png)

### Página detalles (con login)

![Página detalles 2](https://user-images.githubusercontent.com/55547053/156410271-1c58cbbf-d3da-49c1-bbde-3f39a6fa4983.png)

### Página Recuperar Contraseña

![Recuperar Contraseña](https://user-images.githubusercontent.com/55547053/156467651-7d5d99e8-3064-401c-a746-be57bcd6974b.png)

### Página Actualizar Contraseña

![Actualizar Contraseña](https://user-images.githubusercontent.com/55547053/156467641-60c105b5-ace6-47f8-b1b3-7e0acf9d3b09.png)

## ZonaUsuario

### Mis Publicaciones

![Mis publicaciones](https://user-images.githubusercontent.com/55547053/156468062-61c268ae-7f88-49ce-a2a2-6af753753d2a.png)

### Mis Comentarios

![Mis Comentarios](https://user-images.githubusercontent.com/55547053/156468074-15210a3d-0071-4ab6-9d40-324cf314bc79.png)

### Mis Valoraciones

![Mis Valoraciones](https://user-images.githubusercontent.com/55547053/156468080-1dc69aba-7c0b-4a67-886a-ad6da0420785.png)

### Mi Cuenta

![Mi cuenta](https://user-images.githubusercontent.com/55547053/156468088-fbfdaceb-cd97-4bef-90d0-3e4077e4e162.png)

# BIBLIOGRAFÍA

- Sistema de Comentarios: https://www.youtube.com/watch?v=EHca8OI8ez0
- Iconos: https://fontawesome.com/ 
- Iconos 2: https://icons.getbootstrap.com/
- Guía Bootstrap: https://getbootstrap.com/docs/5.1/getting-started/introduction/
- Tablas avanzadas: https://datatables.net/
- Tablas avanzadas (tutorial): https://youtu.be/o9NB7pH2i8U 
- Mantener imagen del usuario: https://es.stackoverflow.com/questions/125941/almacenar-nombre-y-ruta-de-imagen-para-actualizar-php
- No permitir repetir datos: https://www.youtube.com/watch?v=cbec05bEfwI
- Sistema de valoración: https://programandoamimanera.com/sistema-de-valoracion-de-opinion-de-usuarios-para-webs-con-php/
- Cifrar contraseña: https://www.w3schools.com/php/func_string_sha1.asp
- Validación Bootstrap: https://www.youtube.com/watch?v=U5CIeNEc5gY
