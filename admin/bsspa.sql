-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2021 a las 05:05:25
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bsspa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbadmin`
--

CREATE TABLE `tbadmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbadmin`
--

INSERT INTO `tbadmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'lis104', 'ad104', 77771111, 'pspa1@gmail.com', 'adminuser12345', '2019-07-25 06:21:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcita`
--

CREATE TABLE `tbcita` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RemarkDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcita`
--

INSERT INTO `tbcita` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(8, '496532914', 'Roman Garcia', 'rgarcia@gmail.com', 3211076843, '1/23/2020', '6:30pm', 'Fruit Facial', '2020-01-23 23:50:09', 'Excelente Cliente', '1', '2021-03-15 03:34:29'),
(9, '304302609', 'Lucia Granados', 'lgranaados@hotmail.com', 3065439781, '1/24/2020', '9:00am', 'Fruit Facial', '2020-01-24 13:56:31', 'La srta realiza el proceso correspondiente.', '1', '2021-03-15 03:35:14'),
(10, '604686038', 'Juan Lopez', 'lopezlopez@gmail.com', 3147641979, '1/24/2020', '1:00pm', 'Masaje Facial', '2020-01-24 14:54:02', 'Excelente cliente, sin inconvenientes', '1', '2021-03-15 03:36:10'),
(11, '932355891', 'Dilan Mena', 'menad12@outlook.com', 3178674931, '1/24/2020', '10:30am', 'Masaje Facial', '2020-01-24 15:11:49', 'Se realiza el pedido a satisfacción.', '1', '2021-03-15 03:37:53'),
(12, '182457009', 'Luis García', 'luisitoc4@gmail.com', 3163798467, '1/24/2020', '1:30 pm', 'Masaje Facial', '2020-01-24 16:20:12', 'Acepto', '1', '2021-03-15 03:39:18'),
(13, '958882735', 'Rocío Orellana', 'lrocioor@hotmail.com', 3010123201, '1/24/2020', '10:30pm', 'Layer Haircut', '2020-01-24 16:43:01', 'Servicio satisfactorio', '2', '2021-03-15 03:41:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbclientes`
--

CREATE TABLE `tbclientes` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Gender` enum('Mujer','Hombre','No definido') DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbclientes`
--

INSERT INTO `tbclientes` (`ID`, `Name`, `Email`, `MobileNumber`, `Gender`, `Details`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Juan Pérez ', 'jperez@gmail.com', 3144567894613, 'Hombre', 'Tomo un Hair Spa', '2019-07-26 11:09:10', '2021-03-15 03:42:29'),
(2, 'Edith Velazco', 'dgarzon@cweb.com', 3014673497814, 'Mujer', 'Taken haircut by him', '2019-07-26 11:10:02', '2020-01-24 15:08:42'),
(3, 'Daniel García ', 'garciadd@hotmail.com', 3126743476978, 'Hombre', 'Buen Cliente', '2019-07-26 11:10:28', '2021-03-15 03:43:04'),
(4, 'Adriana Navarrete', 'adrinava12@outlook.com', 3149874625789, 'Hombre', 'Tomo un Body Spa', '2019-08-19 13:38:58', '2021-03-15 03:43:52'),
(5, 'Norma Palacio', 'npalao@gmail.com', 3169463781497, 'Hombre', 'Cliente frecuente, le gustan los servicios Premium. Tenerlo muy en cuenta', '2019-08-21 16:24:53', '2021-03-15 03:44:57'),
(6, 'Roberto Gallardo', 'rgallar0@gmail.com', 3172232526, 'Hombre', 'Primera visita. Quedo satisfecho con los servicios.', '2020-01-24 14:56:35', '2021-03-15 03:46:08'),
(7, 'Humberto Gonzalez', 'hgonzalez@hotmail.com', 3179768047, 'Hombre', 'Cita en Espera', '2020-01-24 17:06:53', '2021-03-15 03:46:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbfactura`
--

CREATE TABLE `tbfactura` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbfactura`
--

INSERT INTO `tbfactura` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(26, 1, 1, 535139230, '2020-01-23 23:55:32'),
(27, 6, 1, 232733358, '2020-01-24 14:58:47'),
(28, 4, 10, 635394484, '2020-01-24 16:51:26'),
(29, 4, 15, 609822877, '2020-01-24 17:02:06'),
(30, 4, 16, 609822877, '2020-01-24 17:02:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpagina`
--

CREATE TABLE `tbpagina` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbpagina`
--

INSERT INTO `tbpagina` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'Acercade', 'Acerca de', 'En \'nombredelspa\' nuestro deber es atender de la mejor manera a nuestros clientes brindándoles una gran cantidad de servicios con el personal mejor calificado y a precios que seguramente te relajaran.\r\n\r\n', NULL, NULL, NULL, ''),
(2, 'contactanos', 'Contacto', 'San Salvador, El Salvador', 'lis104servicios@gmail.com', 22774070, NULL, '08:00 am to 6:30 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbservicios`
--

CREATE TABLE `tbservicios` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbservicios`
--

INSERT INTO `tbservicios` (`ID`, `ServiceName`, `Cost`, `CreationDate`) VALUES
(1, 'Masaje Facial', 20, '2019-07-25 11:22:38'),
(2, 'Facial de Fruta', 15, '2019-07-25 11:22:53'),
(3, 'Facial de Pepino', 10, '2019-07-25 11:23:10'),
(4, 'Manicure de Lujo', 12, '2019-07-25 11:23:34'),
(5, 'Integral de Pedicure y Corte de Cabello', 17, '2019-07-25 11:23:47'),
(6, 'Manicure Precio Estudiantes', 9, '2019-07-25 11:24:01'),
(7, 'Depilado de Piernas', 20, '2019-07-25 11:24:19'),
(8, 'Corte de Cabello Hombre', 8, '2019-07-25 11:24:38'),
(9, 'Corte de Barba', 4, '2019-07-25 11:24:53'),
(10, 'Masaje Espalda', 27, '2019-07-25 11:25:08'),
(11, 'Teñido de Cabello', 6, '2019-07-25 11:25:35'),
(12, 'Peinado  con Rayos', 9, '2019-08-19 13:36:27'),
(14, 'Ondulado y Grafilado', 9, '2019-08-21 15:45:50'),
(17, 'Exfoliante de Avena', 10, '2020-01-24 17:04:15'),
(18, 'Exfoliante de Quinoa', 12, '2020-01-24 17:04:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbcita`
--
ALTER TABLE `tbcita`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbfactura`
--
ALTER TABLE `tbfactura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tbpagina`
--
ALTER TABLE `tbpagina`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tbservicios`
--
ALTER TABLE `tbservicios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbcita`
--
ALTER TABLE `tbcita`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbfactura`
--
ALTER TABLE `tbfactura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `tbpagina`
--
ALTER TABLE `tbpagina`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbservicios`
--
ALTER TABLE `tbservicios`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
