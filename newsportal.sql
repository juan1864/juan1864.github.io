-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2023 a las 19:53:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `newsportal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminUserName` varchar(255) DEFAULT NULL,
  `AdminPassword` varchar(255) DEFAULT NULL,
  `AdminEmailId` varchar(255) DEFAULT NULL,
  `userType` int(11) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `userType`, `CreationDate`, `UpdationDate`) VALUES
(5, 'admin', 'da721d9cbe43f9c43753223a9f784a6b', 'juan.baqueroo@uniagustiniana.edu.co', 1, '2022-12-12 18:30:00', '2023-11-09 19:05:03'),
(7, 'juan1864', 'da721d9cbe43f9c43753223a9f784a6b', 'juandiego1012-8@hotmail.com', 0, '2023-11-09 19:11:24', '2023-11-09 21:33:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(8, 'DEPORTES', 'Recreación, pasatiempo o ejercicio físico, por lo común al aire ', '2023-10-20 19:23:59', '2023-11-10 01:56:51', 1),
(9, 'AMBIENTAL', 'Uno de los términos que mejor definen y ejemplifican la importancia que tiene la conservación del medio ambiente y el impacto que esta protección tiene en todas las especies es el de \"comunidad ecológica\". No obstante, aunque todos nos podemos hacer una idea de qué significa este término, es importante que se profundice en comprenderlo bien para saber identificarlo correctamente y conocer los detalles que lo rodean. ', '2023-10-26 17:04:58', '2023-10-26 17:05:18', 1),
(10, 'OBRAS', 'Favorece la distribución de un territorio en torno a una obra que beneficiará a todos. Sostiene la organización social de una ciudad al establecer planes de construcción enfocados al futuro. Mejora las condiciones de vida de una comunidad.', '2023-10-26 17:06:14', NULL, 1),
(11, 'SALUD', 'La salud comunitaria es la expresión colectiva de la salud de una comunidad definida, determinada por la interacción entre las características de las personas, las familias, el medio social, cultural y ambiental, así como por los servicios de salud y la influencia de factores sociales, políticos y globales.', '2023-10-26 17:08:18', NULL, 1),
(12, 'COMUNIDAD', 'Comunidad es una corporación cívica sin ánimo de lucro compuesta por los vecinos de un lugar, que aúnan esfuerzos y recursos para procurar la solución de las necesidades más sentidas de la comunidad.', '2023-10-26 17:09:50', NULL, 1),
(13, 'SEGURIDAD', 'SEGURIDAD COMUNITARIA La seguridad comunitaria se basa en su actuación sobre nuevos paradigmas que comprometen activamente a la propia comunidad; de esta y sus autoridades es posible obtener consejos, cooperación, información, y la comprensión de los problemas que para los responsables de la seguridad pública.', '2023-10-26 17:10:57', NULL, 1),
(14, 'CURSOS', 'Curso de Participación y Gestión de la Acción Comunal\" se busca que el participante no sólo adquiera conocimientos sobre la labor comunal, sino, además, conocer sobre la relación entre ellos como organización social y la administración municipal, así como brindarles fundamentos para la gestión,', '2023-10-26 17:11:53', NULL, 1),
(15, 'JOVENES', 'La participación comunitaria de los jóvenes entenderá la heterogeneidad y diversidad de formas y ámbitos de su propia participación. Así, contrario a lo que se presupone\r\n', '2023-10-26 17:13:09', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblclass`
--

CREATE TABLE `tblclass` (
  `ID` int(5) NOT NULL,
  `ClassName` varchar(50) DEFAULT NULL,
  `Section` varchar(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblclass`
--

INSERT INTO `tblclass` (`ID`, `ClassName`, `Section`, `CreationDate`) VALUES
(1, 'Primer Grado', 'A', '2023-02-12 09:47:47'),
(2, 'Segundo Grado', 'A', '2023-02-12 09:48:29'),
(3, 'Tercer Año', 'A', '2023-02-12 09:49:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` int(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblcomments`
--

INSERT INTO `tblcomments` (`id`, `postId`, `name`, `email`, `comment`, `postingDate`, `status`) VALUES
(1, 11, 'juan diego baquero', 'juandiego1012-8@hotmail.com', 'hola', '2022-12-16 11:20:07', 1),
(2, 11, 'juan Diego Baquero', 'juandiego1012-8@hotmail.com', 'hola es muy buena la publicacion', '2023-10-21 12:57:30', 0),
(3, 11, 'juan Diego Baquero', 'juandiego1012-8@hotmail.com', 'HOLA', '2023-10-28 14:40:22', 1),
(4, 15, 'juan Diego Baquero', 'juandiego1012-8@hotmail.com', 'hola', '2023-11-10 01:55:12', 0),
(5, 15, 'juan Diego Baquero', 'juandiego1012-8@hotmail.com', 'juan', '2023-11-11 14:33:16', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` mediumtext DEFAULT NULL,
  `ClassId` int(10) DEFAULT NULL,
  `NoticeMsg` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `NoticeTitle`, `ClassId`, `NoticeMsg`, `CreationDate`) VALUES
(1, 'No hay clases por fallo en tubería', 1, '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-family: Roboto; font-size: 15px; line-height: 26px; color: rgb(68, 68, 68);\">Se informa que hay fallos en la tubería, que se van a a arreglas el jueves y viernes, por este motivo no hay clases.</p>', '2023-02-12 10:04:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'Junta De Acción Comunal', '<ol><li>Nuestro sitio es para las personas del barrio , cada día en constante crecimiento te invito a que nos escribas al correo del la junta de acción comunal \r\nNuestra misión\r\nExiste la idea de que para hacer crecer un negocio hay que ser despiadado. Pero sabemos que hay una mejor manera de crecer. Uno en el que lo que es bueno para el resultado final también lo es para los clientes. Creemos que las empresas pueden crecer con conciencia y tener éxito con alma, y ??que pueden hacerlo con la Junta de Acción comunal. Es por eso que hemos creado un ecosistema que une software, educación y comunidad para ayudar a las empresas a crecer mejor cada día.\r\n\r\n\r\neste sitio fue desarrollado por <b>Juan Diego Baquero Ovalle</b></li></ol>', '2021-06-29 18:30:00', '2023-11-09 20:39:16'),
(2, 'contactus', 'Contactanos', '<p>Presidente De La Junta De Accion Comunal Barrio Vision Colombia&nbsp;</p><p>Telefono :3142227924</p><p>Bogota Colombia</p>', '2021-06-29 18:30:00', '2023-09-21 23:30:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL,
  `viewCounter` int(11) DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`, `viewCounter`, `postedBy`, `lastUpdatedBy`) VALUES
(11, 'Los mejores Jugadores de Futbol', 8, 13, 'en esta publicacion se hablare de los mejores jugadores', '2023-10-20 20:45:04', '2023-11-10 01:57:17', 1, 'Los-mejores-Jugadores-de-Futbol', 'ac06103c0ab08fbe964a58543cc4f23f.jpg', 13, 'admin', NULL),
(13, 'Cuidando el medio Ambiente Barrio Visión Colombia', 9, 15, 'Estamos reunidos con toda la comunidad del barrio acá plantando arboles en el parque de visión Colombia', '2023-10-28 04:50:10', '2023-11-20 17:45:33', 1, 'Cuidando-el-medio-Ambiente-Barrio-Visión-Colombia', '47b69900159d693b3cd6cfae0b1cc12d.jpg', 9, 'admin', NULL),
(14, 'Cuidando el medio Ambiente Barrio Visión Colombia', 9, 15, 'La basura del parque de la araña tenemos que recogerla le pedimos a todas las personas recoger sus desechos', '2023-10-28 04:51:03', '2023-10-28 14:39:35', 1, 'Cuidando-el-medio-Ambiente-Barrio-Visión-Colombia', 'ededabe0f5d0d433a6bd30038e5eeb4e.jpg', 1, 'admin', NULL),
(15, 'SEGURIDAD DEL BARRIO VISION COLOMBIA', 13, 16, 'CUIDEMOS A NUESTRO BARRIO DE LA DELICUENCIA', '2023-10-28 04:53:37', '2023-11-20 18:07:20', 1, 'SEGURIDAD-DEL-BARRIO-VISION-COLOMBIA', '7de5beabb7a2ac9a0f97717e8f1cdb5b.jpg', 12, 'admin', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpublicnotice`
--

CREATE TABLE `tblpublicnotice` (
  `ID` int(5) NOT NULL,
  `NoticeTitle` varchar(200) DEFAULT NULL,
  `NoticeMessage` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblpublicnotice`
--

INSERT INTO `tblpublicnotice` (`ID`, `NoticeTitle`, `NoticeMessage`, `CreationDate`) VALUES
(1, 'Jean Day', '<b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">Se informa que el día de hoy abrá jean day, favor traer ropa casual</b><br>', '2023-02-12 10:27:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `StudentEmail` varchar(200) DEFAULT NULL,
  `StudentClass` varchar(100) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `StuID` varchar(200) DEFAULT NULL,
  `FatherName` mediumtext DEFAULT NULL,
  `MotherName` mediumtext DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `AltenateNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `DateofAdmission` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `StudentName`, `StudentEmail`, `StudentClass`, `Gender`, `DOB`, `StuID`, `FatherName`, `MotherName`, `ContactNumber`, `AltenateNumber`, `Address`, `UserName`, `Password`, `Image`, `DateofAdmission`) VALUES
(3, 'Pedro Estudiante', 'pestudiante@cweb.com', '2', 'Male', '2016-05-18', '1212121B', 'Pedro Padre', 'Pedro Madre', 3052589471, 3056987417, 'Calle 98 82 14', 'pestudiante@cweb.com', '1234abcd..', '95c5502bbf65990e7e123938e99452451679501667.png', '2023-03-22 16:14:27'),
(4, 'Juan Estudiante', 'jestudiante@cweb.com', '2', 'Male', '2015-06-11', '1212121A', 'Juan Padre', 'Juana Madre', 3056986743, 3162587410, 'Calle 98 N 23 01', 'jestudiante', '1234abcd..', 'c03a59a990928bbda605ffccddc3ef791679512169.png', '2023-03-22 19:09:29'),
(5, 'Juan Diego Baquero', 'Juandiego1012-8@hotmail.com', '1', 'Male', '2002-10-12', '1000454864', 'Alirio Baquero', 'Blanca Ines ', 3142227924, 3142227924, 'cr78g#14b39', 'juanbaquero1864', '4243873', '35b36fd79bf8e7e2e0abfb29df72fd941698176072.jpg', '2023-10-24 19:34:32'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'juan1864', '12345', '70305fc4e026175d66f17ce18100d4a11698176542.jpg', '2023-10-24 19:42:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(13, 8, 'FUTBOL', 'Deporte que se practica entre dos equipos de once jugadores que tratan de introducir un balón en la portería del contrario impulsándolo con los pies, la cabeza o cualquier parte del cuerpo excepto las manos y los brazos; en cada equipo hay un portero, que puede tocar el balón con las manos, aunque solamente dentro del área; vence el equipo que logra más goles durante los 90 minutos que dura el encuentro.', '2023-10-20 19:34:43', NULL, 1),
(14, 8, 'MICRO', 'El juego se realiza con un balón más pequeño y pesado, y se juega en equipos de cinco jugadores cada uno, incluyendo al portero. El objetivo del juego es marcar goles en la portería del equipo contrario, y el equipo que anote más goles al final del partido gana.', '2023-10-26 17:14:29', NULL, 1),
(15, 9, 'LIMPIEZA', 'la limpieza del barrio Visión Colombia esta constituido por la comunidad del barrio', '2023-10-26 17:15:24', NULL, 1),
(16, 13, 'POLICIAL', 'AYUDAD EN LA COMUNIDAD DEL BARRIO', '2023-10-28 04:52:48', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblteacher`
--

CREATE TABLE `tblteacher` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblteacher`
--

INSERT INTO `tblteacher` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Juan Diego Baquero', 'juan1864', 3142227924, 'juandiego1012-8@hotmail.com', '4b67deeb9aba04a5b54632ad19934f26', '2023-02-12 04:36:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AdminUserName` (`AdminUserName`);

--
-- Indices de la tabla `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postId` (`postId`);

--
-- Indices de la tabla `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postcatid` (`CategoryId`),
  ADD KEY `postsucatid` (`SubCategoryId`),
  ADD KEY `subadmin` (`postedBy`);

--
-- Indices de la tabla `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`),
  ADD KEY `catid` (`CategoryId`);

--
-- Indices de la tabla `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD CONSTRAINT `pid` FOREIGN KEY (`postId`) REFERENCES `tblposts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblposts`
--
ALTER TABLE `tblposts`
  ADD CONSTRAINT `postcatid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `postsucatid` FOREIGN KEY (`SubCategoryId`) REFERENCES `tblsubcategory` (`SubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subadmin` FOREIGN KEY (`postedBy`) REFERENCES `tbladmin` (`AdminUserName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD CONSTRAINT `catid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
