-- jrodeiro - 7/10/2017
-- script de creación de la bd, usuario, asignación de privilegios a ese usuario sobre la bd
-- creación de tabla e insert sobre la misma.
--
-- CREAR LA BD BORRANDOLA SI YA EXISTIESE
--
DROP DATABASE IF EXISTS `IU2018`;
CREATE DATABASE `IU2018` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
--
-- SELECCIONAMOS PARA USAR
--
USE `IU2018`;
--
-- DAMOS PERMISO USO Y BORRAMOS EL USUARIO QUE QUEREMOS CREAR POR SI EXISTE
--
GRANT USAGE ON * . * TO `IU2018`@`localhost`;
	DROP USER `IU2018`@`localhost`;
--
-- CREAMOS EL USUARIO Y LE DAMOS PASSWORD,DAMOS PERMISO DE USO Y DAMOS PERMISOS SOBRE LA BASE DE DATOS.
--
CREATE USER IF NOT EXISTS `IU2018`@`localhost` IDENTIFIED BY 'pass2018';
GRANT USAGE ON *.* TO `IU2018`@`localhost` REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON `IU2018`.* TO `IU2018`@`localhost` WITH GRANT OPTION;
--
-- Estructura de tabla para la tabla `datos`
--
CREATE TABLE IF NOT EXISTS `USUARIOS` (

`login` varchar(15) NOT NULL,

`password` varchar(128) NOT NULL,

`DNI` varchar(9) NOT NULL,

`nombre` varchar(30) NOT NULL,

`apellidos` varchar(50) NOT NULL,

`telefono` varchar(11) NOT NULL,

`email` varchar(60) NOT NULL,

`tipoUsuario` enum('DE CENTRO','AUTORIZADOR','ADMIN') COLLATE latin1_spanish_ci DEFAULT NULL,

PRIMARY KEY (`email`),

UNIQUE KEY `DNI` (`DNI`),

UNIQUE KEY `login` (`login`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `EMPRESAS`(

    `nombreEmpresa` varchar(60) NOT NULL,

    PRIMARY KEY (`nombreEmpresa`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `CENTROS`(

    `idCentro` varchar(60) NOT NULL,

    `nombreEmpresa` varchar(60) NOT NULL,

    PRIMARY KEY (`idCentro`),

    FOREIGN KEY (`nombreEmpresa`) REFERENCES `EMPRESAS`(`nombreEmpresa`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `CONTRATOS` (

`idContrato` varchar(15) NOT NULL,

`importe` int(20) NOT NULL,

`fechaFinal` date NOT NULL,

`docContrato` varchar(60) NOT NULL,

`idCentro` varchar(60) NOT NULL,

PRIMARY KEY (`idContrato`),

FOREIGN KEY (`idCentro`) REFERENCES `CENTROS`(`idCentro`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `VISITAS` (

`idVisita` varchar(60) NOT NULL,

`fechInicio` date NOT NULL,

`fechFin` date NOT NULL,

`estado` enum('NO REALIZADA','REALIZADA') COLLATE latin1_spanish_ci DEFAULT NULL,

`idCentro` varchar(60) NOT NULL,

`idContrato` varchar(60) NOT NULL,

PRIMARY KEY (`idVisita`),

FOREIGN KEY (`idCentro`) REFERENCES `CENTROS`(`idCentro`),

FOREIGN KEY (`idContrato`) REFERENCES `CONTRATOS`(`idContrato`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `INCIDENCIAS` (

`numIncidencia` varchar(60) NOT NULL,

`fechInicio` date NOT NULL,

`fechFin` date NOT NULL,

`estado` enum('NO REALIZADA','REALIZADA') COLLATE latin1_spanish_ci DEFAULT NULL,

`idVisita` varchar(60) NOT NULL,

PRIMARY KEY (`numIncidencia`),

FOREIGN KEY (`idVisita`) REFERENCES `VISITAS`(`idVisita`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8;