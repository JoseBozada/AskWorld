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

Queremos crear una página que mantenga la esencia de un foro que nos permita publicar, comentar y realizar acciones en ella de manera sencilla para la mayoría de los usuarios.
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
- Zona Administrador: Solo podrán acceder los usuarios Administradores de la página, tienen control de todo (publicaciones, comentarios y usuarios), pueden crear sus propias publicaciones así como borrar los datos de todos los usuarios.

- Mapa web:

![Mapa web admin](https://user-images.githubusercontent.com/55547053/149623156-7be0fab2-0ab2-4de7-85e4-bf0932a029a0.jpg)

- Página web y Zona Usuario: Se permite a los usuarios no registrados acceder a los detalles de las publicaciones, pero si no se registran o inician sesión no podrán comentar ni valorar y tampoco tendrán acceso a sus publicaciones, comentarios ni su cuenta.

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

La palabra "Ask" se ha usado el rojo para destacarla como primer nombre y el azul junto al verde en la Tierra para simbolizarla como la misma formando así "AskWorld" 

### Justificación de diseño del logo

La Tierra simboliza la globalidad de las personas que pueden usar la página, es decir, que cualquier persona desde cualquier parte del mundo podrán consultar sus dudas, participar en las publicaciones de los demás usuarios valorando o comentando sobre ellas asi como crear sus propias publicaciones.

## Planificación de tareas

![Tareas](https://user-images.githubusercontent.com/55547053/149335962-de16e85d-d82a-4f9f-9b4d-904e3cd23e96.jpg)

## Base de datos
### Diseño Entidad Relación de la BBDD

![Diseño Entidad Relación de la BBDD](https://user-images.githubusercontent.com/55547053/155618977-bd530084-8630-4855-b768-b06c3068ce86.png)

### Modelo relacional BBDD

![Modelo Relacional BBDD](https://user-images.githubusercontent.com/55547053/155227960-844b9623-c924-4b0e-812b-7073c4da834f.png)

### Script de creación BBDD

#### Database

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

#### Categoría

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

#### Comentarios

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

#### Publicaciones

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

#### Usuarios

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

#### Valoración

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

### Consultas 

Las consultas a continuación se utilizan para todas las tablas del proyecto (Categoría, Comentarios, Publicaciones, Usuarios y Valoración) y se pondrá ejemplos distintos para explicar su funcionamiento.

#### Seleccionar:

Si queremos mostrar todos los datos de los usuarios que tenemos registrados usaremos: **SELECT * FROM `usuarios`;**

Si necesitamos solo unos datos o mostrar datos de un usuario en concreto utilizamos: **SELECT * FROM usuarios WHERE (`Email` = '$email');**

#### Insertar:
Se utiliza INSERT INTO para insertar datos a la BD.

**Ejemplo:** INSERT INTO categoria (`NombreCategoria`) VALUES ('$nombreCategoria');

#### Modificar:
Para modificar datos se utiliza UPDATE **tabla** SET **datos** y también mediante su ID.

**Ejemplo:** UPDATE publicaciones SET `idCategoria` = '$idCategoria', `NombrePublicacion` = '$nombrePublicacion', `DescripcionPublicacion` = '$descripcionPublicacion', `FechaPublicacion` = '$fechaPublicacion', `ImagenPublicacion` = '$imagenPublicacion' WHERE (`idPublicacion` = '$idPublicacion');

#### Eliminar:
Para eliminar datos de la BD se utiliza DELETE FROM junto al ID que queremos eliminar.

**Ejemplo:** DELETE FROM valoracion WHERE (`idValoracion` = '$idValoracion');

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
