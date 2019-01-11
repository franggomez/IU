-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2019 a las 18:17:22
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `iu2018`
--
CREATE DATABASE IF NOT EXISTS `iu2018` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `iu2018`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriacontratos`
--

CREATE TABLE `categoriacontratos` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoriacontratos`
--

INSERT INTO `categoriacontratos` (`idCategoria`, `categoria`) VALUES
(1, 'certificador'),
(2, 'de mantenimiento'),
(3, 'de reparacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE `centros` (
  `idCentro` varchar(60) NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  `emailUsuarioCentro` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `centros`
--

INSERT INTO `centros` (`idCentro`, `idEmpresa`, `emailUsuarioCentro`) VALUES
('1', 1, 'manuel@gmail.com'),
('2', 2, 'manuel@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `idContrato` varchar(15) NOT NULL,
  `importe` int(20) NOT NULL,
  `fechaFinal` date NOT NULL,
  `docContrato` varchar(60) NOT NULL,
  `idCentro` varchar(60) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`idContrato`, `importe`, `fechaFinal`, `docContrato`, `idCentro`, `idCategoria`) VALUES
('1', 10000, '2019-01-31', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', '1', 1),
('2', 5000, '2019-01-29', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `idEmpresa` int(11) NOT NULL,
  `nombreEmpresa` varchar(60) NOT NULL,
  `tipo` enum('CERTIFICADORA','MANTENEDORA','ARREGLOS','') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`idEmpresa`, `nombreEmpresa`, `tipo`) VALUES
(1, 'Empresa 1', 'CERTIFICADORA'),
(2, 'Empresa 2', 'MANTENEDORA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `numIncidencia` varchar(60) NOT NULL,
  `fechaIncidencia` date NOT NULL,
  `estado` enum('NO REALIZADA','REALIZADA') CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `idVisita` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`numIncidencia`, `fechaIncidencia`, `estado`, `idVisita`) VALUES
('1', '2019-01-18', 'NO REALIZADA', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(15) NOT NULL,
  `password` varchar(128) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tipoUsuario` enum('DE CENTRO','AUTORIZADOR') CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`login`, `password`, `DNI`, `nombre`, `apellidos`, `telefono`, `email`, `tipoUsuario`) VALUES
('fran', 'fran', '11111111A', 'Francisco', 'Gomez', '600121212', 'fran@gmail.com', 'AUTORIZADOR'),
('manuel', 'manuel', '22222222B', 'Manuel', 'Varela', '699875421', 'manuel@gmail.com', 'DE CENTRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `idVisita` varchar(60) NOT NULL,
  `fechaVisita` date NOT NULL,
  `estado` enum('NO REALIZADA','REALIZADA') CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `idCentro` varchar(60) NOT NULL,
  `idContrato` varchar(60) NOT NULL,
  `informeVisita` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`idVisita`, `fechaVisita`, `estado`, `idCentro`, `idContrato`, `informeVisita`) VALUES
('1', '2019-01-17', 'NO REALIZADA', '1', '1', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('2', '2019-01-20', 'NO REALIZADA', '2', '2', 'bbbbbbbbbbbbbbbbbbbbb');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoriacontratos`
--
ALTER TABLE `categoriacontratos`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `centros`
--
ALTER TABLE `centros`
  ADD PRIMARY KEY (`idCentro`),
  ADD KEY `nombreEmpresa` (`idEmpresa`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`idContrato`),
  ADD KEY `idCentro` (`idCentro`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`numIncidencia`),
  ADD KEY `idVisita` (`idVisita`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`idVisita`),
  ADD KEY `idCentro` (`idCentro`),
  ADD KEY `idContrato` (`idContrato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoriacontratos`
--
ALTER TABLE `categoriacontratos`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
